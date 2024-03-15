var $table = $("#tb-folder");
$(document).on("change", "[name^=departments]", function () {
    $table.empty();

    // Iterate over the checked checkboxes
    $("[name^=departments]:checked").each(function () {
        var value = $(this).val();
        // Append the value to the tbody
        $table.append(`<tr>
            <td class="md:w-2/12 w-4/12 text-center text-white">
                <p class="bg-blue-500 rounded-md md:px-2 md:py-2 py-1 px-1 my-2">${ value }</p>
            </td>
            <td class="md:w-10/12 w-8/12 text-center">
                <select class="rounded-md hover:cursor-pointer border-gray-400 focus:font-bold text-gray-700 md:text-base text-[13px] focus:ring-[#3ab6ff] focus:border-[#3ab6ff] w-11/12" name="department_distribute[]" id="">
                    <option value="theo_nguoi_co_quyen">Phân phối tất cả mọi người có quyền trên thư mục
                    </option>
                    <option value="all_department">Phân phối theo chọn lựa lúc tải tài liệu</option>
                    <option value="3_steps">Phân phối theo theo quy trình 3 bước</option>
                </select>
            </td>
        </tr>`);
    });
            // <option value="4_steps">Phân phối theo 4 bước</option>
});

