export default $(".login-form").validate({
    onkeyup: false,
    onfocusout: false,
    rules: {
        email: {
            required: true,
            email: true,
            maxlength: 255,
            validateEmail: true,
        },
        password: {
            required: true,
        },
    },
    messages: {
        email: {
            required: function () {
                toastr.error("Vui lòng nhập email của Quý khách.");
            },
            email: function () {
                toastr.error(
                    "Địa chỉ email của Quý khách không hợp lệ. Vui lòng nhập lại email."
                );
            },
            maxlength: function () {
                toastr.error(
                    "Email không được quá 255 ký tự. Vui lòng nhập lại email."
                );
            },
        },
        password: {
            required: function () {
                toastr.error("Vui lòng nhập mật khẩu của Quý khách.");
            },
        },
    },
});
