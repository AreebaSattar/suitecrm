document.addEventListener("DOMContentLoaded", function() {
    function toggleStatusDescription() {
        var statusDropdown = document.getElementById("status");
        var statusWrapper = document.querySelector('[data-field="status_description"]');
        var statusDescriptionField=document.getElementById("status_description");
        if (statusWrapper && statusDropdown && statusDescriptionField ) { //all must present
            var statusValue = statusDropdown.value;
            if (statusValue === "Recycled" || statusValue === "Dead") {
                statusWrapper.style.display = "";
                addToValidate("EditView", "lead_source_description", "text", true, "Lead Source Description");
            }
            else{
                statusWrapper.style.display = "none";
                removeFromValidate("EditView", "lead_source_description");
            }
        }
    }
    function toggleLeadsourceDescription() {
        var leadSourceDropdown=document.getElementById("lead_source");
        var leadSourceDescriptionField=document.getElementById("lead_source_description");
        if (leadSourceDropdown && leadSourceDescriptionField ) {
            var leadSourceVal= leadSourceDropdown.value;
            if (leadSourceVal === "Other") {}
        }
    }

    var statusDropdown = document.getElementById("status");
    var leadSourceDropdown=document.getElementById("lead_source");

    if(statusDropdown) {
        statusDropdown.addEventListener("change", toggleStatusDescription);
        toggleStatusDescription();
    }
    if(leadSourceDropdown) {
        leadSourceDropdown.addEventListener("change", toggleLeadsourceDescription);
        toggleLeadsourceDescription();
    }
});