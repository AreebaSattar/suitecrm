<?php
// created: 2025-02-26 15:39:12
$dictionary["new_brands_contacts_1"] = array (
  'true_relationship_type' => 'many-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'new_brands_contacts_1' => 
    array (
      'lhs_module' => 'new_Brands',
      'lhs_table' => 'new_brands',
      'lhs_key' => 'id',
      'rhs_module' => 'Contacts',
      'rhs_table' => 'contacts',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'new_brands_contacts_1_c',
      'join_key_lhs' => 'new_brands_contacts_1new_brands_ida',
      'join_key_rhs' => 'new_brands_contacts_1contacts_idb',
    ),
  ),
  'table' => 'new_brands_contacts_1_c',
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
      'name' => 'new_brands_contacts_1new_brands_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'new_brands_contacts_1contacts_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'new_brands_contacts_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'new_brands_contacts_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'new_brands_contacts_1new_brands_ida',
        1 => 'new_brands_contacts_1contacts_idb',
      ),
    ),
  ),
);