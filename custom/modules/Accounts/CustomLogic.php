<?php
class CustomLogicHookCompanyId
{
    function setCompanyId($bean, $event, $arguments)
    {
        global $log, $db;

        if (empty($bean->fetched_row['id']) && empty($bean->company_id_c)) {
            $log->fatal("Creating new Company, setting company_id_c...");

            $query = "SELECT MAX(CAST(SUBSTRING(company_id_c, 5) AS UNSIGNED)) FROM accounts_cstm 
                      WHERE company_id_c LIKE 'org_%'";

            $maxCompanyId = $db->getOne($query);

            $newId = !empty($maxCompanyId) ? intval($maxCompanyId) + 1 : 1;

            $bean->company_id_c = 'org_' . $newId;

            $log->fatal("New company_id_c set to: " . $bean->company_id_c);
        }
    }
}
