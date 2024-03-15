@extends('gn24-v2.layouts.app')
@section('title', 'Quản lý tài liệu')
@section('content')
    <main class="w-full">
        <section class="w-full bg-cover h-screen bg-no-repeat"
            style="background-image: url({{ asset('gn24-v2/img/icon/17.png') }})">
            <div class="md:flex items-center md:py-0 py-64">
                <div class="md:w-4/12 w-full">
                </div>
                <div class="md:w-8/12 md:h-screen md:flex items-center">
                    <div class="md:w-9/12 w-full mx-auto relative">
                        <div class="w-11/12 relative mx-auto">
                            <div class="w-full md:px-6 md:py-8 p-2 bg-white z-10 relative">
                                <div class="mb-5">
                                    <p class="md:text-2xl text-lg font-bold text-orange-400 text-center">Tính năng của phần
                                        mềm</p>
                                </div>
                                <div class="grid grid-cols-2 lg:gap-5 gap-2">
                                    <div class="mb-2">
                                        <p class="md:text-lg text-base font-bold text-orange-400"><i
                                                class="fa-sharp text-orange-400 fa-solid fa-diamond me-2"></i>Lưu trữ tài
                                            liệu</p>
                                        <p class="md:text-lg text-base">Lưu trữ file word, excel, pdf chứa thông tin quan
                                            trọng của công ty cần bảo mật.</p>
                                    </div>
                                    <div class="mb-2">
                                        <p class="md:text-lg text-base font-bold text-orange-400"><i
                                                class="fa-sharp text-orange-400 fa-solid fa-diamond me-2"></i>Chia sẻ tài
                                            liệu</p>
                                        <p class="md:text-lg text-base">Chia sẻ tài liệu với những cá nhân, phòng ban trong
                                            công ty.</p>
                                    </div>
                                    <div class="mb-2">
                                        <p class="md:text-lg text-base font-bold text-orange-400"><i
                                                class="fa-sharp text-orange-400 fa-solid fa-diamond me-2"></i>Xem tài liệu
                                        </p>
                                        <p class="md:text-lg text-base">Xem và nhận xét, góp ý những tài liệu cần được sửa
                                            đổi.</p>
                                    </div>
                                    <div class="mb-2">
                                        <p class="md:text-lg text-base font-bold text-orange-400"><i
                                                class="fa-sharp text-orange-400 fa-solid fa-diamond me-2"></i>Chat bảo mật
                                        </p>
                                        <p class="md:text-lg text-base">Tạo nhóm và nhắn tin những thông tin cần bảo mật
                                            trong công ty.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="absolute w-1/2 -top-3 -right-3 h-60 bg-orange-400"></div>
                            <div class="absolute w-1/2 -bottom-3 -left-3 h-60 bg-orange-400"></div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </main>
@endsection
