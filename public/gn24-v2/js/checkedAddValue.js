var $target = $("#default-structure");
$(document).on("change", "[name^=file_view_structure]", function () {
    if ($target.val() == "")
    {
        $target.val(); //default text
    }
    if (!$target.val().match($(this).val()))
    {
        var text = $target.val();
        $target.val(text + " - " + $(this).val());
    } else
    {
        var text = $target.val();
        $target.val(text.replace(" - " + $(this).val(), ""));
    }
    $target.val($target.val().replace(/\,$/, ""));
});
