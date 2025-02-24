<?php 
 //WARNING: The contents of this file are auto-generated


$dictionary['Opportunity']['fields']['company_id_c'] = array(
'name' => 'company_id_c',
'vname' => 'LBL_COMPANY_ID',
'type' => 'varchar',
'len' => '36',
'required' => false,
'reportable' => true,
);


$dictionary['Opportunity']['relationships']['new_brands_opportunities'] = array(
    'lhs_module' => 'new_Brands',
    'lhs_table' => 'new_brands',
    'lhs_key' => 'id',
    'rhs_module' => 'Opportunities',
    'rhs_table' => 'opportunities',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'new_brands_opportunities_c',
    'join_key_lhs' => 'new_brands_id',
    'join_key_rhs' => 'opportunities_id',
);



$dictionary['Opportunity']['fields']['pipeline_id'] = array(
    'name' => 'pipeline_id',
    'vname' => 'LBL_PIPELINE_ID',
    'type' => 'varchar',
    'len' => '255',
    'required' => false,
    'audited' => true,
    'duplicate_merge' => 'enabled',
    'merge_filter' => 'enabled',
    'reportable' => true,
    'importable' => 'true',
    'duplicate_on_record_copy' => 'always',
);


 // created: 2025-02-03 17:14:47
$dictionary['Opportunity']['fields']['jjwg_maps_address_c']['inline_edit']=1;

 

 // created: 2025-02-03 17:14:47
$dictionary['Opportunity']['fields']['jjwg_maps_geocode_status_c']['inline_edit']=1;

 

 // created: 2025-02-03 17:14:46
$dictionary['Opportunity']['fields']['jjwg_maps_lat_c']['inline_edit']=1;

 

 // created: 2025-02-03 17:14:46
$dictionary['Opportunity']['fields']['jjwg_maps_lng_c']['inline_edit']=1;

 

// created: 2025-02-03 18:39:46
$dictionary['Pipeline']['fields']['pipeline_id_c']['inline_edit']='1';
$dictionary['Pipeline']['fields']['pipeline_id_c']['labelValue']='Pipeline ID';

?>