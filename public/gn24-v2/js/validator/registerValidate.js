export default $(".register-form").validate({
    onkeyup: false,
    onfocusout: false,
    rules: {
        email: {
            required: true,
            email: true,
            maxlength: 255,
            validateEmail: true,
        },
        phone: {
            required: true,
            validatePhone: true,
            minlength: 10,
            maxlength: 11,
        },
        company_name: {
            required: true,
            minlength: 2,
            maxlength: 255,
        },
        company_code: {
            required: true,
            minlength: 2,
            maxlength: 255,
        },
        password: {
            required: true,
            validatePassword: true,
        },
        password_confirmation: {
            required: true,
            equalTo: "#password_reg",
        },
        terms: {
            required: true,
        },
    },
    messages: {
        email: {
            required: function () {
                toastr.error("Quý khách vui lòng cung cấp Email.");
            },
            maxlength: function () {
                toastr.error(
                    "Email không được quá 100 ký tự. Vui lòng nhập lại."
                );
            },
            email: function () {
                toastr.error(
                    "Email của Quý khách không hợp lệ. Vui lòng nhập lại."
                );
            },
        },
        phone: {
            required: function () {
                toastr.error("Quý khách vui lòng cung cấp số điện thoại.");
            },
            maxlength: function () {
                toastr.error(
                    "Số điện thoại không quá 11 ký tự. Vui lòng nhập lại."
                );
            },
            minlength: function () {
                toastr.error(
                    "Số điện thoại không ít hơn 10 ký tự. Vui lòng nhập lại."
                );
            },
        },
        company_name: {
            required: function () {
                toastr.error("Quý khách vui lòng cung cấp tên Công ty.");
            },
            maxlength: function () {
                toastr.error(
                    "Tên công ty không được quá 255 ký tự. Vui lòng nhập lại."
                );
            },
            minlength: function () {
                toastr.error(
                    "Tên công ty không ít hơn 2 ký tự. Vui lòng nhập lại."
                );
            },
        },
        company_code: {
            required: function () {
                toastr.error("Quý khách vui lòng cung cấp mã Công ty.");
            },
            maxlength: function () {
                toastr.error(
                    "Mã Công ty không quá 100 ký tự. Vui lòng nhập lại."
                );
            },
            minlength: function () {
                toastr.error(
                    "Mã Công ty không ít hơn 2 ký tự. Vui lòng nhập lại."
                );
            },
        },
        password: {
            required: function () {
                toastr.error("Quý khách vui lòng nhập mật khẩu cho tài khoản.");
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
        terms: {
            required: function () {
                toastr.error(
                    "Xin Quý khách vui lòng chấp nhận điều khoản của chúng tôi."
                );
            },
        },
    },
});
