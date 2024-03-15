@extends('gn24-v2.layouts.app')
@section('title', 'Quản lý nhân sự')
@section('content')
    <main class="w-full">
        <section class="w-full bg-cover h-screen bg-no-repeat"
            style="background-image: url({{ asset('gn24-v2/img/icon/16.png') }})">
            <div class="md:flex items-center md:py-0 py-36">
                <div class="lg:w-8/12 md:h-screen md:flex mx-auto items-center">
                    <div class="lg:w-9/12 w-full mx-auto relative">
                        <div class="w-11/12 relative mx-auto">
                            <div class="w-full md:px-6 md:py-8 p-2 bg-white z-10 relative">
                                <div class="mb-5">
                                    <p class="md:text-2xl text-lg font-bold text-orange-400 text-center">Tính năng của phần
                                        mềm</p>
                                </div>
                                <div class="grid grid-cols-2 md:gap-5 gap-2">
                                    <div class="">
                                        <p class="md:text-lg text-base font-bold text-orange-400"><i
                                                class="fa-sharp text-orange-400 fa-solid fa-diamond me-2"></i>Quản lý hồ sơ
                                        </p>
                                        <p class="md:text-lg text-base">Quản lý toàn bộ thông tin của người lao động.</p>
                                    </div>
                                    <div class="">
                                        <p class="md:text-lg text-base font-bold text-orange-400"><i
                                                class="fa-sharp text-orange-400 fa-solid fa-diamond me-2"></i>Quản lý tuyển
                                            dụng</p>
                                        <p class="md:text-lg text-base">Lên kế hoạch tuyển dụng từ các phòng ban.</p>
                                    </div>
                                    <div class="">
                                        <p class="md:text-lg text-base font-bold text-orange-400"><i
                                                class="fa-sharp text-orange-400 fa-solid fa-diamond me-2"></i>Quản lý công
                                            việc</p>
                                        <p class="md:text-lg text-base">Hỗ trợ lập kế hoạch công việc gồm các mục được giao.
                                        </p>
                                    </div>
                                    <div class="">
                                        <p class="md:text-lg text-base font-bold text-orange-400"><i
                                                class="fa-sharp text-orange-400 fa-solid fa-diamond me-2"></i>Chấm công GPS
                                        </p>
                                        <p class="md:text-lg text-base">Chấm công nhân sự đang làm việc tại công trường, đi
                                            công tác,...</p>
                                    </div>
                                    <div class="">
                                        <p class="md:text-lg text-base font-bold text-orange-400"><i
                                                class="fa-sharp text-orange-400 fa-solid fa-diamond me-2"></i>Theo dõi bảng
                                            lương</p>
                                        <p class="md:text-lg text-base">Theo dõi các khoản tính lương cá nhân linh hoạt.</p>
                                    </div>
                                    <div class="">
                                        <p class="md:text-lg text-base font-bold text-orange-400"><i
                                                class="fa-sharp text-orange-400 fa-solid fa-diamond me-2"></i>Hệ thống tính
                                            lương</p>
                                        <p class="md:text-lg text-base">Hệ thống tính lương đơn giản như trên excel, độ
                                            chính xác tuyệt đối.</p>
                                    </div>
                                    <div class="">
                                        <p class="md:text-lg text-base font-bold text-orange-400"><i
                                                class="fa-sharp text-orange-400 fa-solid fa-diamond me-2"></i>Quản lý tiến
                                            độ</p>
                                        <p class="md:text-lg text-base">Theo dõi tiến độ. Đánh giá kết quả công việc qua
                                            KPI.</p>
                                    </div>
                                    <div class="">
                                        <p class="md:text-lg text-base font-bold text-orange-400"><i
                                                class="fa-sharp text-orange-400 fa-solid fa-diamond me-2"></i>Quản lý hồ sơ
                                        </p>
                                        <p class="md:text-lg text-base">Công cụ liên lạc trong nội bộ công ty.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="absolute w-1/2 -top-3 -right-3 h-72 bg-orange-400"></div>
                            <div class="absolute w-1/2 -bottom-3 -left-3 h-72 bg-orange-400"></div>
                        </div>
                    </div>
                </div>
                <div class="lg:w-4/12 w-full">
                </div>
            </div>
        </section>
    </main>
@endsection
