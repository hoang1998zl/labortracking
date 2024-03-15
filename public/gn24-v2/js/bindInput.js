function removeVietnameseAccents(str) {
    return str
        .normalize('NFD')
        .replace(/[\u0300-\u036f]/g, '');
}
$("#company_name").bind("input", function () {
    var title = $(this)
        .val()
        .trim()
        .toLowerCase()
        .split(' ')
        .slice(-2)
        .join('');

    // xóa dấu tiếng việt
    title = removeVietnameseAccents(title);

    // tạo 2 số ngẫu nhiên
    let randomNumber = Math.floor(Math.random() * 100);
    if (randomNumber < 10) {
        randomNumber = '0' + randomNumber;
    }
    
    title += randomNumber.toString();

    $("#company_code").val(title);
});
$(".steps").on("focus", ".input-value", function () {
    $(this).bind("input", function () {
        $(this).siblings().val($(this).val());
        $("#dpm_name").text($(this).val());
    });
});
