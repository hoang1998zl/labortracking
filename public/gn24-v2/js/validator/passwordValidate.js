export default $(".password-update").validate({
    onkeyup: false,
    onfocusout: false,
    rules: {
        current_password: {
            required: true,
        },
        password: {
            required: true,
            validatePassword: true,
        },
        password_confirmation: {
            required: true,
            equalTo: "#password",
        },
    },
    messages: {
        current_password: {
            required: function () {
                toastr.error("Quý khách vui lòng nhập mật khẩu hiện tại.");
            },
        },
        password: {
            required: function () {
                toastr.error("Quý khách vui lòng nhập mật khẩu mới cho tài khoản.");
            },
        },
        password_confirmation: {
            required: function () {
                toastr.error("Quý khách vui lòng xác nhận lại mật khẩu.");
            },
            equalTo: function () {
                toastr.error(
                    "Nhập lại không đúng mật khẩu. Vui lòng nhập lại."
                );
            },
        },
    },
});
