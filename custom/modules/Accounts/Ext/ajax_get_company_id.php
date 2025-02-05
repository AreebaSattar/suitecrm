<?php
// ajax_get_company_id.php file to retrieve company_id_c based on Account (Company) ID

if (isset($_GET['account_id'])) {
    $accountId = $_GET['account_id'];

    // Retrieve the company record based on Account ID (Company)
    $company = BeanFactory::getBean('Companies', $accountId);  // Using Companies module

    if ($company && isset($company->company_id_c)) {
        // Send the company_id_c value as a JSON response
        echo json_encode(array('company_id_c' => $company->company_id_c));
    } else {
        echo json_encode(array('company_id_c' => ''));
    }
}
?>
