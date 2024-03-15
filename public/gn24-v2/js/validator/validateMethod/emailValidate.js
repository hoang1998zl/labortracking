export default $.validator.addMethod(
    "validateEmail",
    function (value, element) {
        return (
            this.optional(element) ||
            /^[a-z][a-z0-9_\.]{2,32}@[a-z0-9]{2,}(\.[a-z0-9]{2,4}){1,2}$/.test(
                value
            )
        );
    },
    function () {
        toastr.error("Quý khách vui lòng nhập đúng định dạng email.");
    }
);
