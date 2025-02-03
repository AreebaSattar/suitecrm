<?php
 // created: 2025-02-03 18:18:39
$layout_defs["Users"]["subpanel_setup"]['st_time_management_users'] = array (
  'order' => 100,
  'module' => 'st_time_management',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_ST_TIME_MANAGEMENT_USERS_FROM_ST_TIME_MANAGEMENT_TITLE',
  'get_subpanel_data' => 'st_time_management_users',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
