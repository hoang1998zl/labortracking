@extends('gn24-v2.layouts.app')
@section('title', 'Cài đặt tài khoản')
@section('content')
    <section>
        <div class="h-auto md:pt-32 pt-12 w-full bg-gradient-to-l from-orange-400 to-orange-300">
            <div class="flex  items-center justify-center py-10 w-11/12 mx-auto">
                <div class="bg-white lg:w-11/12 w-full mx-auto shadow-2xl md:p-10 py-5">
                    <p class="text-center md:text-3xl text-xl font-bold">Cài đặt tài khoản</p>
                    <form class="setting-form" action="{{ route('profile.setting.setup', $user->id) }}" method="POST">
                        @csrf
                        @method('patch')

                        {{-- step-1 --}}
                        <fieldset id="step-fieldset-1" class="">
                            <div class="lg:w-11/12 w-full mx-auto py-5 lg:px-10 px-5">
                                <div class="grid md:grid-cols-2 grid-rows-1 gap-5">
                                    <div title="Email của Quý khách sẽ trở thành tài khoản đăng nhập vào ứng dụng của chúng tôi"
                                        class=" hover:cursor-pointer">
                                        <label for="" class="font-bold text-gray-700">Email (Tài khoản đăng
                                            nhập)</label>
                                        <input type="text" value="{{ $user->email }}" name="email"
                                            class="w-full border-gray-300 focus:ring-orange-400 focus:border-orange-400 rounded-md">
                                    </div>
                                    <div class="">
                                        <label for="" class="font-bold text-gray-700">Số điện thoại</label>
                                        <input type="tel" name="phone"
                                        @if ($user->phone)
                                            value="{{ $user->phone }}"
                                        @else
                                            placeholder="Hãy thiết lập SĐT cho tài khoản của bạn"
                                        @endif
                                            class="w-full border-gray-300 focus:ring-orange-500 focus:border-orring-orange-500 rounded-md">
                                    </div>
                                    <div class="">
                                        <label class="block font-bold  text-gray-700" for="">Tên công
                                            ty</label>
                                        <input value="{{ $user->company_name }}"
                                            class="w-full rounded-md border border-gray-300 focus:border-orange-400 focus:ring-orange-400"
                                            type="text" name="company_name" id="company_name">
                                    </div>
                                    <div class="">
                                        <label class="font-bold  text-gray-700 block" for="">Mã công
                                            ty</label>
                                        <input value="{{ $user->company_code }}"
                                            class="w-full rounded-md border border-gray-300 focus:border-orange-400 focus:ring-orange-400"
                                            type="text" name="company_code" id="company_code">
                                    </div>
                                </div>
                                <hr class="my-3">
                                <p class="italic text-sm text-gray-400">Ghi chú: <span
                                        class="hover:font-bold hover:text-gray-800">Mã công
                                        ty sẽ là mật khẩu để đăng nhập vào
                                        EntOS.</span></p>
                            </div>
                        </fieldset>

                        {{-- step-2 --}}
                        <fieldset id="step-fieldset-2" class=" steps">
                            <div class="lg:w-11/12 w-full mx-auto py-5 lg:px-10 px-5">
                                <div class="pb-5">
                                    <p class="font-bold text-xl">1. Thông tin phòng ban:</p>
                                    <p class="mb-3 italic">Các phòng (ban) hiện tại của Quý Công ty
                                    </p>
                                    <div id="departments" class="md:flex md:flex-row flex flex-col">
                                        <div
                                            class="departments md:order-1 order-2 grid lg:grid-cols-4 md:grid-cols-2 grid-rows-1 gap-x-5 gap-y-2 md:w-3/4 w-full">
                                            @foreach ($departments as $department)
                                                <div class="flex items-center gap-1">
                                                    <input
                                                        class="text-orange-400 p-2 rounded-sm border border-gray-300 focus:ring-orange-400 focus:border-orange-400"
                                                        type="checkbox" checked name="departments[]"
                                                        value="{{ $department->department_name }}">
                                                    <input type="text" value="{{ $department->department_name }}"
                                                        class="input-value p-1 w-10/12 rounded-md border border-gray-300 focus:ring-orange-400 focus:border-orange-400">
                                                </div>
                                            @endforeach
                                        </div>
                                        <div
                                            class=" md:order-2 order-1 md:w-1/4 w-full flex items-center text-lg text-orring-orange-500 hover:text-orange-600 justify-center md:ms-3 md:py-0 py-3">
                                            <i class="fa-light fa-circle-plus"></i><input type="button" value="Thêm trường"
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
                        </fieldset>

                        {{-- step-3 --}}
                        <fieldset id="step-fieldset-3" class=" steps">
                            <div class="lg:w-11/12 w-full mx-auto md:py-5 py-1 lg:px-10 px-5">
                                <div class="pb-5">
                                    <p class="font-bold text-xl">2. Cấu trúc thư mục và quyền chứng nhận</p>
                                    <p class="mb-3 italic">Cấu trúc hiển thị thư mục Quý khách đã chọn:
                                    </p>
                                    <div class="">
                                        <div class="file_view">
                                            <div class="flex items-center gap-2 mb-3">
                                                <input type="text" style="overflow: scroll;"
                                                    class="input-value focus:rounded-md w-full overflow-auto touch-pan-x p-1 border-0 border-b focus:border-orange-400 focus:ring-orange-400"
                                                    name="default_structure" value="{{ $file->file_structure }}"
                                                    id="default-structure">
                                            </div>
                                            <div class="gap-2">
                                                <span class="md:text-base text-sm italic">Thêm lựa chọn:</span>
                                                <p class="md:text-sm text-[10px] italic text-center text-gray-600">Các lựa
                                                    chọn
                                                    dưới sẽ được thêm vào đằng sau lựa chọn mặc định.</p>
                                                <div id="file_view_structure" class="md:flex md:flex-row flex flex-col">
                                                    <div
                                                        class="file_view_structure md:order-1 order-2 md:w-2/3 w-full grid lg:grid-cols-2 gap-x-5 mt-2">
                                                        <div class="flex items-center gap-2 mb-3">
                                                            <input
                                                                class="file-structure text-orange-400 p-2 rounded-sm border border-gray-300 focus:ring-orange-400 focus:border-orange-400"
                                                                type="checkbox" value="Giờ tải lên"
                                                                name="file_view_structure[]">
                                                            <input
                                                                class="input-value p-1 w-full rounded-md border border-gray-300 focus:ring-orange-400 focus:border-orange-400"
                                                                type="text" value="Giờ tải lên" name="">
                                                        </div>
                                                        <div class="flex items-center gap-2 mb-3">
                                                            <input
                                                                class="file-structure text-orange-400 p-2 rounded-sm border border-gray-300 focus:ring-orange-400 focus:border-orange-400"
                                                                type="checkbox" value="Toàn bộ tên file cũ"
                                                                name="file_view_structure[]">
                                                            <input
                                                                class="input-value p-1 w-full rounded-md border border-gray-300 focus:ring-orange-400 focus:border-orange-400"
                                                                type="text" value="Toàn bộ tên file cũ"
                                                                name="">
                                                        </div>
                                                        <div class="flex items-center gap-2 mb-3">
                                                            <input
                                                                class="file-structure text-orange-400 p-2 rounded-sm border border-gray-300 focus:ring-orange-400 focus:border-orange-400"
                                                                type="checkbox" value="Loại file"
                                                                name="file_view_structure[]">
                                                            <input
                                                                class="input-value p-1 w-full rounded-md border border-gray-300 focus:ring-orange-400 focus:border-orange-400"
                                                                type="text" value="Loại file" name="">
                                                        </div>
                                                        <div class="flex items-center gap-2 mb-3">
                                                            <input
                                                                class="file-structure text-orange-400 p-2 rounded-sm border border-gray-300 focus:ring-orange-400 focus:border-orange-400"
                                                                type="checkbox" value="Chữ cái đầu của tên file tải lên"
                                                                name="file_view_structure[]">
                                                            <input
                                                                class="input-value p-1 w-full rounded-md border border-gray-300 focus:ring-orange-400 focus:border-orange-400"
                                                                type="text" value="Chữ cái đầu của tên file tải lên"
                                                                name="">
                                                        </div>
                                                        <div class="flex items-center gap-2 mb-3">
                                                            <input
                                                                class="file-structure text-orange-400 p-2 rounded-sm border border-gray-300 focus:ring-orange-400 focus:border-orange-400"
                                                                type="checkbox" value="Bốn chữ cái đầu của file tải lên"
                                                                name="file_view_structure[]">
                                                            <input
                                                                class="input-value p-1 w-full rounded-md border border-gray-300 focus:ring-orange-400 focus:border-orange-400"
                                                                type="text" value="Bốn chữ cái đầu của file tải lên"
                                                                name="">
                                                        </div>
                                                        <div class="flex items-center gap-2 mb-3">
                                                            <input
                                                                class="file-structure text-orange-400 p-2 rounded-sm border border-gray-300 focus:ring-orange-400 focus:border-orange-400"
                                                                type="checkbox" value="Bốn chữ cái cuối của file tải lên"
                                                                name="file_view_structure[]">
                                                            <input
                                                                class="input-value p-1 w-full rounded-md border border-gray-300 focus:ring-orange-400 focus:border-orange-400"
                                                                type="text" value="Bốn chữ cái cuối của file tải lên"
                                                                name="">
                                                        </div>
                                                    </div>
                                                    <div
                                                        class=" md:order-2 order-1 md:w-1/3 w-full flex items-center text-lg text-orring-orange-500 hover:text-orange-600 justify-center ">
                                                        <i class="fa-light fa-circle-plus"></i><input type="button"
                                                            value="Thêm trường"
                                                            class="hover:cursor-pointer add-button px-2 py-1  rounded-sm" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pb-5">
                                            <p class="italic">Nhóm người được cấp quyền chứng nhận
                                                tài
                                                liệu:</p>
                                            <div id="distributors" class="md:flex md:flex-row flex flex-col">
                                                <div
                                                    class="distributors md:w-2/3 grid md:grid-cols-2 grid-rows-1 gap-x-5 w-full md:order-1 order-2">
                                                    @foreach ($can_distribute as $distributor)
                                                        <div class="flex items-center pt-2 gap-2">
                                                            <input
                                                                class="text-orange-400 p-2 rounded-sm border border-gray-300 focus:ring-orange-400 focus:border-orange-400"
                                                                type="checkbox" checked
                                                                value="{{ $distributor->distributor }}"
                                                                name="distributors[]">
                                                            <input
                                                                class="input-value p-1 w-full rounded-md border border-gray-300 focus:ring-orange-400 focus:border-orange-400"
                                                                type="text" value="{{ $distributor->distributor }}"
                                                                name="">
                                                        </div>
                                                    @endforeach

                                                </div>
                                                <div
                                                    class=" md:order-2 order-1 md:w-1/3 w-full flex items-center text-lg text-orring-orange-500 hover:text-orange-600 justify-center ms-3">
                                                    <i class="fa-light fa-circle-plus"></i><input type="button"
                                                        value="Thêm trường"
                                                        class="hover:cursor-pointer add-button px-2 py-1  rounded-sm" />
                                                </div>
                                            </div>
                                        </div>
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
                        </fieldset>

                        {{-- step-4 --}}
                        <fieldset id="step-fieldset-4" class="">
                            <div class="lg:w-11/12 w-full mx-auto md:py-5 py-3 lg:px-10 px-5">
                                <p class="font-bold md:text-xl text-base mb-3">3. Các cách
                                    thức phân phối thư mục cho các phòng ban</p>
                                <div class="w-full">
                                    <table class="table-auto w-full ">
                                        <thead>
                                            <tr>
                                                <th class="text-gray-700">Tên thư mục</th>
                                                <th class="text-gray-700">Các thuộc tính</th>
                                            </tr>
                                        </thead>
                                        <tbody id="tb-folder" class="">
                                            @foreach ($departments as $department_distribution)
                                                <tr>
                                                    <td class="md:w-2/12 w-4/12 text-center text-white">
                                                        <p class="bg-orring-orange-500 rounded-md md:px-2 md:py-2 py-1 px-1 my-2">
                                                            {{ $department_distribution->department_name }}</p>
                                                    </td>
                                                    <td class="md:w-10/12 w-8/12 text-center">
                                                        <select
                                                            class="rounded-md hover:cursor-pointer border-gray-400 focus:font-bold text-gray-700 md:text-base text-[13px] focus:ring-orange-400 focus:border-orange-400 w-11/12"
                                                            name="department_distribute[]" id="">
                                                            <option
                                                                {{ $department_distribution->distribute == 'theo_nguoi_co_quyen' ? 'selected' : '' }}
                                                                value="theo_nguoi_co_quyen">Phân phối theo người có quyền
                                                                phân phối thư
                                                                mục (Bổ sung sau)</option>
                                                            <option
                                                                {{ $department_distribution->distribute == 'all_department' ? 'selected' : '' }}
                                                                value="all_department">Phân phối cho tất cả mọi người
                                                            </option>
                                                            <option
                                                                {{ $department_distribution->distribute == '3_steps' ? 'selected' : '' }}
                                                                value="3_steps">Phân phối theo 3 bước</option>
                                                            <option
                                                                {{ $department_distribution->distribute == '4_steps' ? 'selected' : '' }}
                                                                value="4_steps">Phân phối theo 4 bước</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                            @endforeach
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
                        </fieldset>

                        <div class="text-center">
                            <button class="text-white text-lg py-2 px-5 bg-orring-orange-500 rounded-lg hover:bg-teal-600" type="submit">Gửi</button>
                        </div>
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
    <script type="module" src="{{ asset('gn24-v2/js/handleFieldInput.js') }}"></script>
    <script type="module" src="{{ asset('gn24-v2/js/bindInput.js') }}"></script>
    <script type="module" src="{{ asset('gn24-v2/js/checkedAddValue.js') }}"></script>
    <script type="module" src="{{ asset('gn24-v2/js/checkAddDepartment.js') }}"></script>
@endsection
