<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class CreateTaskOnNewContact
{
    function newTaskOnContact($bean, $event, $arguments)
    {

        if (!empty($bean->fetched_row) && isset($bean->fetched_row['id'])) {
            return;
        }


        $valid_lead_sources = array('Trade Show', 'Website');


        if (!in_array($bean->lead_source, $valid_lead_sources)) {
            return;
        }


        if (!empty($bean->email1) && !empty($bean->phone_mobile)) {


            $task = BeanFactory::newBean('Tasks');
            $task->name = "Follow up with " . $bean->first_name . " " . $bean->last_name;
            $task->status = "Not Started";
            $task->parent_type = "Contacts";
            $task->parent_id = $bean->id;
            $task->assigned_user_id = $bean->assigned_user_id; // Assign to the same user

            $task->save();

            $GLOBALS['log']->info("Task created and linked to Contact ID: " . $bean->id);
        }
    }
}
?>
