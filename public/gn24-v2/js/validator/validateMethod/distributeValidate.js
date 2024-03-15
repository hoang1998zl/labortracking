export default $.validator.addMethod(
    "require_distribute",
    function (value, element) {
        var hasMissingSelection = false; // Assume all selects have at least one option selected

        // Get all the select elements with names starting with "department_distribute"
        var distribute = $("[name^=department_distribute]").toArray();

        // Iterate through each select element
        distribute.forEach(function (selectElement) {
            // Get the selected option value
            var selectedValue = $(selectElement).val();
            console.log(selectedValue);

            // Check if no option is selected (value is an empty string)
            if (selectedValue === "")
            {
                hasMissingSelection = true; // Set hasMissingSelection to true if any select has no option selected
            }
        });

        return !hasMissingSelection;
    },
    function () {
        toastr.error('Quý khách vui lòng chọn cách thức phân phối thư mục cho từng phòng ban.'); // Show toastr error message
    }
);
