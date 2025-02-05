<?php
require_once('include/MVC/View/views/view.edit.php');

class OpportunitiesViewEdit extends ViewEdit {
    public function display() {
        parent::display();
        // Custom JavaScript to Auto-Fill company_id_c
        echo '<script type="text/javascript">
            $(document).ready(function() {
                $("#account_name").change(function() {
                    var accountId = $("#account_id").val(); // Get Account ID
                    if (accountId) {
                        $.ajax({
                            url: "index.php?module=Accounts&action=retrieve&record=" + accountId,
                            dataType: "json",
                            success: function(data) {
                                if (data && data.company_id_c) {
                                    $("#company_id_c").val(data.company_id_c); // Auto-fill field
                                }
                            }
                        });
                    }
                });
            });
        </script>';
    }
}
