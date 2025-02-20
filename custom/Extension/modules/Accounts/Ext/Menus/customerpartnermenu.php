<?php

if (ACLController::checkAccess('Accounts', 'list', true)) {
    $module_menu[] = array(
        "index.php?module=Accounts&action=CustomerPartnersAccounts",
        "Customer & Partner Accounts",
        "Accounts"
    );
    $module_menu[] = array(
        "index.php?module=Accounts&action=OtherThanCustomerPartnersAccounts",
        "Other than Customer & Partner Accounts",
        "Accounts"
    );
}
