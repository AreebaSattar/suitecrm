<?php
require_once 'include/entryPoint.php';

if (!isset($_GET['record'])) {
    echo json_encode(['error' => 'No record ID provided']);
    exit;
}

$recordId = $_GET['record'];
$account = BeanFactory::getBean('Accounts', $recordId);

if ($account) {
    // Fetch company_id_c from accounts_cstm
    $query = "SELECT company_id_c FROM accounts_cstm WHERE id_c = '{$recordId}'";
    $result = $GLOBALS['db']->query($query);
    $row = $GLOBALS['db']->fetchByAssoc($result);

    echo json_encode([
        'company_id_c' => $row['company_id_c'] ?? ''
    ]);
} else {
    echo json_encode(['error' => 'Account not found']);
}
exit;
