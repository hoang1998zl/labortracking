import { $form } from "./validator/settingFormValidate.js";

$(".next").click(function () {
    const $this = $(this);
    const currentFieldset = $this.closest("fieldset");
    const nextFieldset = currentFieldset.next();
    if ($form.form())
    {
        // show next fieldset
        nextFieldset.removeClass("hidden");

        const stepId = nextFieldset.attr("id");
        const stepNumber = stepId.split("-")[ 2 ];

        $(`.step-${ stepNumber - 1 }, .step-${ stepNumber }`).addClass("bg-teal-500");
        $(`.step-circle-${ stepNumber }`).addClass("bg-gradient-to-l from-blue-400 to-teal-700")
            .parent().next('p').removeClass("text-gray-400");

        if (stepNumber === "4")
        {
            const departmentChoice = $("[name^=departments]:checked").toArray();
            const departmentsChoiceList = $("#departments_choice");
            const dpmchoice = $("#tb-folder");
            departmentsChoiceList.empty();
            dpmchoice.empty();

            departmentChoice.forEach((element) => {
                departmentsChoiceList.append(
                    `<li class="hover:text-teal-700 hover:cursor-pointer md:text-lg text-sm text-[#3ab6ff] mx-2">
                        ${ element.value }
                    </li>`
                );
            });
            departmentChoice.forEach((element) => {
                dpmchoice.append(
                    `<tr>
                    <td class="md:w-2/12 w-4/12 text-center text-white">
                        <p class="bg-teal-500 rounded-md md:px-2 md:py-2 py-1 px-1 my-2">${ element.value }</p>
                    </td>
                    <td class="md:w-10/12 w-8/12 text-center">
                        <select class="rounded-md hover:cursor-pointer border-gray-400 focus:font-bold text-gray-700 md:text-base text-[13px] focus:ring-[#3ab6ff] focus:border-[#3ab6ff] w-11/12" name="department_distribute[]" id="">
                        <option value="theo_nguoi_co_quyen">Phân phối theo người có quyền phân phối thư
                                mục (Bổ sung sau)</option>
                            <option selected value="all_department">Phân phối cho tất cả mọi người</option>
                            <option value="3_steps">Phân phối theo 3 bước</option>
                            <option value="4_steps">Phân phối theo 4 bước</option>
                        </select>
                    </td>
                </tr>`
                );
            });
        }

        // hide current fieldset
        currentFieldset.addClass("hidden");
    }
});

$(".previous").click(function () {
    const $this = $(this);
    const currentFieldset = $this.closest("fieldset");
    const previousFieldset = currentFieldset.prev();

    const stepId = currentFieldset.attr("id");
    const stepNumber = stepId.split("-")[ 2 ];

    if ($form.form())
    {
        $(`.step-${ stepNumber }`).removeClass('bg-teal-500').addClass("bg-gray-200");
        $(`.step-circle-${ stepNumber }`).removeClass("bg-gradient-to-l from-blue-400 to-teal-700")
            .addClass("bg-gray-200");

        // show previous fieldset
        previousFieldset.removeClass("hidden");

        // hide current fieldset
        currentFieldset.addClass("hidden");
    }
});


function showStep(step) {
    const fieldsetIds = [ "#step-fieldset-1", "#step-fieldset-2", "#step-fieldset-3", "#step-fieldset-4" ];

    // hide all fieldsets and reset step styles
    for (let index = 1;index <= 4;index++)
    {
        $(fieldsetIds[ index - 1 ]).addClass("hidden");
        $(`.step-${ index }`).addClass("bg-gray-200").removeClass("bg-teal-500");
        $(`.step-circle-${ index }`).addClass("bg-gray-200").removeClass("bg-gradient-to-l from-blue-400 to-teal-700");
    }

    // show the selected step and update its style
    $(fieldsetIds[ step - 1 ]).removeClass("hidden");
    $(`.step-${ step }`).removeClass("bg-gray-200").addClass("bg-teal-500");
    $(`.step-circle-${ step }`).removeClass("bg-gray-200").addClass("bg-gradient-to-l from-blue-400 to-teal-700");

    // update styles of all previous steps
    for (let index = 1;index < step;index++)
    {
        $(`.step-${ index }`).removeClass("bg-gray-200").addClass("bg-teal-500");
        $(`.step-circle-${ index }`).removeClass("bg-gray-200").addClass("bg-gradient-to-l from-blue-400 to-teal-700");
    }
}

$(".step-circle-1").click(function () {
    if ($form.form() && $("#step-fieldset-1").hasClass("hidden"))
    {
        showStep(1);
    }
});

$(".step-circle-2").click(function () {
    if ($form.form() && $("#step-fieldset-2").hasClass("hidden"))
    {
        showStep(2);
    }
});

$(".step-circle-3").click(function () {
    if ($form.form() && $("#step-fieldset-3").hasClass("hidden"))
    {
        showStep(3);
    }
});

$(".step-circle-4").click(function () {
    if ($form.form() && $("#step-fieldset-4").hasClass("hidden"))
    {
        showStep(4);

        // Update department choice
        const departmentChoice = $("[name^=departments]:checked").toArray();
        const departmentsChoiceList = $("#departments_choice");
        const dpmchoice = $("#tb-folder");
        departmentsChoiceList.empty();
        dpmchoice.empty();

        departmentChoice.forEach((element) => {
            departmentsChoiceList.append(
                `<li class="hover:text-teal-700 hover:cursor-pointer md:text-lg text-sm text-[#3ab6ff] mx-2">
                    ${ element.value }
                </li>`
            );
        });
        departmentChoice.forEach((element) => {
            dpmchoice.append(
                `<tr>
                <td class="md:w-2/12 w-4/12 text-center text-white">
                    <p class="bg-teal-500 rounded-md md:px-2 md:py-2 py-1 px-1 my-2">${ element.value }</p>
                </td>
                <td class="md:w-10/12 w-8/12 text-center">
                    <select class="rounded-md hover:cursor-pointer border-gray-400 focus:font-bold text-gray-700 md:text-base text-[13px] focus:ring-[#3ab6ff] focus:border-[#3ab6ff] w-11/12" name="department_distribute[]" id="">
                    <option value="theo_nguoi_co_quyen">Phân phối theo người có quyền phân phối thư
                            mục (Bổ sung sau)</option>
                        <option selected value="all_department">Phân phối cho tất cả mọi người</option>
                        <option value="3_steps">Phân phối theo 3 bước</option>
                        <option value="4_steps">Phân phối theo 4 bước</option>
                    </select>
                </td>
            </tr>`
            );
        });
    }
});
