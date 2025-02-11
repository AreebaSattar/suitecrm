<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
class UpdateContactDescFromTask
{
    public function updateContactDescription($bean, $event, $arguments)
    {
        if ($bean->parent_type !== 'Contacts' || empty($bean->parent_id)) {
            return;
        }
        if (empty($bean->fetched_row)) {
            return;
        }
        if ($bean->fetched_row['status'] === 'Completed' || $bean->status !== 'Completed') {
            return;
        }

        $contact = BeanFactory::getBean('Contacts', $bean->parent_id);
        $GLOBALS['log']->fatal('Contacts', $bean->parent_id);


        if (!$contact->load_relationship('tasks')) {
            return;
        }
        $taskIds = $contact->tasks->get();
        $GLOBALS['log']->fatal('$taskIds', $taskIds);

        $relatedTasks = $contact->tasks->getBeans();

        $openTasks = [];
        foreach ($relatedTasks as $task) {
            if ($task->status !== 'Completed') {
                $openTasks[] = $task;
            }
        }

        if (count($openTasks) > 0) {
            return;
        }

        if (!empty($bean->description)) {
            $contact->description = $bean->description;
            $contact->save();
        }
    }
}
?>