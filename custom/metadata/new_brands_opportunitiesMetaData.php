<?php
$dictionary["new_brands_opportunities"] = array (
    'true_relationship_type' => 'many-to-many',
    'relationships' =>
        array (
            'new_brands_opportunities' =>
                array (
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
                ),
        ),
    'table' => 'new_brands_opportunities_c',
    'fields' =>
        array (
            array (
                'name' => 'id',
                'type' => 'varchar',
                'len' => 36,
            ),
            array (
                'name' => 'date_modified',
                'type' => 'datetime',
            ),
            array (
                'name' => 'deleted',
                'type' => 'bool',
                'len' => '1',
                'default' => '0',
                'required' => true,
            ),
            array (
                'name' => 'new_brands_opportunitiesnew_brands_ida',
                'type' => 'varchar',
                'len' => 36,
            ),
            array (
                'name' => 'new_brands_opportunitiesopportunities_idb',
                'type' => 'varchar',
                'len' => 36,
            ),
        ),
    'indices' =>
        array (
            array (
                'name' => 'new_brands_opportunitiesspk',
                'type' => 'primary',
                'fields' => array ('id'),
            ),
            array (
                'name' => 'new_brands_opportunities_ida1',
                'type' => 'index',
                'fields' => array ('new_brands_opportunitiesnew_brands_ida'),
            ),
            array (
                'name' => 'new_brands_opportunities_alt',
                'type' => 'alternate_key',
                'fields' => array ('new_brands_opportunitiesopportunities_idb'),
            ),
        ),
);
?>
