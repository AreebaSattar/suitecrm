<?php
$viewdefs['Opportunities']['EditView'] = array(
    'templateMeta' => array(
        'maxColumns' => '2',
        'widths' => array(
            array('label' => '10', 'field' => '30'),
            array('label' => '10', 'field' => '30')
        ),
        'javascript' => '{$PROBABILITY_SCRIPT}',
    ),
    'panels' => array(
        'default' => array(
            array(
                array('name' => 'name'),
                array(
                    'name' => 'account_name',
                    'displayParams' => array(
                        'additionalFields' => array(
                            'company_id_c' => 'company_id_c', // Auto-populate company_id_c
                        ),
                    ),
                ),
            ),
            array(
                array('name' => 'company_id_c', 'label' => 'LBL_COMPANY_ID', 'readonly' => true), // Read-only field
            ),
            array(
                array('name' => 'currency_id', 'label' => 'LBL_CURRENCY'),
                array('name' => 'date_closed'),
            ),
            array(
                array('name' => 'amount'),
                'opportunity_type',
            ),
            array(
                'sales_stage',
                'lead_source',
            ),
            array(
                'probability',
                'campaign_name',
            ),
            array(
                'next_step',
            ),
            array(
                'description',
            ),
            array(
                array('name' => 'pipeline_id', 'label' => 'LBL_PIPELINE_ID'),
            ),
        ),
        'LBL_PANEL_ASSIGNMENT' => array(
            array(
                'assigned_user_name',
            ),
        ),
    ),
);
