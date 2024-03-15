const fieldTemplate = (fieldName) => {
    switch (fieldName)
    {
        case 'departments':
            return `
    <div class="flex items-center gap-1">
        <input class="text-[#3ab6ff] p-2 rounded-sm border border-gray-300 focus:ring-[#3ab6ff] focus:border-[#3ab6ff]"
            type="checkbox" name="${ fieldName }[]" placeholder="Sửa trường" value="">
        <input type="text" placeholder="Sửa trường" value=""
            class="input-value p-1 w-10/12 rounded-md border border-gray-300 focus:ring-[#3ab6ff] focus:border-[#3ab6ff]">
    </div>
`;
        case 'distributors':
            return `
    <div class="flex items-center pt-2 gap-2">
        <input class="text-[#3ab6ff] p-2 rounded-sm border border-gray-300 focus:ring-[#3ab6ff] focus:border-[#3ab6ff]"
            type="checkbox" name="${ fieldName }[]" placeholder="Sửa trường" value="">
        <input type="text" placeholder="Sửa trường" value=""
            class="input-value p-1 w-full rounded-md border border-gray-300 focus:ring-[#3ab6ff] focus:border-[#3ab6ff]">
    </div>
`;
        case 'file_view_structure':
            return `
    <div class="flex items-center mb-3 gap-2">
        <input class="text-[#3ab6ff] p-2 rounded-sm border border-gray-300 focus:ring-[#3ab6ff] focus:border-[#3ab6ff]"
            type="checkbox" name="${ fieldName }[]" placeholder="Sửa trường" value="">
        <input type="text" placeholder="Sửa trường" value=""
            class="input-value p-1 w-full rounded-md border border-gray-300 focus:ring-[#3ab6ff] focus:border-[#3ab6ff]">
    </div>
`;
        default:
            break;
    }
};

const initialCounters = {
    departments: 1,
    distributors: 1,
    file_view_structure: 1,
};
const maxFields = 21;

$(".add-button").click(function () {
    const containerId = $(this).parent().parent().attr("id");
    const counter = initialCounters[ containerId ];
    if (counter < maxFields)
    {
        initialCounters[ containerId ]++;
        $(`.${ containerId }`).append(fieldTemplate(containerId));
    } else
    {
        toastr.error("Không thể thêm quá 20 trường.");
    }
});


