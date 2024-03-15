export default $.validator.addMethod(
    "require_distributor",
    function (value, element) {
        var flag = true;
        var distributors = $("[name^=distributors]:checked").toArray();
        if (distributors.length === 0)
        {
            toastr.error("Quý khách phải chọn ít nhất một người có quyền phân phối thư mục.");
            return (flag = false);
        }
        distributors.forEach(function (element) {
            if (element.value.trim().length === 0)
            {
                toastr.error("Quý khách vui lòng nhập tên người phân phối thư mục và không để trống.");
                return (flag = false);
            }

            if (element.value.length < 2 || element.value.length > 100)
            {
                toastr.error("Tên người phân phối thư mục phải có độ dài từ 2 và không quá 100 ký tự.");
                return (flag = false);
            }
        });

        return flag;
    },
    ""
);
