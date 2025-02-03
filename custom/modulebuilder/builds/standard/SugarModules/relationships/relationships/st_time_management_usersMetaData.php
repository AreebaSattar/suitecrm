<?php
// created: 2025-02-03 18:18:39
$dictionary["st_time_management_users"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'st_time_management_users' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'st_time_management',
      'rhs_table' => 'st_time_management',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'st_time_management_users_c',
      'join_key_lhs' => 'st_time_management_usersusers_ida',
      'join_key_rhs' => 'st_time_management_usersst_time_management_idb',
    ),
  ),
  'table' => 'st_time_management_users_c',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'st_time_management_usersusers_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'st_time_management_usersst_time_management_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'st_time_management_usersspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'st_time_management_users_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'st_time_management_usersusers_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'st_time_management_users_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'st_time_management_usersst_time_management_idb',
      ),
    ),
  ),
);