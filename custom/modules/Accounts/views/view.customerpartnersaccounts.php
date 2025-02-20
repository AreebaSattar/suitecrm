<?php
require_once 'include/MVC/View/views/view.list.php';

class AccountsViewCustomerPartnersAccounts extends ViewList
{
    public function listViewProcess()
    {
        $this->params['custom_where'] = " AND accounts.account_type IN ('Customer', 'Partner')";
        parent::listViewProcess();
    }

    public function display()
    {
        echo "<h2 style='padding: 10px; color: #d66c60;'>Customer and Partner Accounts</h2>";
        parent::display();
    }
}
