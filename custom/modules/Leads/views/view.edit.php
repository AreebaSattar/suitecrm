<?php
class CustomLeadsViewEdit extends ViewEdit {
    function display() {
        parent::display();

        // Add custom JavaScript
        echo '<script type="text/javascript" src="custom/modules/Leads/custom_leads.js"></script>';
    }
}
