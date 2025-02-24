<?php
$viewdefs['new_Brands']['DetailView'] = array(
    'templateMeta' => array(
        'maxColumns' => '2',
        'widths' => array(
            array('label' => '10', 'field' => '30'),
            array('label' => '10', 'field' => '30')
        ),
    ),
    'panels' => array(
        'default' => array(
            array(
                array(
                    'name' => 'name',
                    'label' => 'LBL_NAME',
                ),
            ),
            array(
                array(
                    'name' => 'brand_logo',
                    'label' => 'LBL_BRAND_LOGO',
                    'type' => 'image',
                ),
                array(
                    'name' => 'brand_category',
                    'label' => 'LBL_BRAND_CATEGORY',
                ),
            ),
            array(
                array(
                    'name' => 'brand_description',
                    'label' => 'LBL_BRAND_DESCRIPTION',
                ),
            ),
            array(
                array(
                    'name' => 'website',
                    'label' => 'LBL_WEBSITE',
                    'type' => 'url',
                ),
                array(
                    'name' => 'contact_email',
                    'label' => 'LBL_CONTACT_EMAIL',
                    'type' => 'email',
                ),
            ),
            array(
                array(
                    'name' => 'contact_phone',
                    'label' => 'LBL_CONTACT_PHONE',
                    'type' => 'phone',
                ),
                array(
                    'name' => 'headquarters',
                    'label' => 'LBL_HEADQUARTERS',
                    'type' => 'varchar',
                ),
            ),
            array(
                array(
                    'name' => 'industry',
                    'label' => 'LBL_INDUSTRY',
                ),
                array(
                    'name' => 'status',
                    'label' => 'LBL_STATUS',
                ),
            ),
            array(
                array(
                    'name' => 'market_region',
                    'label' => 'LBL_MARKET_REGION',
                    'type' => 'multienum',
                    'options' => 'brand_region_list',
                ),
            ),
        ),
    ),
);
