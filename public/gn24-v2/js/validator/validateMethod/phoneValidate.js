export default $.validator.addMethod(
    "validatePhone",
    function (value, element) {
        return (
            this.optional(element) ||
            /(((\+|)84)|0)(1|2|3|4|5|6|7|8|9)+([0-9]{8}|[0-9]{9})\b/.test(value)
        );
    },
    function () {
        toastr.error("Vui lòng nhập đúng định dạng số điện thoại.");
    }
);
