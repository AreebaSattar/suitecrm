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
        $GLOBALS['log']->info("Email: " . $bean->email1);
        $GLOBALS['log']->info("Phone: " . $bean->phone_mobile);


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
        }
    }
}
?>
