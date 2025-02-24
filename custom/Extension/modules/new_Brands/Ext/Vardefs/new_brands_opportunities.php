<?php
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
