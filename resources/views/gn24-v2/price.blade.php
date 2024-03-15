@extends('gn24-v2.layouts.app')
@section('title', 'Bảng giá')
@section('content')
    <div class="lg:pt-10 pt-20 w-full mx-auto lg:min-h-[calc(100vh-88px)] "
        style="background-image: url({{ asset('gn24-v2/img/333.png') }});background-position: bottom right 20%;">
        <section>
            <div class="w-full px-4">
                <div class="w-full mx-auto text-left">
                    <p class="lg:text-2xl md:text-xl text-lg leading-snug uppercase text-white">
                        Đăng ký sử dụng
                        <span class="font-bold block">
                            không giới hạn
                            <span class="text-orange-500 hover:text-orange-700 hover:font-bold">thời gian.</span>
                        </span>
                    </p>
                </div>
                <div class="w-full mx-auto py-10 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 text-sm">
                    <div class="bg-white h-[35rem] rounded-2xl pt-14 pb-5 px-5 flex flex-col gap-6 items-center relative">
                        <h1 class="text-2xl font-bold uppercase">
                            Free
                        </h1>
                        <div
                            class="w-full h-16 text-center px-4 rounded-full bg-sky-400 text-white flex justify-center items-center">
                            <p class="font-bold text-xl">
                                0đ
                                <span class="block text-sm">
                                    Không giới hạn thời gian
                                </span>
                            </p>
                        </div>
                        <div class="w-full flex-1">
                            <ul class="w-full flex flex-col gap-y-2">
                                <li>
                                    <i class="fa-solid fa-check text-orange-500 me-2"></i>
                                    <span>
                                        App Định vị chấm công
                                    </span>
                                </li>
                                <li>
                                    <i class="fa-solid fa-check text-orange-500 me-2"></i>
                                    <span>
                                        App Hồ sơ nhân sự
                                    </span>
                                </li>
                                <li>
                                    <i class="fa-solid fa-check text-orange-500 me-2"></i>
                                    <span>
                                        App Chấm công quẹt thẻ từ
                                    </span>
                                </li>
                                <li>
                                    <i class="fa-solid fa-check text-orange-500 me-2"></i>
                                    <span>
                                        App Quản lý tài liệu công ty
                                    </span>
                                </li>
                                <li>
                                    <i class="fa-solid fa-check text-orange-500 me-2"></i>
                                    <span>
                                        App Xác thực tài liệu
                                    </span>
                                </li>
                                <li>
                                    <i class="fa-solid fa-check text-orange-500 me-2"></i>
                                    <span>
                                        1GB lưu trữ
                                    </span>
                                </li>
                                <li>
                                    <i class="fa-solid fa-check text-orange-500 me-2"></i>
                                    <span>
                                        Chat và gọi video thời gian thực
                                    </span>
                                </li>
                                <li>
                                    <i class="fa-solid fa-check text-orange-500 me-2"></i>
                                    <span>
                                        XD quy trình phân phối tài liệu
                                    </span>
                                </li>
                            </ul>
                        </div>
                        <div
                            class="w-max min-w-[86%] mx-auto px-4 bg-sky-400 text-white rounded-full font-bold text-lg text-center py-1.5 cursor-pointer">
                            Đăng ký sử dụng
                        </div>
                    </div>
                    <div class="bg-white h-[35rem] rounded-2xl pt-14 pb-5 px-5 flex flex-col gap-6 items-center relative">
                        <h1 class="text-2xl font-bold uppercase">
                            Cơ bản
                        </h1>
                        <div
                            class="w-full h-16 text-center px-4 rounded-full bg-yellow-400 text-white flex justify-center items-center">
                            <p class="font-bold text-xl">
                                1.000.000đ/
                                <sub class="text-sm font-normal">
                                    Tháng
                                </sub>
                            </p>
                        </div>
                        <div class="w-full flex-1">
                            <ul class="w-full flex flex-col gap-y-2">
                                <li>
                                    <span>
                                        Cộng thêm:
                                    </span>
                                </li>
                                <li>
                                    <i class="fa-solid fa-check text-orange-500 me-2"></i>
                                    <span>
                                        10GB lưu trữ
                                    </span>
                                </li>
                                <li>
                                    <i class="fa-solid fa-check text-orange-500 me-2"></i>
                                    <span>
                                        App Quản công việc
                                    </span>
                                </li>
                                <li>
                                    <i class="fa-solid fa-check text-orange-500 me-2"></i>
                                    <span>
                                        Thu chi tài chính trên từng công việc
                                    </span>
                                </li>
                                <li>
                                    <i class="fa-solid fa-check text-orange-500 me-2"></i>
                                    <span>
                                        Các tính năng chuyên sâu nhân sự
                                    </span>
                                </li>
                                <li>
                                    <i class="fa-solid fa-check text-orange-500 me-2"></i>
                                    <span>
                                        BH Xã hội, Đào tạo, Thưởng phạt
                                    </span>
                                </li>
                                <li>
                                    <i class="fa-solid fa-check text-orange-500 me-2"></i>
                                    <span>
                                        Ký quỹ, Công nợ
                                    </span>
                                </li>
                                <li>
                                    <span>
                                        ...
                                    </span>
                                </li>
                                <li>
                                    <i class="fa-solid fa-check text-orange-500 me-2"></i>
                                    <span>
                                        Bảng lương + Marco chuyên dụng
                                    </span>
                                </li>
                            </ul>
                        </div>
                        <div
                            class="w-max min-w-[86%] mx-auto px-4 bg-yellow-400 text-white rounded-full font-bold text-lg text-center py-1.5 cursor-pointer">
                            Đăng ký sử dụng
                        </div>
                    </div>
                    <div class="bg-white h-[35rem] rounded-2xl pt-14 pb-5 px-5 flex flex-col gap-6 items-center relative">
                        <h1 class="text-2xl font-bold uppercase">
                            Tiêu chuẩn
                        </h1>
                        <div
                            class="w-full h-16 text-center px-4 rounded-full bg-orange-400 text-white flex justify-center items-center">
                            {{-- <p class="font-bold text-2xl">
                                2.000.000đ/
                                <sub class="text-sm font-normal">
                                    Tháng
                                </sub>
                            </p> --}}
                        </div>
                        <div class="w-full flex-1">
                            <ul class="w-full flex flex-col gap-y-2">
                                <li>
                                    <span>
                                        Cộng thêm:
                                    </span>
                                </li>
                                <li>
                                    <i class="fa-solid fa-check text-orange-500 me-2"></i>
                                    <span>
                                        100GB lưu trữ
                                    </span>
                                </li>
                                <li>
                                    <i class="fa-solid fa-check text-orange-500 me-2"></i>
                                    <span>
                                        Hỗ trợ sao lưu dữ liệu theo yêu cầu
                                    </span>
                                </li>
                                <li>
                                    <i class="fa-solid fa-check text-orange-500 me-2"></i>
                                    <span>
                                        Bảo mật dữ liệu tại máy chủ VN
                                    </span>
                                </li>
                            </ul>
                        </div>
                        <div
                            class="w-max min-w-[86%] mx-auto px-4 bg-orange-400 text-white rounded-full font-bold text-lg text-center py-1.5 cursor-pointer">
                            Đăng ký sử dụng
                        </div>
                    </div>
                    <div
                        class="bg-white h-[35rem] rounded-2xl pt-14 pb-5 px-5 flex flex-col gap-6 items-center relative overflow-hidden">
                        <div class="absolute w-44 h-6 top-0 right-0 translate-x-[2.5rem] translate-y-[2.25rem]">
                            <div
                                class="w-full h-full flex justify-center items-center gap-2 uppercase bg-blue-600 text-white rotate-[40deg]">
                                <img src="{{ asset('gn24-v2/img/crown.jpg') }}" alt="" class="w-6">
                                <p>Pro</p>
                                <img src="{{ asset('gn24-v2/img/crown.jpg') }}" alt="" class="w-6">
                            </div>
                        </div>
                        <h1 class="text-2xl font-bold uppercase">
                            Doanh nghiệp
                        </h1>
                        <div
                            class="w-full h-16 text-center px-4 rounded-full bg-blue-600 text-white flex justify-center items-center">
                            {{-- <p class="font-bold text-2xl">
                                5.000.000đ/
                                <sub class="text-sm font-normal">
                                    Tháng
                                </sub>
                            </p> --}}
                        </div>
                        <div class="w-full flex-1">
                            <ul class="w-full flex flex-col gap-y-2">
                                <li>
                                    <span>
                                        Cộng thêm:
                                    </span>
                                </li>
                                <li>
                                    <i class="fa-solid fa-check text-orange-500 me-2"></i>
                                    <span>
                                        Không giới hạn dung lượng lưu trữ
                                    </span>
                                </li>
                                <li>
                                    <i class="fa-solid fa-check text-orange-500 me-2"></i>
                                    <span>
                                        Xây dựng hệ thống riêng cho DN
                                    </span>
                                </li>
                                <li>
                                    <i class="fa-solid fa-check text-orange-500 me-2"></i>
                                    <span>
                                        Trích lục theo yêu cầu từ hỗ trợ
                                    </span>
                                </li>
                                {{-- <li>
                                    <i class="fa-solid fa-check text-orange-500 me-2"></i>
                                    <span>
                                        CSKH và hỗ trợ:
                                    </span>
                                </li> --}}
                                <li>
                                    <i class="fa-solid fa-check text-orange-500 me-2"></i>
                                    <span>
                                        Bảo mật dữ liệu:
                                    </span>
                                </li>
                                <li class="ps-6">
                                    <i class="fa-solid fa-plus text-orange-500 me-2"></i>
                                    <span>Theo chuẩn <span class="text-red-500 font-bold">Quốc tế</span></span>
                                </li>
                                <li class="ps-6">
                                    <i class="fa-solid fa-plus text-orange-500 me-2"></i>
                                    <span>Cài đặt PM tại máy chủ <span class="text-red-500 font-bold">Quốc tế</span></span>
                                </li>
                                <li class="ps-6">
                                    <i class="fa-solid fa-plus text-orange-500 me-2"></i>
                                    <span>Theo yêu cầu của <span class="text-red-500 font-bold">Doanh nghiệp</span></span>
                                </li>
                            </ul>
                        </div>
                        <div
                            class="w-max min-w-[86%] mx-auto px-4 bg-blue-600 text-white rounded-full font-bold text-lg text-center py-1.5 cursor-pointer">
                            Đăng ký sử dụng
                        </div>
                    </div>
                </div>
                {{-- <div class="mt-5 md:w-full w-10/12 mx-auto grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 gap-y-2 md:gap-5 ">
                    <div class="border border-gray-30 rounded-lg zoom-on-hover">
                        <div class="bg-orange-500 p-2 mb-3 rounded-t-lg"></div>
                        <p class="font-bold md:text-xl text-base text-center" style="color:#FFA726;">Free</p>
                        <p class="md:text-2xl text-sm text-center font-bold" style="color:#FFA726;">0đ/<span
                                class="text-gray-900 text-xs font-thin italic">không
                                giới hạn thời gian</span></p>
                        <div class="pt-5 text-center">
                            <a href="{{ route('register') }}"
                                class="bg-orange-400 hover:bg-orange-600 md:px-2 px-1 md:py-2 py-1 md:text-base text-sm text-white rounded-3xl">Đăng
                                ký sử dụng</a>
                        </div>
                        <hr class="mx-5 mt-5">
                        <div class="mx-2 my-3">
                            <p class="text-base">Bao gồm:</p>
                            <ul class="list-disc list-inside">
                                <li class="text-gray-500 md:text-sm text-xs">App Định vị chấm công
                                </li>
                                <li class="text-gray-500 md:text-sm text-xs">App Hồ sơ nhân sự </li>
                                <li class="text-gray-500 md:text-sm text-xs">App Chấm công quẹt thẻ từ</li>
                                <li class="text-gray-500 md:text-sm text-xs">App Quản lý tài liệu công ty</li>
                                <li class="text-gray-500 md:text-sm text-xs">App Xác thực tài liệu</li>
                                <li class="text-gray-500 md:text-sm text-xs"><span class="font-bold">1GB</span>
                                    lưu trữ</li>
                                <li class="text-gray-500 md:text-sm text-xs">Chat và gọi video thời gian thực
                                </li>
                                <li class="text-gray-500 md:text-sm text-xs">XD quy trình phân phối tài liệu</li>
                            </ul>
                        </div>
                    </div>
                    <div class="border border-gray-30 rounded-lg zoom-on-hover">
                        <div class="bg-orange-600 p-2 mb-3 rounded-t-lg"></div>
                        <p class="font-bold md:text-xl text-base text-center" style="color:#FFA726;">Cơ bản</p>
                        <p class="md:text-2xl text-sm text-center font-bold" style="color:#FFA726;">500 nghìn/<span
                                class="text-sm font-thin italic text-black">tháng</span></p>
                        <div class="pt-5 text-center">
                            <a href="{{ route('register') }}"
                                class="bg-orange-400 hover:bg-orange-600 md:px-2 px-1 md:py-2 py-1 md:text-base text-sm text-white rounded-3xl">Đăng
                                ký sử dụng</a>
                        </div>
                        <hr class="mx-5 mt-5">
                        <div class="mx-2 my-3">
                            <ul class="list-disc list-inside">
                                <p class="font-bold text-gray-500">Cộng thêm:</p>
                                <li class="text-gray-500 md:text-sm text-xs"><span class="font-bold">10GB</span>
                                    lưu trữ</li>
                            </ul>
                        </div>
                    </div>
                    <div class="border border-gray-30 rounded-lg zoom-on-hover">
                        <div class="bg-orange-700 p-2 mb-3 rounded-t-lg"></div>
                        <p class="font-bold md:text-xl text-base text-center" style="color:#FFA726;">Tiêu chuẩn</p>
                        <p class="md:text-2xl text-sm text-center font-bold" style="color:#FFA726;">2 triệu/<span
                                class="text-black text-sm font-thin italic">tháng</span></p>
                        <div class="pt-5 text-center">
                            <a href="{{ route('register') }}"
                                class="bg-orange-400 hover:bg-orange-600 md:px-2 px-1 md:py-2 py-1 md:text-base text-sm text-white rounded-3xl">Đăng
                                ký sử dụng</a>
                        </div>
                        <hr class="mx-5 mt-5">
                        <div class="mx-2 my-3">
                            <ul class="list-disc list-inside">
                                <p class="font-bold text-gray-500">Cộng thêm:</p>
                                <li class="text-gray-500 md:text-sm text-xs"><span class="font-bold">100G</span>
                                    lưu trữ</li>
                                <li class="text-gray-500 md:text-sm text-xs">
                                    Hỗ trợ sao lưu dữ liệu cũ theo yêu cầu
                                </li>
                                <li class="text-gray-500 md:text-sm text-xs">Bảo mật dữ liệu tại máy chủ
                                    <span class="text-red-500 font-bold">Việt Nam</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="border border-gray-30 rounded-lg zoom-on-hover">
                        <div class="bg-orange-800 p-2 mb-3 rounded-t-lg"></div>
                        <p class="font-bold md:text-xl text-base text-center" style="color:#FFA726;">Doanh nghiệp</p>
                        <p class="md:text-2xl text-sm text-center font-bold" style="color:#FFA726;">5 triệu/<span
                                class="text-black text-sm font-thin italic">tháng</span></p>
                        <div class="pt-5 text-center">
                            <a href="{{ route('register') }}"
                                class="bg-orange-400 hover:bg-orange-600 md:px-2 px-1 md:py-2 py-1 md:text-base text-sm text-white rounded-3xl">Đăng
                                ký sử dụng</a>
                        </div>
                        <hr class="mx-5 mt-5">
                        <div class="mx-2 my-3">
                            <ul class="list-disc list-inside">
                                <p class="font-bold text-gray-500">Cộng thêm:</p>
                                <li class="text-gray-500 md:text-sm text-xs">
                                    Bảo mật dữ liệu theo chuẩn
                                    <span class="text-red-500 font-bold">Quốc tế</span>
                                </li>
                                <li class="text-gray-500 md:text-sm text-xs">
                                    Hoặc máy chủ
                                    <span class="text-red-500 font-bold">VN</span>
                                    theo yêu cầu
                                </li>
                                <li class="text-gray-500 md:text-sm text-xs">Trích lục theo yêu cầu từ hỗ trợ
                                </li>
                                <li class="text-gray-500 md:text-sm text-xs">
                                    Xây dựng hệ thống riêng cho DN
                                </li>
                                <li class="text-gray-500 md:text-sm text-xs">Không giới hạn dung lượng lưu trữ</li>
                            </ul>
                        </div>
                    </div>
                </div> --}}
            </div>
        </section>
    </div>
@endsection
