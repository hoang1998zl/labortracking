export var $form = $(".setting-form").validate({
    onkeyup: false,
    ignore: "",
    onfocusout: false,
    onclick: false,
    rules: {
        phone: {
            required: true,
            validatePhone: true,
            minlength: 10,
            maxlength: 12,
        },
        email: {
            required: true,
            email: true,
            maxlength: 100,
            validateEmail: true,
        },
        company_name: {
            required: true,
            minlength: 2,
            maxlength: 255,
        },
        company_code: {
            required: true,
            minlength: 2,
            maxlength: 100,
        },
        password: {
            required: true,
            validatePassword: true,
        },
        "departments[]": {
            require_department: true,
        },
        "distributors[]": {
            require_distributor: true,
        },
        "department_distribute[]": {
            require_distribute: true,
        },
        default_structure: {
            required: true,
            maxlength: 500,
            minlength: 3,
        },
    },
    messages: {
        phone: {
            required: function () {
                toastr.error("Hãy nhập số điện thoại.");
            },
            maxlength: function () {
                toastr.error("Số điện thoại không quá 12 ký tự.");
            },
            minlength: function () {
                toastr.error("Số điện thoại không ít hơn 10 ký tự.");
            },
        },
        email: {
            required: function () {
                toastr.error("Hãy nhập email của Quý khách.");
            },
            maxlength: function () {
                toastr.error("Email không được quá 100 ký tự.");
            },
            email: function () {
                toastr.error("Email không hợp lệ.");
            },
        },
        company_name: {
            required: function () {
                toastr.error("Hãy nhập tên Công ty");
            },
            maxlength: function () {
                toastr.error("Tên công ty không được quá 255 ký tự.");
            },
            minlength: function () {
                toastr.error("Tên công ty không ít hơn 2 ký tự.");
            },
        },
        company_code: {
            required: function () {
                toastr.error("Hãy nhập mã Công ty.");
            },
            maxlength: function () {
                toastr.error("Mã Công ty không quá 100 ký tự.");
            },
            minlength: function () {
                toastr.error("Mã Công ty không ít hơn 2 ký tự.");
            },
        },
        password: {
            required: function () {
                toastr.error("Hãy nhập mật khẩu cho tài khoản.");
            },
        },
        default_structure: {
            required: function () {
                toastr.error("Hãy nhập cấu trúc hiển thị thư mục.");
            },
            maxlength: function () {
                toastr.error("Cấu trúc hiển thị thư mục không quá 500 ký tự.");
            },
            minlength: function () {
                toastr.error("Cấu trúc hiển thị thư mục không ít hơn 3 ký tự.");
            },
        },
    },
});
