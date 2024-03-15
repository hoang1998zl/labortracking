export default $(".forgot-password-form").validate({
    onkeyup: false,
    onfocusout: false,
    rules: {
        email: {
            required: true,
            email: true,
            maxlength: 255,
            validateEmail: true,
        },
    },
    messages: {
        email: {
            required: function () {
                toastr.error("Vui lòng nhập email của Quý khách.");
            },
            maxlength: function () {
                toastr.error(
                    "Email không được quá 100 ký tự. Vui lòng nhập lại email."
                );
            },
            email: function () {
                toastr.error(
                    "Email của Quý khách không hợp lệ. Vui lòng nhập lại email."
                );
            },
        },
    },
});
