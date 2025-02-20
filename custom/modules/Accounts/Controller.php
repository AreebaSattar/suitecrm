<?php

require_once 'include/MVC/Controller/SugarController.php';
class AccountsController extends SugarController
{
    public function action_CustomerPartnersAccounts()
    {
        $this->view = 'customerpartnersaccounts';
    }
    public function action_OtherThanCustomerPartnersAccounts()
    {
        $this->view = 'otherthancustomerpartnersaccounts';
    }
}