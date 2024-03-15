@extends('gn24-v2.layouts.app')
@section('title', 'Tổng hợp video nhân sự')
@section('content')
    <main class="py-24 bg-gray-100">
        <div class="flex md:flex-row flex-col w-11/12 mx-auto lg:gap-28 md:gap-10">
            <div class="md:w-9/12 w-full">
                <div class="pb-8">
                    <p class="text-orange-400 lg:text-2xl md:text-xl font-bold">Tin hướng dẫn</p>
                    <hr class="py-[2px] bg-orange-400">
                </div>
                <ul>
                    <li>
                        <a href="#" class="flex md:flex-row flex-col gap-5 pb-5">
                            <div class="md:w-4/12 w-full">
                                <img class="md:shadow-[10px_0px_5px_rgba(0,0,0,0.3)] rounded-2xl"
                                    src="{{ asset('gn24-v2/img/news-img/2.png') }}" alt="">
                            </div>
                            <div class="md:w-8/12 w-full bg-white py-2 px-8">
                                <p class="uppercase text-orange-400 lg:text-2xl md:text-lg font-bold pb-3">app định vị chấm công</p>
                                <p class="lg:text-base md:text-sm text-gray-600">Với khả năng xác định được vị trí, các công ty và tổ chức
                                    đã sử dụng GPS để trả lương cho nhân viên khi họ không có mặt trực tiếp tại văn phòng.
                                    Chỉ cần có mạng internet là nhà quản lý sẽ biết được thông tin chi tiết của nhân viên:
                                    Giờ giấc di làm, họ đang ở đâu và chuyển vị trí làm việc khi nào?</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a class="flex md:flex-row flex-col gap-5 pb-5">
                            <div class="md:w-4/12 w-full">
                                <img class="md:shadow-[10px_0px_5px_rgba(0,0,0,0.3)] rounded-2xl"
                                    src="{{ asset('gn24-v2/img/news-img/12.png') }}" alt="">
                            </div>
                            <div class="md:w-8/12 w-full bg-white py-2 px-8">
                                <p class="uppercase text-orange-400 lg:text-2xl md:text-lg font-bold pb-3">phần mềm quản lý nhân sự</p>
                                <p class="lg:text-base md:text-sm text-gray-600">Đối với các doanh nghiệp lớn với số lượng nhân viên lên
                                    hàng trăm, hàng nghìn người thì việc quản lý nhân sự và trả lương sẽ trở nên khó khăn.
                                    Với phần mềm nhân sự, các vấn đề nhân sự tồn tại trong doanh nghiệp trở nên dễ dàng hơn
                                    bao giờ hết.</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a class="flex md:flex-row flex-col gap-5 pb-5">
                            <div class="md:w-4/12 w-full">
                                <img class="md:shadow-[10px_0px_5px_rgba(0,0,0,0.3)] rounded-2xl"
                                    src="{{ asset('gn24-v2/img/news-img/11.png') }}" alt="">
                            </div>
                            <div class="md:w-8/12 w-full bg-white py-2 px-8">
                                <p class="uppercase text-orange-400 lg:text-2xl md:text-lg font-bold pb-3">tài liệu bảo mật</p>
                                <p class="lg:text-base md:text-sm text-gray-600">Bảo mật dữ liệu là thuật ngữ được sử dụng để mô tả quy
                                    trình, chính sách và công nghệ đảm bảo dữ liệu của doanh nghiệp được bảo mật khỏi truy
                                    cập bên trong và bên ngoài hoặc hư hỏng dữ liệu, bao gồm các cuộc tấn công độc hại và
                                    các mối đe doạ nội bộ.</p>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="md:w-3/12 w-full">
                <div class="pb-8">
                    <p class="text-gray-600 lg:text-2xl text-xl font-bold">Tin thường</p>
                    <hr class="py-[2px] bg-gray-600">
                </div>
                <ul>
                    <li class="pb-5">
                        <a href="#">
                            <img class=" rounded-2xl" src="{{ asset('gn24-v2/img/news-img/22a8b8b6e4f791a4c1402fa00e3afe73.jpg') }}"
                                alt="">
                            <p class="text-orange-400 font-bold lg:text-2xl md:text-lg">Máy đọc thẻ từ</p>
                        </a>
                    </li>
                    <li class="pb-5">
                        <a href="#">
                            <img class=" rounded-2xl" src="{{ asset('gn24-v2/img/news-img/zyro-image.png') }}" alt="">
                            <p class="text-orange-400 font-bold lg:text-2xl md:text-lg">KPI</p>
                        </a>
                    </li>
                    <li class="pb-5">
                        <a href="#">
                            <img class="rounded-2xl"
                                src="{{ asset('gn24-v2/img/news-img/29.jpg') }}"
                                alt="">
                            <p class="text-orange-400 font-bold lg:text-2xl md:text-lg">Nguyên tắc tính lương</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </main>
@endsection
