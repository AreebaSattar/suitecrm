<?php
class CustomLogic  //naming convention
{
    function setCID($bean, $event, $arguments)
    {
        global $log, $db;

        if (empty($bean->fetched_row['id']) && empty($bean->company_id_c)) {
            $log->fatal("Creating new Company, setting company_id_c...");

            $query = "SELECT company_id_c FROM accounts_cstm 
                      WHERE company_id_c LIKE 'org_%' 
                      ORDER BY CAST(SUBSTRING(company_id_c, 5) AS UNSIGNED) DESC 
                      LIMIT 1";

            $result = $db->query($query);
            $row = $db->fetchByAssoc($result);

            if (!empty($row['company_id_c'])) {
                $last_id = intval(str_replace('org_', '', $row['company_id_c']));
                $new_id = $last_id + 1;
            } else {
                $new_id = 1;
            }

            $bean->company_id_c = 'org_' . $new_id;

            $log->fatal("New company_id_c set to: " . $bean->company_id_c);
        }
    }
}