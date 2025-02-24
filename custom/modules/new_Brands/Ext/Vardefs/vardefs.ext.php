<?php 
 //WARNING: The contents of this file are auto-generated




$dictionary['new_Brands']['fields']['brand_logo'] = array(
    'name' => 'brand_logo',
    'vname' => 'LBL_BRAND_LOGO',
    'type' => 'image',
    'dbType' => 'varchar',
    'len' => '255',
    'comment' => 'Logo of the brand',
    'width' => '50',
    'height' => '50',
);
$dictionary['new_Brands']['fields']['brand_category'] = array(
    'name' => 'brand_category',
    'vname' => 'LBL_BRAND_CATEGORY',
    'type' => 'enum',
    'options' => 'brand_category_list',
    'len' => 100,
    'audited' => true,
    'required' => true,
    'reportable' => true,
);
$dictionary['new_Brands']['fields']['brand_category'] = array(
    'name' => 'brand_category',
    'vname' => 'LBL_BRAND_CATEGORY',
    'type' => 'enum',
    'options' => 'brand_category_list',
    'len' => 100,
    'audited' => true,
    'required' => true,
    'reportable' => true,
);
$dictionary['new_Brands']['fields']['brand_description'] = array(
    'name' => 'brand_description',
    'vname' => 'LBL_BRAND_DESCRIPTION',
    'type' => 'text',
    'dbType' => 'text',
    'massupdate' => false,
    'duplicate_merge' => 'enabled',
    'merge_filter' => 'disabled',
    'unified_search' => false,
    'full_text_search' => array('boost' => 3),
    'audited' => true,
    'required' => false,
    'reportable' => true,
    'importable' => 'true',
    'rows' => 4,
    'cols' => 60,
);
$dictionary['new_Brands']['fields']['website'] = array(
    'name' => 'website',
    'vname' => 'LBL_WEBSITE',
    'type' => 'url',
    'dbType' => 'varchar',
    'len' => 255,
);
$dictionary['new_Brands']['fields']['contact_email'] = array(
    'name' => 'contact_email',
    'vname' => 'LBL_CONTACT_EMAIL',
    'type' => 'email',
    'dbType' => 'varchar',
    'len' => 100,
    'required' => false,
    'unified_search' => true,
    'audited' => true,
);
$dictionary['new_Brands']['fields']['contact_phone'] = array(
    'name' => 'contact_phone',
    'vname' => 'LBL_CONTACT_PHONE',
    'type' => 'phone',
    'dbType' => 'varchar',
    'len' => 50,
    'required' => false,
    'unified_search' => true,
    'audited' => true,
);
$dictionary['new_Brands']['fields']['headquarters'] = array(
    'name' => 'headquarters',
    'vname' => 'LBL_HEADQUARTERS',
    'type' => 'varchar',
    'dbType' => 'varchar',
    'len' => 255,
    'required' => false,
    'unified_search' => true,
    'audited' => true,
);
$dictionary['new_Brands']['fields']['status'] = array(
    'name' => 'status',
    'vname' => 'LBL_STATUS',
    'type' => 'enum',
    'options' => 'status_list',
    'len' => 100,
    'audited' => true,
    'required' => true,
    'reportable' => true,
);
$dictionary['new_Brands']['fields']['industry'] = array(
    'name' => 'industry',
    'vname' => 'LBL_INDUSTRY',
    'type' => 'enum',
    'options' => 'industry_list',
    'len' => 100,
    'audited' => true,
    'required' => true,
    'reportable' => true,
);
$dictionary['new_Brands']['fields']['market_region'] = array(
    'name' => 'market_region',
    'vname' => 'LBL_MARKET_REGION',
    'type' => 'multienum',
    'options' => 'brand_region_list',
    'len' => 255,
    'audited' => true,
    'isMultiSelect' => true,
);


$dictionary['new_Brands']['relationships']['new_brands_opportunities'] = array(
    'lhs_module' => 'new_Brands',
    'lhs_table' => 'new_brands',
    'lhs_key' => 'id',
    'rhs_module' => 'Opportunities',
    'rhs_table' => 'opportunities',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'new_brands_opportunities_c',
    'join_key_lhs' => 'new_brands_opportunitiesnew_brands_ida',
    'join_key_rhs' => 'new_brands_opportunitiesopportunities_idb',
);


?>