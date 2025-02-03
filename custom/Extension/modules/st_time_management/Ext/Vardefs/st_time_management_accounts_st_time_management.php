<?php
// created: 2025-02-03 18:18:39
$dictionary["st_time_management"]["fields"]["st_time_management_accounts"] = array (
  'name' => 'st_time_management_accounts',
  'type' => 'link',
  'relationship' => 'st_time_management_accounts',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_ST_TIME_MANAGEMENT_ACCOUNTS_FROM_ACCOUNTS_TITLE',
  'id_name' => 'st_time_management_accountsaccounts_ida',
);
$dictionary["st_time_management"]["fields"]["st_time_management_accounts_name"] = array (
  'name' => 'st_time_management_accounts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ST_TIME_MANAGEMENT_ACCOUNTS_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'st_time_management_accountsaccounts_ida',
  'link' => 'st_time_management_accounts',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["st_time_management"]["fields"]["st_time_management_accountsaccounts_ida"] = array (
  'name' => 'st_time_management_accountsaccounts_ida',
  'type' => 'link',
  'relationship' => 'st_time_management_accounts',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ST_TIME_MANAGEMENT_ACCOUNTS_FROM_ST_TIME_MANAGEMENT_TITLE',
);
