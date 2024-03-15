export default $.validator.addMethod(
    "validatePassword",
    function (value, element) {
        return (
            this.optional(element) ||
            /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$/.test(value)
        );
    },
    function () {
        toastr.error(
            "Quý khách vui lòng cung cấp một mật khẩu ít nhất 8 ký tự, phải có chữ hoa, chữ thường, số và ký tự đặc biệt."
        );
    }
);
