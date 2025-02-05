$(document).ready(function() {
    // Trigger function when Company (Account) field is selected
    $('#account_name').on('change', function() {
        var accountId = $(this).val(); // Get selected Account (Company) ID

        // Check if a Company is selected
        if (accountId) {
            // Make an AJAX call to fetch the company_id_c field from the Company module
            $.ajax({
                url: 'index.php?module=Companies&action=ajax&file=ajax_get_company_id', // The file that fetches company_id_c
                data: {
                    'account_id': accountId
                },
                type: 'GET',
                success: function(response) {
                    // Assuming the response contains the company_id_c value
                    if (response.company_id_c) {
                        // Populate the company_id_c field in Prospects
                        $('#company_id_c').val(response.company_id_c);
                    }
                },
                error: function() {
                    console.log('Error in fetching company_id_c');
                }
            });
        }
    });
});
