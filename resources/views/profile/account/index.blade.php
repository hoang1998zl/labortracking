@extends('gn24-v2.layouts.app')
@section('title', 'Cài đặt tài khoản')
@section('content')
    <section class="w-full">
        <div class="h-auto md:pt-[100px] pt-16 w-full bg-gradient-to-l from-orange-400 to-orange-300">
            <div class="flex items-center justify-center py-10 lg:w-8/12 md:w-11/12 w-full mx-auto">
                <div class="bg-white lg:w-11/12 w-full mx-auto shadow-2xl md:p-10 py-5">
                    <p class="text-center md:text-3xl text-xl font-bold">Hoàn chỉnh tài khoản</p>
                    <div class="py-10 w-[95%] mx-auto md:grid grid-cols-2 hidden">
                        <div class="">
                            <div class="flex items-center">
                                <div class="step-1 w-full h-1 bg-orange-500 hidden"></div>
                                <div
                                    class="step-circle-1 text-xl text-white h-12 bg-gradient-to-l from-orange-400 to-orange-500 flex flex-1 justify-center items-center hover:cursor-pointer"
                                    style="clip-path:  polygon(calc(100% - 20px) 0%, 100% 50%, calc(100% - 20px) 100%, 0% 100%, 20px 50%, 0% 0%);"
                                    >
                                    1
                                </div>
                                <div class="step-2 h-12 bg-gray-200"
                                style="
                                clip-path:  polygon(calc(100% - 20px) 0%, 100% 50%, calc(100% - 20px) 100%, 0% 100%, 20px 50%, 0% 0%);
                                width: 40px;
                                "
                                ></div>
                            </div>
                            <p class="text-center text-[13px]">Thông tin <span class="lg:inline-block block">tài
                                    khoản</span>
                            </p>
                        </div>
                        <div class="">
                            <div class="flex items-center">
                                <div class="step-2 w-full h-1 bg-gray-200 hidden"></div>
                                <div
                                    class="step-circle-2 text-xl text-white h-12 bg-gray-200 flex flex-1 justify-center items-center hover:cursor-pointer"
                                    style="clip-path:  polygon(calc(100% - 20px) 0%, 100% 50%, calc(100% - 20px) 100%, 0% 100%, 20px 50%, 0% 0%);"
                                    >
                                    2
                                </div>
                                {{-- <div class="step-3 h-12 bg-gray-200"
                                style="
                                clip-path:  polygon(calc(100% - 20px) 0%, 100% 50%, calc(100% - 20px) 100%, 0% 100%, 20px 50%, 0% 0%);
                                width: 40px;
                                "
                                ></div> --}}
                            </div>
                            <p class="text-center text-[13px] ">Thông tin <span class="lg:inline-block block">phòng
                                    ban</span></p>
                        </div>
                        {{-- <div class="">
                            <div class="flex items-center">
                                <div class="step-3 w-full h-1 bg-gray-200 hidden"></div>
                                <div
                                    class="step-circle-3 text-xl text-white h-12 bg-gray-200 flex flex-1 justify-center items-center hover:cursor-pointer"
                                    style="clip-path:  polygon(calc(100% - 20px) 0%, 100% 50%, calc(100% - 20px) 100%, 0% 100%, 20px 50%, 0% 0%);"
                                    >
                                    3
                                </div>
                                <div class="step-4 h-12 bg-gray-200"
                                style="
                                clip-path:  polygon(calc(100% - 20px) 0%, 100% 50%, calc(100% - 20px) 100%, 0% 100%, 20px 50%, 0% 0%);
                                width: 40px;
                                "
                                ></div>
                            </div>
                            <p class="text-center text-[13px] ">Cấu trúc <span class="lg:inline-block block">thư
                                    mục và</span> quyền chứng nhận tài liệu</p>
                        </div>
                        <div class="">
                            <div class="flex items-center">
                                <div class="step-4 w-full h-1 bg-gray-200 hidden"></div>
                                <div
                                    class="step-circle-4 text-xl text-white h-12 bg-gray-200 flex flex-1 justify-center items-center hover:cursor-pointer"
                                    style="clip-path:  polygon(calc(100% - 20px) 0%, 100% 50%, calc(100% - 20px) 100%, 0% 100%, 20px 50%, 0% 0%);"
                                    >
                                    4
                                </div>
                                <div class="step-4 h-12 bg-gray-200 hidden"
                                ></div>
                            </div>
                            <p class="text-center text-[13px] ">Phân phối <span class="lg:inline-block block">tài liệu</span></p>
                        </div> --}}
                    </div>
                    <form class="setting-form" action="{{ route('profile.setting.setup', $user->id) }}" method="POST">
                        @csrf
                        {{-- step-1 --}}
                        <fieldset id="step-fieldset-1" class="">
                            <div class="lg:w-7/12 md:w-10/12 w-full mx-auto md:shadow-2xl py-5 px-10">
                                <div class="md:hidden mb-5">
                                    <div class="flex items-center justify-center text-lg mb-2 text-orange-400 font-bold">1.
                                        Thông tin
                                        tài khoản</div>
                                    <hr>
                                </div>
                                <div title="Email của Quý khách sẽ trở thành tài khoản đăng nhập vào ứng dụng của chúng tôi"
                                    class="pb-3 hover:cursor-pointer">
                                    <label for="" class="font-bold text-gray-700">Email (Tài khoản đăng
                                        nhập)</label>
                                    <input type="text" value="{{ $user->email }}" name="email"
                                        class="w-full border-gray-300 focus:ring-[#FFA726] focus:border-[#FFA726] rounded-md">
                                </div>
                                @if ($user->password == null)
                                    <div title="Nếu Quý khách đăng nhập bằng tài khoản Gmail hoặc Facebook, vui lòng thay đổi mật khẩu để bảo vệ tài khoản."
                                        class="pb-3 hover:cursor-pointer">
                                        <label for="" class="font-bold text-gray-700">Cập nhật mật khẩu</label>
                                        <input type="password" name="password" value=""
                                            class="w-full border-gray-300 focus:ring-[#FFA726] focus:border-[#FFA726] rounded-md">

                                    </div>
                                @endif

                                <div class="pb-3">
                                    <label for="" class="font-bold text-gray-700">Số điện thoại</label>
                                    <input type="tel" name="phone"
                                        value="{{ $user->phone ?? '' }}"
                                        placeholder="Hãy thiết lập SĐT cho tài khoản của bạn"
                                        class="w-full border-gray-300 focus:ring-[#FFA726] focus:border-[#FFA726] rounded-md">
                                </div>

                                <div class="pb-3 md:flex w-full gap-5">
                                    <div class="md:w-7/12 w-full">
                                        <label class="block font-bold  text-gray-700" for="">Tên công
                                            ty</label>
                                        <input value="{{ $user->company_name }}"
                                            class="w-full rounded-md border border-gray-300 focus:border-[#FFA726] focus:ring-[#FFA726]"
                                            type="text" name="company_name" id="company_name">
                                    </div>
                                    <div class="md:w-5/12 w-full">
                                        <label class="font-bold  text-gray-700 block" for="">Mã công
                                            ty</label>
                                        <input value="{{ $user->company_code }}"
                                            class="w-full rounded-md border border-gray-300 focus:border-[#FFA726] focus:ring-[#FFA726]"
                                            type="text" name="company_code" id="company_code">

                                    </div>
                                </div>
                                <hr class="my-3">
                                <p class="italic text-sm text-gray-400">Ghi chú: <span
                                        class="hover:font-bold hover:text-gray-800">Mã công
                                        ty sẽ là mật khẩu để đăng nhập vào
                                        WeOS<sup>®</sup>.</span></p>
                            </div>
                            <div class="lg:text-end text-center w-6/12 mx-auto pt-8">
                                <input
                                    class="next px-5 py-2 hover:bg-orange-500 cursor-pointer rounded-sm bg-[#FFA726] text-white"
                                    style="clip-path:  polygon(calc(100% - 10px) 0%, 100% 50%, calc(100% - 10px) 100%, 0% 100%, 10px 50%, 0% 0%);"
                                    type="button" value="Tiếp theo" name="">
                            </div>
                        </fieldset>

                        {{-- step-2 --}}
                        <fieldset id="step-fieldset-2" class="hidden steps">
                            <div class="lg:w-10/12 w-full mx-auto md:shadow-2xl shadow-none py-5 md:px-10 px-3">
                                <div class="md:hidden mb-5">
                                    <div class="flex items-center justify-center text-lg mb-2 text-orange-500 font-bold">2.
                                        Thông tin phòng ban</div>
                                    <hr>
                                </div>
                                <div class="pb-5">
                                    <p class="font-bold md:text-lg text-base mb-3">Vui lòng liệt kê danh sách phòng (ban)</p>
                                    <div id="departments" class="flex flex-col">
                                        <div
                                            class="departments grid lg:grid-cols-4 grid-cols-2 gap-x-5 gap-y-2 w-full">
                                            <div class="flex items-center gap-1">
                                                <input
                                                    class="text-[#FFA726] p-2 rounded-sm border border-gray-300 focus:ring-[#FFA726] focus:border-[#FFA726]"
                                                    type="checkbox" checked name="departments[]" value="Ban lãnh đạo">
                                                <input type="text" value="Ban lãnh đạo"
                                                    class="input-value p-1 w-10/12 rounded-md border border-gray-300 focus:ring-[#FFA726] focus:border-[#FFA726]">
                                            </div>
                                            <div class="flex items-center gap-1">
                                                <input
                                                    class="text-[#FFA726] p-2 rounded-sm border border-gray-300 focus:ring-[#FFA726] focus:border-[#FFA726]"
                                                    type="checkbox" checked name="departments[]" value="Hành chính">
                                                <input type="text" value="Hành chính"
                                                    class="input-value p-1 w-10/12 rounded-md border border-gray-300 focus:ring-[#FFA726] focus:border-[#FFA726]">
                                            </div>
                                            <div class="flex items-center gap-1">
                                                <input
                                                    class="text-[#FFA726] p-2 rounded-sm border border-gray-300 focus:ring-[#FFA726] focus:border-[#FFA726]"
                                                    type="checkbox" checked name="departments[]" value="Kế toán">
                                                <input type="text" value="Kế toán"
                                                    class="input-value p-1 w-10/12 rounded-md border border-gray-300 focus:ring-[#FFA726] focus:border-[#FFA726]">
                                            </div>
                                            <div class="flex items-center gap-1">
                                                <input
                                                    class="text-[#FFA726] p-2 rounded-sm border border-gray-300 focus:ring-[#FFA726] focus:border-[#FFA726]"
                                                    type="checkbox" checked name="departments[]" value="Kho">
                                                <input type="text" value="Kho"
                                                    class="input-value p-1 w-10/12 rounded-md border border-gray-300 focus:ring-[#FFA726] focus:border-[#FFA726]">
                                            </div>
                                        </div>
                                        <div
                                            class="w-full flex items-center text-lg text-orange-400 hover:text-orange-600 md:ms-3 md:py-0 py-3 mt-4">
                                            <i class="fa-light fa-circle-plus"></i><input type="button"
                                                value="Thêm trường"
                                                class="hover:cursor-pointer add-button px-2 py-1  rounded-sm" />
                                        </div>
                                    </div>
                                    <hr class="my-3">
                                    <p class="italic md:text-sm text-[10px] text-gray-400">Ghi chú:</p>
                                    <p
                                        class="italic md:text-sm text-[10px] text-gray-400 hover:font-bold hover:text-gray-800">
                                        - Tên phòng ban sẽ được tạo
                                        thành
                                        cây thư mục (cấp 1) trong việc quản lý tài liệu.</p>
                                    <p
                                        class="italic md:text-sm text-[10px] text-gray-400 hover:font-bold hover:text-gray-800">
                                        - Sau khi nhập tên phòng (ban),
                                        Quý khách vui lòng nhấn tích vào ô bên cạnh.</p>
                                </div>

                            </div>
                            <div class="flex justify-between lg:w-8/12 md:w-10/12 w-11/12 mx-auto md:pt-8 pt-0">
                                <input
                                    class="px-5 previous py-2 hover:bg-gray-700 cursor-pointer rounded-sm bg-gray-500 text-white"
                                    style="clip-path: polygon(100% 0%, calc(100% - 10px) 50%, 100% 100%, 10px 100%, 0% 50%, 10px 0%);"
                                    type="button" value="Quay lại" name="">
                                <input
                                    class="px-5 next py-2 hover:bg-orange-500 cursor-pointer rounded-sm bg-[#FFA726] text-white"
                                    style="clip-path:  polygon(calc(100% - 10px) 0%, 100% 50%, calc(100% - 10px) 100%, 0% 100%, 10px 50%, 0% 0%);"
                                    type="submit" value="Gửi" name="">
                            </div>
                        </fieldset>

                        {{-- step-3 --}}
                        {{-- <fieldset id="step-fieldset-3" class="hidden steps">
                            <div class="lg:w-8/12 w-full mx-auto md:shadow-2xl shadow-none md:py-5 py-1 lg:px-10 px-5">
                                <div class="md:hidden my-5">
                                    <div
                                        class="flex items-center justify-center text-lg text-center mb-2 text-teal-500 font-bold">
                                        3.
                                        Cấu trúc thư mục và quyền chứng nhận</div>
                                    <hr>
                                </div>
                                <div class="pb-5">
                                    <p class="font-bold md:text-lg text-base mb-3">Vui lòng chọn cấu trúc hiển thị thư mục:
                                    </p>
                                    <div class="">
                                        <div class="file_view">
                                            <p>Mặc định:</p>
                                            <div class="flex items-center gap-2 mb-3">
                                                <input type="text" style="overflow: scroll;"
                                                    class="input-value focus:rounded-md w-full overflow-auto touch-pan-x p-1 border-0 border-b focus:border-[#FFA726] focus:ring-[#FFA726]"
                                                    name="default_structure"
                                                    value="Tên thư mục - Năm/Tháng/Ngày - Mã số người upload - Số lần trong ngày"
                                                    id="default-structure">
                                            </div>
                                            <div class="gap-2">
                                                <span class="md:text-base text-sm">Thêm lựa chọn:</span>
                                                <p class="md:text-sm text-[10px] italic text-center text-gray-600">Các lựa
                                                    chọn
                                                    dưới sẽ được thêm vào đằng sau lựa chọn mặc định.</p>
                                                <div id="file_view_structure" class="flex flex-col">
                                                    <div
                                                        class="file_view_structure w-full  mt-2">
                                                        <div class="flex items-center gap-2 mb-3">
                                                            <input
                                                                class="file-structure text-[#FFA726] p-2 rounded-sm border border-gray-300 focus:ring-[#FFA726] focus:border-[#FFA726]"
                                                                type="checkbox" value="Giờ tải lên"
                                                                name="file_view_structure[]">
                                                            <input
                                                                class="input-value p-1 w-full rounded-md border border-gray-300 focus:ring-[#FFA726] focus:border-[#FFA726]"
                                                                type="text" value="Giờ tải lên" name="">
                                                        </div>
                                                        <div class="flex items-center gap-2 mb-3">
                                                            <input
                                                                class="file-structure text-[#FFA726] p-2 rounded-sm border border-gray-300 focus:ring-[#FFA726] focus:border-[#FFA726]"
                                                                type="checkbox" value="Toàn bộ tên file cũ"
                                                                name="file_view_structure[]">
                                                            <input
                                                                class="input-value p-1 w-full rounded-md border border-gray-300 focus:ring-[#FFA726] focus:border-[#FFA726]"
                                                                type="text" value="Toàn bộ tên file cũ"
                                                                name="">
                                                        </div>
                                                        <div class="flex items-center gap-2 mb-3">
                                                            <input
                                                                class="file-structure text-[#FFA726] p-2 rounded-sm border border-gray-300 focus:ring-[#FFA726] focus:border-[#FFA726]"
                                                                type="checkbox" value="Loại file"
                                                                name="file_view_structure[]">
                                                            <input
                                                                class="input-value p-1 w-full rounded-md border border-gray-300 focus:ring-[#FFA726] focus:border-[#FFA726]"
                                                                type="text" value="Loại file" name="">
                                                        </div>
                                                        <div class="flex items-center gap-2 mb-3">
                                                            <input
                                                                class="file-structure text-[#FFA726] p-2 rounded-sm border border-gray-300 focus:ring-[#FFA726] focus:border-[#FFA726]"
                                                                type="checkbox" value="Chữ cái đầu của tên file tải lên"
                                                                name="file_view_structure[]">
                                                            <input
                                                                class="input-value p-1 w-full rounded-md border border-gray-300 focus:ring-[#FFA726] focus:border-[#FFA726]"
                                                                type="text" value="Chữ cái đầu của tên file tải lên"
                                                                name="">
                                                        </div>
                                                        <div class="flex items-center gap-2 mb-3">
                                                            <input
                                                                class="file-structure text-[#FFA726] p-2 rounded-sm border border-gray-300 focus:ring-[#FFA726] focus:border-[#FFA726]"
                                                                type="checkbox" value="Bốn chữ cái đầu của file tải lên"
                                                                name="file_view_structure[]">
                                                            <input
                                                                class="input-value p-1 w-full rounded-md border border-gray-300 focus:ring-[#FFA726] focus:border-[#FFA726]"
                                                                type="text" value="Bốn chữ cái đầu của file tải lên"
                                                                name="">
                                                        </div>
                                                        <div class="flex items-center gap-2 mb-3">
                                                            <input
                                                                class="file-structure text-[#FFA726] p-2 rounded-sm border border-gray-300 focus:ring-[#FFA726] focus:border-[#FFA726]"
                                                                type="checkbox" value="Bốn chữ cái cuối của file tải lên"
                                                                name="file_view_structure[]">
                                                            <input
                                                                class="input-value p-1 w-full rounded-md border border-gray-300 focus:ring-[#FFA726] focus:border-[#FFA726]"
                                                                type="text" value="Bốn chữ cái cuối của file tải lên"
                                                                name="">
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="w-full flex items-center text-lg text-blue-500 hover:text-blue-700 mt-4">
                                                        <i class="fa-light fa-circle-plus"></i><input type="button"
                                                            value="Thêm trường"
                                                            class="hover:cursor-pointer add-button px-2 py-1  rounded-sm" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <div class="pb-5">
                                            <p class="font-bold md:text-lg text-base">Nhóm người được cấp quyền chứng nhận
                                                tài
                                                liệu:</p>
                                            <div id="distributors" class="flex flex-col">
                                                <div class="distributors w-full">
                                                    <div class="flex items-center pt-2 gap-2">
                                                        <input
                                                            class="text-[#FFA726] p-2 rounded-sm border border-gray-300 focus:ring-[#FFA726] focus:border-[#FFA726]"
                                                            type="checkbox" checked value="Ban lãnh đạo"
                                                            name="distributors[]">
                                                        <input
                                                            class="input-value p-1 w-full rounded-md border border-gray-300 focus:ring-[#FFA726] focus:border-[#FFA726]"
                                                            type="text" value="Ban lãnh đạo" name="">
                                                    </div>
                                                    <div class="flex items-center pt-2 gap-2">
                                                        <input
                                                            class="text-[#FFA726] p-2 rounded-sm border border-gray-300 focus:ring-[#FFA726] focus:border-[#FFA726]"
                                                            type="checkbox" checked value="Trưởng phòng"
                                                            name="distributors[]">
                                                        <input
                                                            class="input-value p-1 w-full rounded-md border border-gray-300 focus:ring-[#FFA726] focus:border-[#FFA726]"
                                                            type="text" value="Trưởng phòng" name="">
                                                    </div>
                                                    <div class="flex items-center pt-2 gap-2">
                                                        <input
                                                            class="text-[#FFA726] p-2 rounded-sm border border-gray-300 focus:ring-[#FFA726] focus:border-[#FFA726]"
                                                            type="checkbox" checked value="Phó trưởng phòng"
                                                            name="distributors[]">
                                                        <input
                                                            class="input-value p-1 w-full rounded-md border border-gray-300 focus:ring-[#FFA726] focus:border-[#FFA726]"
                                                            type="text" value="Phó trưởng phòng" name="">
                                                    </div>
                                                </div>
                                                <div
                                                    class="w-full flex items-center text-lg text-blue-500 hover:text-blue-700 mt-4">
                                                    <i class="fa-light fa-circle-plus"></i><input type="button"
                                                        value="Thêm trường"
                                                        class="hover:cursor-pointer add-button px-2 py-1  rounded-sm" />
                                                </div>
                                            </div>
                                        </div> -->
                                    </div>
                                    <hr class="my-3">
                                    <p class="italic lg:text-sm text-[10px] text-gray-400 ">Ghi chú: <span
                                            class=" hover:font-bold hover:text-gray-800">Việc chọn cấu trúc
                                            hiển
                                            thị thư mục liên
                                            quan đến việc tìm kiếm thư mục. Quý khách hãy cân nhắc khi chọn để việc tìm kiếm
                                            thư mục
                                            đơn
                                            giản hơn.</span></p>
                                </div>
                            </div>
                            <div class="flex justify-between lg:w-8/12 md:w-10/12 w-11/12 mx-auto md:pt-8 pt-0">
                                <input
                                    class="px-5 previous py-2 hover:bg-gray-700 cursor-pointer rounded-sm bg-gray-500 text-white"
                                    style="clip-path: polygon(100% 0%, calc(100% - 10px) 50%, 100% 100%, 10px 100%, 0% 50%, 10px 0%);"
                                    type="button" value="Quay lại" name="">
                                <input
                                    class="px-5 next py-2 hover:bg-blue-500 cursor-pointer rounded-sm bg-[#FFA726] text-white"
                                    style="clip-path:  polygon(calc(100% - 10px) 0%, 100% 50%, calc(100% - 10px) 100%, 0% 100%, 10px 50%, 0% 0%);"
                                    type="button" value="Tiếp theo" name="">
                            </div>
                        </fieldset> --}}

                        {{-- step-4 --}}
                        {{-- <fieldset id="step-fieldset-4" class="hidden">
                            <div class="lg:w-10/12 w-full mx-auto md:shadow-2xl shadow-none md:py-5 py-3 lg:px-10 px-5">
                                <div class="md:hidden my-5">
                                    <div
                                        class="flex items-center justify-center text-lg text-center mb-2 text-blue-500 font-bold">
                                        4. Phân phối thư mục</div>
                                    <hr>
                                </div>
                                <div class="md:w-8/12 w-11/12 mx-auto">
                                    <p class="text-center font-bold md:text-lg text-base mb-3 text-gray-700">Các phòng ban
                                        Quý khách đã
                                        lựa chọn</p>
                                    <ul class="grid grid-cols-3 gap-5 list-decimal" id="departments_choice">
                                    </ul>
                                    <hr class="my-3">
                                </div>
                                <p class="text-center font-bold md:text-lg text-base mb-3 text-gray-700">Quý khách hãy lựa
                                    chọn các cách
                                    thức phân phối thư mục cho các phòng ban đã chọn</p>
                                <div class="w-full">
                                    <table class="table-auto w-full ">
                                        <thead>
                                            <tr>
                                                <th class="text-gray-700">Tên thư mục</th>
                                                <th class="text-gray-700">Các thuộc tính</th>
                                            </tr>
                                        </thead>
                                        <tbody id="tb-folder" class="">
                                        </tbody>
                                    </table>
                                    <hr class="mb-3 mt-5">
                                    <p class="italic lg:text-sm text-[10px] text-gray-400">Ghi chú:</p>
                                    <p
                                        class="italic lg:text-sm text-[10px] text-gray-400 hover:font-bold hover:text-gray-800">
                                        - Phân phối theo ý muốn người có quyền phân phối thư mục: Lựa
                                        chọn này giúp người dùng có thể chọn người có thể xem thư mục theo ý muốn của mình.
                                    </p>
                                    <p
                                        class="italic lg:text-sm text-[10px] text-gray-400 hover:font-bold hover:text-gray-800">
                                        - Phân phối cho toàn phòng ban:
                                        Lựa chọn này giúp người dùng có thể phân phối thư mục đến toàn phòng ban.</p>
                                    <p
                                        class="italic lg:text-sm text-[10px] text-gray-400 hover:font-bold hover:text-gray-800">
                                        - Phân phối 3 bước: Là một quy trình ứng dụng 3 bước để xét duyệt hồ sơ, tài liệu
                                        một cách rõ ràng, minh bạch, nhanh chóng và thuận tiện. Mỗi bước sẽ do một người có
                                        thẩm quyền phụ trách, mang đến sự rõ ràng, thuận tiện, dễ dàng nắm bắt được quá
                                        trình xét duyệt hồ sơ, tài liệu.
                                    </p>
                                    <p
                                        class="italic lg:text-sm text-[10px] text-gray-400 hover:font-bold hover:text-gray-800">
                                        - Phân phối 4 bước: Là một quy trình ứng dụng 4 bước để xét duyệt hồ sơ, tài liệu
                                        một cách rõ ràng, minh bạch, nhanh chóng và thuận tiện. Mỗi bước sẽ do một người có
                                        thẩm quyền phụ trách, mang đến sự rõ ràng, thuận tiện, dễ dàng nắm bắt được quá
                                        trình xét duyệt hồ sơ, tài liệu.
                                    </p>
                                </div>
                            </div>
                            <div class="flex justify-between lg:w-8/12 md:w-10/12 w-11/12 mx-auto md:pt-8 pt-0">
                                <input
                                    class="px-5 previous py-2 hover:bg-gray-700 cursor-pointer rounded-sm bg-gray-500 text-white"
                                    style="clip-path: polygon(100% 0%, calc(100% - 10px) 50%, 100% 100%, 10px 100%, 0% 50%, 10px 0%);"
                                    type="button" value="Quay lại" name="">
                                <input
                                    class="px-10 py-2 hover:bg-blue-500 cursor-pointer rounded-sm bg-[#FFA726] text-white"
                                    style="clip-path:  polygon(calc(100% - 10px) 0%, 100% 50%, calc(100% - 10px) 100%, 0% 100%, 10px 50%, 0% 0%);"
                                    type="submit" value="Gửi" name="">
                            </div>
                        </fieldset> --}}
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"></script>
    <script type="module" src="{{ asset('gn24-v2/js/validator/index.js') }}"></script>
    <script type="module" src="{{ asset('gn24-v2/js/validator/settingFormValidate.js') }}"></script>
    <script type="module" src="{{ asset('gn24-v2/js/multiStep.js') }}"></script>
    <script type="module" src="{{ asset('gn24-v2/js/handleFieldInput.js') }}"></script>
    <script type="module" src="{{ asset('gn24-v2/js/bindInput.js') }}"></script>
    <script type="module" src="{{ asset('gn24-v2/js/checkedAddValue.js') }}"></script>
@endsection
