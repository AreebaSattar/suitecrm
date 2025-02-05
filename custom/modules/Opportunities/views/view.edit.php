<?php
require_once('include/MVC/View/views/view.edit.php');

class OpportunitiesViewEdit extends ViewEdit {
    public function display() {
        parent::display();

        // JavaScript to auto-populate company_id_c
        echo '<script type="text/javascript">
            $(document).ready(function() {
                $("#account_name").change(function() {
                    var accountId = $("input[name=\'account_id\']").val(); // Get selected Account ID
                    console.log("Selected Account ID:", accountId); // Debugging

                    if (accountId) {
                        $.ajax({
                            url: "index.php?entryPoint=getAccountDetails&record=" + accountId,
                            dataType: "json",
                            success: function(data) {
                                console.log("Fetched Data:", data); // Debugging
                                if (data && data.company_id_c) {
                                    $("input[name=\'company_id_c\']").val(data.company_id_c);
                                }
                            },
                            error: function(xhr, status, error) {
                                console.error("AJAX Error:", error);
                            }
                        });
                    }
                });
            });
        </script>';
    }
}
