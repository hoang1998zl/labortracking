$(document).ready(function () {
    var toggle_login = false;
    var toggle_menu = false;
    var toggle_noti = false;
    var toggle_auth = false;
    var toggle_account = false;
    $("#click-show-list").click(function () {
        $("#list-url").toggle();
    });
    $("#click-hide-comment").click(function () {
        $("#comment").toggle();
    });
    $('.account').on('click', function () {
        if (!toggle_account) {
            $(this).siblings('ul').toggle();
            return toggle_account = !toggle_account
        }
        $(this).siblings('ul').toggle();
        return toggle_account = !toggle_account
    })
    $("#auth_dropdown_button").on("click", function () {
        $("#auth_dropdown_menu").toggleClass("-translate-x-full");
    });
    $("#dropdown_menu_button").on("click", function () {
        $("#dropdown_menu").toggleClass("-translate-x-full lg:translate-x-0 lg:hidden");
    });
    $("#dropdownLoginButton").on("click", function () {
        $("#dropdownLoginPopup").toggleClass("hidden");
    });
    $("#login-button").on("click", function () {
        if (!toggle_login) {
            $("#login-popup").removeClass("scale-0");
            $("#menu-opacity").removeClass("hidden");
            return (toggle_login = !toggle_login);
        }
        $("#login-popup").addClass("scale-0");
        $("#menu-opacity").addClass("hidden");
        return (toggle_login = !toggle_login);
    });
    $(".auth-button").on("click", function () {
        if (!toggle_auth) {
            $(".auth-logout").removeClass("hidden");
            $("#menu-opacity").removeClass("hidden");
            return (toggle_auth = !toggle_auth);
        }
        $(".auth-logout").addClass("hidden");
        $("#menu-opacity").addClass("hidden");
        return (toggle_auth = !toggle_auth);
    });
    $("#menu-button-open").on("click", function (params) {
        $("#menu-ui").removeClass("-translate-x-full");
        $("#menu-opacity").removeClass("hidden");
        return (toggle_menu = !toggle_menu);
    });
    $("#menu-button-close").on("click", function (params) {
        $("#menu-ui").addClass("-translate-x-full");
        $("#menu-opacity").addClass("hidden");
        return (toggle_menu = !toggle_menu);
    });
    $("#menu-opacity").on("click", function (params) {
        $("#menu-ui").addClass("-translate-x-full");
        $("#menu-opacity").addClass("hidden");
        $(".auth-logout").addClass("hidden");
        $("#login-popup").addClass("scale-0");
        toggle_login = !toggle_login;
        toggle_auth = !toggle_auth;
        return (toggle_menu = !toggle_menu);
    });
    $("#noti-button-open").on("click", function (params) {
        $("#noti-ui").removeClass("translate-x-full");
        $("#noti-opacity").removeClass("hidden");
        return (toggle_noti = !toggle_noti);
    });
    $("#noti-button-close").on("click", function (params) {
        $("#noti-ui").addClass("translate-x-full");
        $("#noti-opacity").addClass("hidden");
        return (toggle_noti = !toggle_noti);
    });
    $("#noti-opacity").on("click", function (params) {
        $("#noti-ui").addClass("translate-x-full");
        $("#noti-opacity").addClass("hidden");
        return (toggle_menu = false);
    });
    $("#noti-button-mobile-open").on("click", function (params) {
        $("#noti-ui").removeClass("translate-x-full");
        return (toggle_noti = true);
    });
});
