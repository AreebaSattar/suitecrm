<?php
// created: 2025-02-03 18:18:39
$dictionary["st_time_management_accounts"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'st_time_management_accounts' => 
    array (
      'lhs_module' => 'Accounts',
      'lhs_table' => 'accounts',
      'lhs_key' => 'id',
      'rhs_module' => 'st_time_management',
      'rhs_table' => 'st_time_management',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'st_time_management_accounts_c',
      'join_key_lhs' => 'st_time_management_accountsaccounts_ida',
      'join_key_rhs' => 'st_time_management_accountsst_time_management_idb',
    ),
  ),
  'table' => 'st_time_management_accounts_c',
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
      'name' => 'st_time_management_accountsaccounts_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'st_time_management_accountsst_time_management_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'st_time_management_accountsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'st_time_management_accounts_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'st_time_management_accountsaccounts_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'st_time_management_accounts_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'st_time_management_accountsst_time_management_idb',
      ),
    ),
  ),
);