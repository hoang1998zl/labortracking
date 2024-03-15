export default $(".contact-form").validate({
    onkeyup: false,
    onfocusout: false,
    rules: {
        name: {
            required: true,
            maxlength: 20,
            minlength: 2,
        },
        phone: {
            required: true,
            validatePhone: true,
            minlength: 10,
            maxlength: 15,
        },
        email: {
            required: true,
            email: true,
            maxlength: 255,
            validateEmail: true,
        },
        message: {
            required: true,
            minlength: 5,
            maxlength: 500,
        },
    },
    messages: {
        name: {
            required: function () {
                toastr.error("Quý khách vui lòng cung cấp họ và tên.");
            },
            maxlength: function () {
                toastr.error(
                    "Tên không được quá 255 ký tự. Vui lòng nhập lại."
                );
            },
            minlength: function () {
                toastr.error(
                    "Tên không được ít hơn 2 ký tự. Vui lòng nhập lại."
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
        message: {
            required: function () {
                toastr.error("Quý khách vui lòng gửi nội dung yêu cầu cho chúng tôi.");
            },
            maxlength: function () {
                toastr.error(
                    "Nội dung yêu cầu không được quá 500 ký tự. Vui lòng nhập lại."
                );
            },
            minlength: function () {
                toastr.error(
                    "Nội dung yêu cầu không được ít hơn 5 ký tự. Vui lòng nhập lại."
                );
            },
        },
    },
});
