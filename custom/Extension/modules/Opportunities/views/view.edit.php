<?php
require_once('include/MVC/View/views/view.edit.php');

class OpportunitiesViewEdit extends ViewEdit
{
    public function display()
    {
        parent::display();

        $script = <<<EOQ
        <script type="text/javascript">
            $(document).ready(function() {
                // When Account Name is selected, fetch and populate company_id_c
                $("#account_name").change(function() {
                    var accountId = $("#account_id").val(); // Get selected account ID
                    if (accountId) {
                        // AJAX Call to get company_id_c from Accounts module
                        $.ajax({
                            url: "index.php?module=Accounts&action=getCompanyId",
                            type: "POST",
                            data: { account_id: accountId },
                            success: function(response) {
                                $("#company_id_c").val(response); // Populate company_id_c
                            }
                        });
                    } else {
                        $("#company_id_c").val(""); // Clear field if no account is selected
                    }
                });
            });
        </script>
        EOQ;

        echo $script;
    }
}
