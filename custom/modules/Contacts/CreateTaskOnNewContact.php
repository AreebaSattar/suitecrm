<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class CreateTaskOnNewContact
{
    function newTaskOnContact($bean, $event, $arguments)
    {

        global $timedate;
        if (!empty($bean->fetched_row) && isset($bean->fetched_row['id'])) {
            return;
        }

        error_log("Logic Hook triggered for Contact: " . $bean->id);

        $valid_lead_sources = array('Trade Show', 'Web Site');

        if (!in_array($bean->lead_source, $valid_lead_sources)) {
            return;
        }

        if (!empty($bean->email1) && !empty($bean->phone_mobile)) {

            $nowDateTime = $timedate->nowDb();
            $task = BeanFactory::newBean('Tasks');
            $task->name = "Follow up - " . $bean->first_name . " " . $bean->last_name;
            $task->status = "Not Started";
            $task->parent_type = "Contacts";
            $task->parent_id = $bean->id;
            $task->contact_id = $bean->id;
            $task->date_due = $nowDateTime;
            $task->time_due = "23:59:59";
            $task->description = $bean->phone_mobile;
            $task->priority = "High";
            $task->assigned_user_id = $bean->assigned_user_id;

            $task->save();

            $GLOBALS['log']->info("Task created and linked to Contact ID: " . $bean->id);
            $this->sendEmailNotification($task);
        }
    }
    function sendEmailNotification($task)
    {
        global $current_user, $timedate;

        $assignedUser = BeanFactory::getBean('Users', $task->assigned_user_id);

        if (empty($assignedUser->email1)) {
            $GLOBALS['log']->info("No email found for assigned user.");
            return;
        }

        $subject = "A Task has been assigned to you";
        $emailBody = "Hi " . $assignedUser->first_name . " " . $assignedUser->last_name . ",<br><br>";
        $emailBody .= "A task has been assigned to you.<br><br>";
        $emailBody .= "<b>Subject:</b> " . $task->name . "<br>";
        $emailBody .= "<b>Priority:</b> " . $task->priority . "<br>";
        $emailBody .= "<b>Due Date:</b> " . $timedate->to_display_date_time($task->date_due) . "<br>";
        $emailBody .= "<b>Status:</b> " . $task->status . "<br>";
        $emailBody .= "<b>Description:</b> " . $task->description . "<br><br>";
        $emailBody .= "You may <a href='" . $GLOBALS['sugar_config']['site_url'] . "/index.php?module=Tasks&action=DetailView&record=" . $task->id . "'>review this task</a>.";

        require_once('include/SugarPHPMailer.php');
        $mail = new SugarPHPMailer();
        $mail->setMailerForSystem();
        $mail->From = $current_user->email1 ?: "areeba@sage-teck.com";
        $mail->FromName = "CRM";
        $mail->Subject = $subject;
        $mail->Body = $emailBody;
        $mail->isHTML(true);
        $mail->addAddress($assignedUser->email1);

        if (!$mail->send()) {
            $GLOBALS['log']->fatal("Email failed: " . $mail->ErrorInfo);
        } else {
            $GLOBALS['log']->info("Email sent successfully to " . $assignedUser->email1);
        }
    }
}
?>
