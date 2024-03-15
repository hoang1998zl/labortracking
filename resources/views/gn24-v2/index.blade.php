@extends('gn24-v2.layouts.app')
@section('title', 'Trang chủ')
@section('content')
    @auth
        <main id="indexmain" class="w-[calc(100vw-15rem] bg-slate-50 flex flex-col gap-10">
        @else
            <main id="indexmain" class="w-full mt-12 bg-slate-50 flex flex-col gap-10">
            @endauth
            <div
                class="w-full bg-gradient-to-b from-[#ff9450] from-0% via-white via-10% md:via-20% lg:via-25% to-[#eceff8] to-100% pb-0 lg:pb-20 px-4">
                <div id="indexbanner" class="w-full lg:h-[70vh]  flex justify-center items-center">
                    <img class="w-full h-full object-contain" src="{{ asset('gn24-v2/img-3/icon/slide1.png') }}"
                        alt="">
                </div>
                <div class="w-full py-10">
                    <div class="w-full flex flex-col items-center text-center uppercase">
                        <h1 class="text-orange-400 text-sm md:text-base lg:text-2xl">
                            xây dựng - quản lý - thay đổi
                        </h1>
                        <h1 class="text-sm lg:text-3xl font-semibold">
                            theo thời gian với doanh nghiệp
                        </h1>
                    </div>
                    <div class="w-full lg:w-11/12 mx-auto flex flex-wrap justify-center 2xl:gap-10 md:gap-5 gap-3 mt-14">
                        <div
                            class="bg-white px-4 py-4 2xl:px-10 w-full md:w-60 xl:w-60 2xl:w-80 rounded-xl flex flex-col gap-2 md:gap-4 items-center md:hover:scale-105 transition-all duration-300 delay-75 ease-in-out shadow-[0_0_5px_0_#ccc] md:shadow-lg">
                            <img class="w-1/3 aspect-square object-contain"
                                src={{ asset('gn24-v2/img-3/icon/delegation.png') }} alt="">
                            <h1 class="text-orange-400 text-lg 2xl:text-xl font-bold text-center">
                                Quản lý giao việc
                            </h1>
                            <p class="w-full text-justify flex-1 text-sm" style="text-align-last: left">
                                Quản lý công việc được giao, thu chi tài chính trên từng nhiệm vụ, quản lý lỗi trì trệ,...
                            </p>
                        </div>
                        <div
                            class="bg-white px-4 py-4 2xl:px-10 w-full md:w-60 xl:w-60 2xl:w-80 rounded-xl flex flex-col gap-2 md:gap-4 items-center md:hover:scale-105 transition-all duration-300 delay-75 ease-in-out shadow-[0_0_5px_0_#ccc] md:shadow-lg">
                            <img class="w-1/3 aspect-square object-contain" src={{ asset('gn24-v2/img-3/icon/clock.png') }}
                                alt="">
                            <h1 class="text-orange-400 text-lg 2xl:text-xl font-bold text-center">
                                Quản lý chấm công
                            </h1>
                            <p class="w-full text-justify flex-1 text-sm" style="text-align-last: left">
                                Hoạt động chấm công dựa trên App, ngoài ra việc xin phép, tính lương, tăng ca được tự động
                                hóa thay thế máy chấm công hiện tại.
                            </p>
                        </div>
                        <div
                            class="bg-white px-4 py-4 2xl:px-10 w-full md:w-60 xl:w-60 2xl:w-80 rounded-xl flex flex-col gap-2 md:gap-4 items-center md:hover:scale-105 transition-all duration-300 delay-75 ease-in-out shadow-[0_0_5px_0_#ccc] md:shadow-lg">
                            <img class="w-1/3 aspect-square object-contain"
                                src={{ asset('gn24-v2/img-3/icon/icon-stack.png') }} alt="">
                            <h1 class="text-orange-400 text-lg 2xl:text-xl font-bold text-center">
                                Quản lý tài liệu
                            </h1>
                            <p class="w-full text-justify flex-1 text-sm" style="text-align-last: left">
                                Cho phép việc lưu trữ, cập nhật, tương tác không giới hạn với độ bảo mật cao. Kiểm soát,
                                phân quyền cho từng tài liệu.
                            </p>
                        </div>
                        <div
                            class="bg-white px-4 py-4 2xl:px-10 w-full md:w-60 xl:w-60 2xl:w-80 rounded-xl flex flex-col gap-2 md:gap-4 items-center md:hover:scale-105 transition-all duration-300 delay-75 ease-in-out shadow-[0_0_5px_0_#ccc] md:shadow-lg">
                            <img class="w-1/3 aspect-square object-contain"
                                src="{{ asset('gn24-v2/img-3/icon/procedure (1).png') }}" alt="">
                            <h1 class="text-orange-400 text-lg 2xl:text-xl font-bold text-center">
                                Quy trình
                            </h1>
                            <p class="w-full text-justify flex-1 text-sm" style="text-align-last: left">
                                Tự tạo lập và thiết kế quy trình riêng cho quý công ty dựa trên công cụ có sẵn. Quy trình
                                lớn sẽ được phân thành những quy trình nhỏ gồm 3 bước: Nhập liệu, Xét duyệt, Chứng nhận và
                                phân quyền.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            @auth
                <div id="indexfeature" class="w-full mx-auto py-10 px-10 grid grid-cols-1 2xl:grid-cols-2 gap-y-10">
                    <div class="w-1/2 2xl:w-full mx-auto hidden lg:flex flex-col gap-4 items-center justify-center 2xl:pe-16">
                    @else
                        <div id="indexfeature"
                            class="w-full md:w-1/2 mx-auto lg:w-full py-0 lg:py-10 px-10 grid grid-cols-1 lg:grid-cols-3 2xl:grid-cols-2 gap-y-10 gap-x-20">
                            <div
                                class="w-full md:w-1/2 lg:w-full 2xl:w-1/2 mx-auto hidden lg:flex flex-col gap-4 items-center justify-center 2xl:pe-16">
                            @endauth
                            <div class="w-full flex justify-center items-center">
                                <h1 class="text-2xl uppercase text-center">
                                    Đa dạng với nhiều tính năng
                                </h1>
                                <span class="hidden lg:flex items-center gap-2 mx-2 pb-1">
                                    <i class="fa-solid fa-plus text-2xl text-orange-500"></i>
                                    <i class="fa-solid fa-plus text-2xl text-orange-500"></i>
                                    <i class="fa-solid fa-plus text-2xl text-orange-500"></i>
                                </span>
                            </div>
                            <div class="w-full bg-orange-200 p-4 rounded-xl">
                                <p>
                                    {{-- Ngoài ra, với mong muốn mọi đáp ứng nhu cầu từ doanh nghiệp chúng tôi nhận tư vấn thiết
                                    kế
                                    phần mềm,
                                    website, ứng dụng theo mong muốn của doanh nghiệp. --}}
                                    Theo dõi chấm công qua App, tạm ứng, ký quỹ, công nợ, bảo hiểm, đào tạo, thưởng phạt,
                                    khám sức khỏe. Lưu trữ tài liệu bảo mật, quản lý đơn hàng, quy trình, công việc rõ ràng
                                    và minh bạch. Quý công ty cần hệ thống riêng để phù hợp có thể liên hệ với chúng tôi.
                                </p>
                            </div>
                            <a href="{{ route('gn24.contact') }}"
                                class="mt-3 block text-white px-10 py-2 font-bold rounded-full bg-gradient-to-r from-yellow-400 to-orange-400 active:to-yellow-400 active:from-orange-400 focus:outline-none">
                                Liên hệ ngay
                            </a>
                        </div>
                        <h1 class="text-xl font-bold uppercase text-center  mx-auto md:w-max lg:hidden">
                            Đa dạng với nhiều tính năng
                        </h1>
                        <div
                            class="indexfeature_wrapper block mx-auto aspect-square relative m-10 md:my-16 lg:col-span-2 2xl:col-span-1">
                            <div
                                class="w-full h-full flex justify-center items-center p-0 md:p-10 relative z-10 before:absolute before:top-1/2 before:left-1/2 before:-translate-x-1/2 before:-translate-y-1/2 before:w-4/6 before:h-4/6 before:shadow-[0_0_0_1.5rem_#fbb68c,0_0_0_3rem_#f8ddcc] md:before:shadow-[0_0_0_3rem_#fbb68c,0_0_0_6rem_#f8ddcc] before:rounded-full before:bg-orange-400">
                                <img class="hidden md:block md:w-full " src={{ asset('gn24-v2/img-3/icon/laptop2.png') }}
                                    alt="" />
                            </div>
                            <div class="spinner text-center text-[0.5rem] md:text-base">
                                <div class="relative w-full h-full">
                                    <div class="item">
                                        <div class="item-image">
                                            <img class="w-12 md:w-16 h-12 md:h-16 aspect-square p-2 md:p-4 rounded-full bg-white"
                                                src="{{ asset('gn24-v2/img-3/icon/synchronize (2).png') }}" alt="">
                                            <p class="uppercase">Lưu trữ</p>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="item-image">
                                            <img class="w-12 md:w-16 h-12 md:h-16 aspect-square p-2 md:p-4 rounded-full bg-white"
                                                src="{{ asset('gn24-v2/img-3/icon/synchronize (2).png') }}" alt="">
                                            <p class="uppercase">Công việc</p>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="item-image">
                                            <img class="w-12 md:w-16 h-12 md:h-16 aspect-square p-2 md:p-4 rounded-full bg-white"
                                                src="{{ asset('gn24-v2/img-3/icon/chat (2).png') }}" alt="">
                                            <p class="uppercase">Trò chuyện</p>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="item-image">
                                            <img class="w-12 md:w-16 h-12 md:h-16 aspect-square p-2 md:p-4 rounded-full bg-white"
                                                src="{{ asset('gn24-v2/img-3/icon/procedure (1).png') }}" alt="">
                                            <p class="uppercase">Quy trình 3 bước</p>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="item-image">
                                            <img class="w-12 md:w-16 h-12 md:h-16 aspect-square p-2 md:p-4 rounded-full bg-white"
                                                src="{{ asset('gn24-v2/img-3/icon/synchronize (2).png') }}" alt="">
                                            <p class="uppercase">Thu chi</p>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="item-image">
                                            <img class="w-12 md:w-16 h-12 md:h-16 aspect-square p-2 md:p-4 rounded-full bg-white"
                                                src="{{ asset('gn24-v2/img-3/icon/synchronize (2).png') }}" alt="">
                                            <p class="uppercase">Theo dõi chấm công</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="{{ route('gn24.contact') }}"
                            class="w-max mx-auto mt-3 block lg:hidden text-white px-10 py-2 font-bold rounded-full bg-gradient-to-r from-yellow-400 to-orange-400 active:to-yellow-400 active:from-orange-400 focus:outline-none text-center">
                            Liên hệ ngay
                        </a>
                        {{-- <script>
                            window.addEventListener('scroll', function() {
                                var element = document.getElementById('indexfeature');
                                var position = element.getBoundingClientRect();

                                // Kiểm tra khi phần tử nằm trong viewport
                                if (position.top >= 0 && position.bottom <= window.innerHeight) {
                                    $(`#indexfeature .indexfeature_wrapper`).removeClass('unActive');
                                } else {
                                    $(`#indexfeature .indexfeature_wrapper`).addClass('unActive');
                                }
                            });
                        </script> --}}
                    </div>
                    {{-- <div id="indexpricing" class="w-full pb-24 bg-[#eceff8] pt-10 px-4 lg:px-0">
                        <div class="w-full lg:w-11/12 mx-auto flex flex-col items-center text-center">
                            <h1 class="text-2xl mb-2">
                                Lựa chọn gói phù hợp
                            </h1>
                            <p class="text-xl">
                                Nâng cấp gói trả phí để sử dụng toàn bộ các tính năng cao cấp trên <span
                                    class="text-orange-400">WeOS<sup>®</sup></span>
                            </p>
                        </div>
                        <div
                            class="w-full mx-auto flex flex-wrap justify-between lg:justify-center gap-y-4 md:gap-x-[0.5%] lg:gap-10 mt-10 lg:mt-20">
                            <div
                                class="bg-white px-2 py-2 lg:py-4 lg:px-4 w-full md:w-[32.5%] lg:w-72 2xl:w-80 rounded-xl flex flex-col gap-4 items-center lg:hover:scale-105 transition-all duration-300 delay-75 ease-in-out shadow-lg">
                                <h1 class="text-xl font-bold">
                                    Trải nghiệm
                                </h1>
                                <div class="w-full h-16 text-center flex gap-2 flex-col items-center justify-center">
                                    <h1 class='font-bold text-orange-400 text-2xl'>
                                        0đ
                                    </h1>
                                    <p class="text-xs">
                                        Không giới hạn thời gian
                                    </p>
                                </div>
                                <div class="w-full flex-1 text-xs p-2 lg:p-4 rounded-lg">
                                    <ul class="w-full flex flex-col gap-y-2">
                                        <li>
                                            <i class="fa-solid fa-check text-orange-500 me-1 lg:me-2"></i>
                                            <span>
                                                App Định vị chấm công
                                            </span>
                                        </li>
                                        <li>
                                            <i class="fa-solid fa-check text-orange-500 me-1 lg:me-2"></i>
                                            <span>
                                                App Hồ sơ nhân sự
                                            </span>
                                        </li>
                                        <li>
                                            <i class="fa-solid fa-check text-orange-500 me-1 lg:me-2"></i>
                                            <span>
                                                App Quản lý tài liệu công ty
                                            </span>
                                        </li>
                                        <li>
                                            <i class="fa-solid fa-check text-orange-500 me-1 lg:me-2"></i>
                                            <span>
                                                App Xác thực tài liệu
                                            </span>
                                        </li>
                                        <li>
                                            <i class="fa-solid fa-check text-orange-500 me-1 lg:me-2"></i>
                                            <span>
                                                1GB lưu trữ
                                            </span>
                                        </li>
                                        <li>
                                            <i class="fa-solid fa-check text-orange-500 me-1 lg:me-2"></i>
                                            <span>
                                                Chat và gọi video thời gian thực
                                            </span>
                                        </li>
                                        <li>
                                            <i class="fa-solid fa-check text-orange-500 me-1 lg:me-2"></i>
                                            <span>
                                                XD quy trình phân phối tài liệu
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="w-full text-center text-xs">
                                    <button type="button" onclick="Modal_Register_Function(true)"
                                        class="w-max px-4 py-1.5 rounded-full bg-white text-orange-400 border border-orange-400 hover:bg-orange-400 hover:text-white transition-all duration-300 delay-75 ease-in-out">
                                        Đăng ký sử dụng
                                    </button>
                                </div>
                            </div>
                            <div
                                class="bg-white px-2 py-2 lg:py-4 lg:px-4 w-full md:w-[32.5%] lg:w-72 2xl:w-80 rounded-xl flex flex-col gap-4 items-center lg:scale-110 lg:hover:scale-[1.15] transition-all duration-300 delay-75 ease-in-out shadow-lg">
                                <h1 class="text-xl font-bold">
                                    Doanh nghiệp
                                </h1>
                                <div class="w-10/12 h-20 text-center flex gap-2 flex-col items-center justify-center">
                                    <h1 class='font-bold text-orange-400 text-2xl'>
                                        5.000.000đ
                                    </h1>
                                    <div
                                        class="w-full overflow-hidden px-5 py-2 text-sm flex justify-center items-center gap-2 rounded bg-orange-400 relative before:absolute before:top-0 before:left-0 before:h-full before:aspect-square before:bg-white before:rotate-45 before:-translate-x-2/3 after:absolute after:top-0 after:right-0 after:h-full after:aspect-square after:bg-white after:rotate-45 after:translate-x-2/3">
                                        <img src="{{ asset('gn24-v2/img-3/icon/crown.png') }}" alt=""
                                            class="w-4">
                                        <p class="text-white">
                                            Khuyên dùng
                                        </p>
                                        <img src="{{ asset('gn24-v2/img-3/icon/crown.png') }}" alt=""
                                            class="w-4">
                                    </div>
                                </div>
                                <div class="w-full flex-1 text-xs p-2 lg:p-4 rounded-lg">
                                    <ul class="w-full flex flex-col gap-y-2">
                                        <li>
                                            <span>
                                                Cộng thêm:
                                            </span>
                                        </li>
                                        <li>
                                            <i class="fa-solid fa-check text-orange-500 me-1 lg:me-2"></i>
                                            <span>
                                                Không giới hạn dung lượng
                                            </span>
                                        </li>
                                        <li>
                                            <i class="fa-solid fa-check text-orange-500 me-1 lg:me-2"></i>
                                            <span>
                                                Xây dựng hệ thống riêng cho DN
                                            </span>
                                        </li>
                                        <li>
                                            <i class="fa-solid fa-check text-orange-500 me-1 lg:me-2"></i>
                                            <span>
                                                Trích lục theo yêu cầu từ hỗ trợ
                                            </span>
                                        </li>
                                        <li>
                                            <i class="fa-solid fa-check text-orange-500 me-1 lg:me-2"></i>
                                            <span>
                                                Bảo mật dữ liệu:
                                            </span>
                                        </li>
                                        <li class="ps-3 lg:ps-6">
                                            <i class="fa-solid fa-plus text-orange-500 me-1 lg:me-2"></i>
                                            <span>Theo chuẩn <span class="text-red-500 font-bold">Quốc tế</span></span>
                                        </li>
                                        <li class="ps-3 lg:ps-6">
                                            <i class="fa-solid fa-plus text-orange-500 me-1 lg:me-2"></i>
                                            <span>Cài đặt tại máy chủ <span class="text-red-500 font-bold">Quốc
                                                    tế</span></span>
                                        </li>
                                        <li class="ps-3 lg:ps-6">
                                            <i class="fa-solid fa-plus text-orange-500 me-1 lg:me-2"></i>
                                            <span>Theo yêu cầu <span class="text-red-500 font-bold">Doanh
                                                    nghiệp</span></span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="w-full text-center text-xs">
                                    <button type="button" onclick="Modal_Register_Function(true)"
                                        class="w-max px-4 py-1.5 rounded-full bg-orange-400 text-white">
                                        Đăng ký sử dụng
                                    </button>
                                </div>
                            </div>
                            <div
                                class="bg-white px-2 py-2 lg:py-4 lg:px-4 w-full md:w-[32.5%] lg:w-72 2xl:w-80 rounded-xl flex flex-col gap-4 items-center lg:hover:scale-105 transition-all duration-300 delay-75 ease-in-out shadow-lg">
                                <h1 class="text-xl font-bold">
                                    Tiêu chuẩn
                                </h1>
                                <div class="w-full h-16 text-center flex gap-2 flex-col items-center justify-center">
                                    <h1 class='font-bold text-orange-400 text-2xl'>
                                        2.000.000đ
                                        <span>/</span>
                                        <sub class="text-black text-base font-light">Tháng</sub>
                                    </h1>
                                </div>
                                <div class="w-full flex-1 text-xs p-2 lg:p-4 rounded-lg">
                                    <ul class="w-full flex flex-col gap-y-2">
                                        <li>
                                            <span>
                                                Cộng thêm:
                                            </span>
                                        </li>
                                        <li>
                                            <i class="fa-solid fa-check text-orange-500 me-1 lg:me-2"></i>
                                            <span>
                                                10GB lưu trữ
                                            </span>
                                        </li>
                                        <li>
                                            <i class="fa-solid fa-check text-orange-500 me-1 lg:me-2"></i>
                                            <span>
                                                App Quản công việc
                                            </span>
                                        </li>
                                        <li>
                                            <i class="fa-solid fa-check text-orange-500 me-1 lg:me-2"></i>
                                            <span>
                                                Thu chi tài chính từng công việc
                                            </span>
                                        </li>
                                        <li>
                                            <i class="fa-solid fa-check text-orange-500 me-1 lg:me-2"></i>
                                            <span>
                                                Tính năng chuyên sâu nhân sự
                                            </span>
                                        </li>
                                        <li>
                                            <i class="fa-solid fa-check text-orange-500 me-1 lg:me-2"></i>
                                            <span>
                                                BH Xã hội, Đào tạo, Thưởng phạt
                                            </span>
                                        </li>
                                        <li>
                                            <i class="fa-solid fa-check text-orange-500 me-1 lg:me-2"></i>
                                            <span>
                                                Ký quỹ, Công nợ, ...
                                            </span>
                                        </li>
                                        <li>
                                            <i class="fa-solid fa-check text-orange-500 me-1 lg:me-2"></i>
                                            <span>
                                                Bảng lương + Marco chuyên dụng
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="w-full text-center text-xs">
                                    <button type="button" onclick="Modal_Register_Function(true)"
                                        class="w-max px-4 py-1.5 rounded-full bg-white text-orange-400 border border-orange-400 hover:bg-orange-400 hover:text-white transition-all duration-300 delay-75 ease-in-out">
                                        Đăng ký sử dụng
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div> --}}
        </main>
    @endsection
    @section('scripts')
        <script>
            AOS.init();
        </script>
        <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"></script>
        <script type="module" src="{{ asset('gn24-v2/js/validator/index.js') }}"></script>
        <script type="module" src="{{ asset('gn24-v2/js/validator/registerValidate.js') }}"></script>
        <script type="module" src="{{ asset('gn24-v2/js/bindInput.js') }}"></script>
    @endsection
