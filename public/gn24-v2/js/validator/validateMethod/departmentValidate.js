export default $.validator.addMethod(
    "require_department",
    function (value, element) {
        var flag = true;
        var departments = $("[name^=departments]:checked").toArray();

        if (departments.length === 0)
        {
            toastr.error("Quý khách phải chọn ít nhất một phòng ban.");
            return (flag = false);
        }

        departments.forEach(function (element) {
            if (element.value.trim().length === 0)
            {
                toastr.error("Quý khách vui lòng nhập tên phòng ban và không để trống.");
                return (flag = false);
            }

            if (element.value.length < 2 || element.value.length > 100)
            {
                toastr.error("Tên phòng ban phải có độ dài từ 2 và không quá 100 ký tự.");
                return (flag = false);
            }
        });

        return flag;
    },
    ""
);
