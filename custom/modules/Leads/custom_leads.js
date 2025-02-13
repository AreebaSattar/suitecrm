document.addEventListener("DOMContentLoaded", function () {
    // "use strict";

    function toggleStatusDescription() {
        var statusDropdown = document.getElementById("status"); //status dropdown options
        var statusWrapper = document.querySelector('[data-field="status_description"]'); //label + the input box
        var statusDescriptionField = document.getElementById("status_description"); //decription field

        if (!statusDropdown || !statusWrapper || !statusDescriptionField) { //if elements doesn't even exist
            return;
        }

        var statusValue = statusDropdown.value; //extracting the value
        console.log("Selected Status:", statusValue);

        if (statusValue === "Recycled" || statusValue === "Dead") { //conditionally show description box + required
            statusWrapper.style.display = ""; // Shows the label + field (description status)
            console.log(statusDescriptionField.value);
            //required
            addToValidate("EditView", "status_description", "text", true, "Status Description");

        } else {
            statusWrapper.style.display = "none"; // Hide the label + field(status description)
            console.log(statusDescriptionField.value);
            //removing required
            //Form name, field name, field type, reuired, msg
            removeFromValidate("EditView", "status_description"); // Remove validation when hidden

        }
    }
    function toggleLeadSourceDescription() {
        var leadSourceDropdown = document.getElementById("lead_source");
        var leadSourceWrapper = document.querySelector('[data-field="lead_source_description"]'); //field + label description
        var leadSourceDescriptionField = document.getElementById("lead_source_description");

        if (!leadSourceDropdown || !leadSourceWrapper || !leadSourceDescriptionField) {
            return;
        }
        var leadSourceValue = leadSourceDropdown.value; //value extract from dropdown for the selected option
        console.log("Selected Lead Source:", leadSourceValue);

        if (leadSourceValue === "Other") {
            leadSourceDescriptionField.setAttribute("required", "true"); // Making it required
            addToValidate("EditView", "lead_source_description", "text", true, "Lead Source Description");
        } else {
            leadSourceDescriptionField.removeAttribute("required");
            removeFromValidate("EditView", "lead_source_description");
        }
    }

    var statusDropdown = document.getElementById("status");
    var leadSourceDropdown = document.getElementById("lead_source");

    if (statusDropdown) {
        statusDropdown.addEventListener("change", toggleStatusDescription);
        toggleStatusDescription();
    } else {
        console.warn("Status dropdown not found.");
    }

    if (leadSourceDropdown) {
        leadSourceDropdown.addEventListener("change", toggleLeadSourceDescription);
        toggleLeadSourceDescription();
    } else {
        console.warn("Lead Source dropdown not found.");
    }
});
