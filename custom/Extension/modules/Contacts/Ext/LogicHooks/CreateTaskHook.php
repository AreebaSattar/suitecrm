<?php
$hook_array['after_save'][] = array(
    1,
    'Create task if contact meets conditions',
    'custom/modules/Contacts/CreateTaskOnNewContact.php',
    'CreateTaskOnNewContact',
    'afterSave'
);
?>
