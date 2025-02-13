document.addEventListener("DOMContentLoaded", function() {

    function toggleStatusDescription() {   //For Status Description
        var statusDropdown = document.getElementById("status");
        var statusWrapper = document.querySelector('[data-field="status_description"]');
        var statusDescriptionField=document.getElementById("status_description");
        if (statusWrapper && statusDropdown && statusDescriptionField ) { //all must present conditon
            var statusValue = statusDropdown.value;
            if (statusValue === "Recycled" || statusValue === "Dead") {
                statusDescriptionField.value = ""; //empty
                statusWrapper.style.visibility = "visible";
                addToValidate("EditView", "status_description", "text", true, "Status Description");
            }
            else{
                statusDescriptionField.value = "";
                statusWrapper.style.visibility = "hidden";
                removeFromValidate("EditView", "status_description");
            }
        }
    }
    //For Lead Source Description
    function toggleLeadsourceDescription() {
        var leadSourceDropdown=document.getElementById("lead_source");
        var leadSourceDescriptionField=document.getElementById("lead_source_description");
        if (leadSourceDropdown && leadSourceDescriptionField ) {
            var leadSourceVal= leadSourceDropdown.value;
            if (leadSourceVal === "Other") {
                leadSourceDescriptionField.value = "";
                addToValidate("EditView", "lead_source_description", "text", true, "Lead Source Description");
            }
            else{
                leadSourceDescriptionField.value = "";
                removeFromValidate("EditView", "lead_source_description");
            }
        }
    }

    var statusDropdown = document.getElementById("status");
    var leadSourceDropdown=document.getElementById("lead_source");

    if(statusDropdown) {
        statusDropdown.addEventListener("change", toggleStatusDescription); //on change
        toggleStatusDescription();
    }
    if(leadSourceDropdown) {
        leadSourceDropdown.addEventListener("change", toggleLeadsourceDescription);
        toggleLeadsourceDescription();//on page loads
    }
});