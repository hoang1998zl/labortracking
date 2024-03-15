$(document).ready(function () {
    $(document).on('change', '[name^=departments]', function () {
        var $checkbox = $(this);
        var value = $checkbox.val();

        if ($checkbox.is(':checked')) {
            // If checkbox is checked, append a new row to the table
            var newRow = `
                <tr>
                    <td class="md:w-2/12 w-4/12 text-center text-white">
                        <p id='dpm_name' class="bg-teal-500 rounded-md md:px-2 md:py-2 py-1 px-1 my-2">${value}</p>
                    </td>
                    <td class="md:w-10/12 w-8/12 text-center">
                        <select class="rounded-md hover:cursor-pointer border-gray-400 focus:font-bold text-gray-700 md:text-base text-[13px] focus:ring-teal-400 focus:border-teal-400 w-11/12" name="department_distribute[]" id="">
                            <option selected="" value="theo_nguoi_co_quyen">Phân phối tất cả mọi người có quyền trên thư mục</option>
                            <option value="all_department">Phân phối theo chọn lựa lúc tải tài liệu</option>
                            <option value="3_steps">Phân phối theo theo quy trình 3 bước</option>
                            </select>
                            </td>
                            </tr>
                            `;
                            // <option value="4_steps">Phân phối theo 4 bước</option>
            $('#tb-folder').append(newRow);
        } else {
            // If checkbox is unchecked, remove the corresponding row from the table
            $('#tb-folder p:contains("' + value + '")').closest('tr').remove();
        }
    });
});
