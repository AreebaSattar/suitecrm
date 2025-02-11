<?php
$hook_array['after_save'][] = array(
    1,
    'Update Contact Description on the Basis of Task Status',
    'custom/modules/Tasks/UpdateContactDescFromTask.php',
    'UpdateContactDescFromTask',
    'updateContactDescription',
);


