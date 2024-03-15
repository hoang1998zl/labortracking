@extends('gn24-v2.layouts.app')
@section('title', 'Tổng hợp video hướng dẫn sử dụng ứng dụng')
@section('content')
    @auth
        <main class="py-10 flex md:flex-row flex-col w-11/12 mx-auto lg:gap-x-5 md:gap-x-3 gap-x-1">
        @else
            <main class="pb-10 pt-32 flex md:flex-row flex-col w-11/12 mx-auto lg:gap-x-5 md:gap-x-3 gap-x-1">
            @endauth
            <div class="lg:w-2/3 md:w-3/4 w-full mb-3">
                <div class="lg:w-11/12 w-full mx-auto">
                    <iframe class="w-full aspect-video rounded-xl" src="{{ asset('gn24-v2/video-img/all/dang_ky.mp4') }}"
                        title="Video hướng dẫn đăng ký" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                    <p class="text-base lg:text-lg mt-2"><span class="font-bold">Hướng dẫn đăng ký tài khoản</p>
                    <p class="text-gray-500">Tổng quan</p>
                    {{-- <div id="click-hide-comment"
                    class="hover:cursor-pointer w-full flex items-center justify-between p-2 rounded-lg bg-orange-400 mt-5">
                    <p class="font-bold">Nhận xét </p><i class="fa-solid fa-caret-down"></i>
                </div>
                <div id="comment">
                    <div class="flex items-center gap-3 mt-3">
                        <i class="text-4xl fa-thin fa-circle-user"></i>
                        <input class="focus:border-orange-600 focus:ring-orange-600 w-full rounded-2xl bg-gray-100 border-none"
                            type="text" placeholder="Viết nhận xét">
                    </div>
                    <div class="flex items-center gap-3 mt-3">
                        <i class="text-4xl fa-thin fa-circle-user"></i>
                        <div>
                            <p class="font-bold">@User <span class="ps-3 text-gray-400 font-thin">1 tháng trước</span></p>
                            <p>Tuyệt vời</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-3 mt-3">
                        <i class="text-4xl fa-thin fa-circle-user"></i>
                        <div>
                            <p class="font-bold">@User 2 <span class="ps-3 text-gray-400 font-thin">1 tháng trước</span></p>
                            <p>Hay lắm</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-3 mt-3">
                        <i class="text-4xl fa-thin fa-circle-user"></i>
                        <div>
                            <p class="font-bold">@User 3 <span class="ps-3 text-gray-400 font-thin">1 tháng trước</span></p>
                            <p>Tốt lắm</p>
                        </div>
                    </div>
                </div> --}}
                </div>
            </div>
            <div
                class="lg:w-1/3 md:w-1/4 w-full lg:max-h-[calc(70vh)] overflow-auto border-t-2 border-gray-300 lg:border-t-0 pt-3 grid grid-cols-2 md:grid-cols-1 gap-x-3">
                <button type="button" class="flex lg:flex-row flex-col gap-2 mb-5" onclick="Modal_Video_Function(true)">
                    <img class="lg:w-1/2 w-full" src="{{ asset('gn24-v2/img-3/icon/demo_video.png') }}" alt="">
                    <div class="lg:w-1/2 w-full">
                        <p class="text-base lg:text-lg"><span class="font-bold">Xin đi trễ - về sớm </span>(tập 2)</p>
                        <p>App Quản lý</p>
                    </div>
                </button>
                <a href="" class="flex lg:flex-row flex-col gap-2 mb-5">
                    <img class="lg:w-1/2 w-full" src="{{ asset('gn24-v2/img-3/icon/demo_video.png') }}" alt="">
                    <div class="lg:w-1/2 w-full">
                        <p class="text-base lg:text-lg"><span class="font-bold">Lịch công tác </span>(tập 2)</p>
                        <p>App Quản lý</p>
                    </div>
                </a>
                <a href="" class="flex lg:flex-row flex-col gap-2 mb-5">
                    <img class="lg:w-1/2 w-full" src="{{ asset('gn24-v2/img-3/icon/demo_video.png') }}" alt="">
                    <div class="lg:w-1/2 w-full">
                        <p class="text-base lg:text-lg"><span class="font-bold">Xin nghỉ phép </span>(tập 2)</p>
                        <p>App Quản lý</p>
                    </div>
                </a>
                <a href="" class="flex lg:flex-row flex-col gap-2 mb-5">
                    <img class="lg:w-1/2 w-full" src="{{ asset('gn24-v2/img-3/icon/demo_video.png') }}" alt="">
                    <div class="lg:w-1/2 w-full">
                        <p class="text-base lg:text-lg"><span class="font-bold">Đăng ký lịch làm (part-time) </span>(tập 2)
                        </p>
                        <p>App Quản lý</p>
                    </div>
                </a>
                <a href="" class="flex lg:flex-row flex-col gap-2 mb-5">
                    <img class="lg:w-1/2 w-full" src="{{ asset('gn24-v2/img-3/icon/demo_video.png') }}" alt="">
                    <div class="lg:w-1/2 w-full">
                        <p class="text-base lg:text-lg"><span class="font-bold">Tăng ca </span>(tập 2)</p>
                        <p>App Quản lý</p>
                    </div>
                </a>
                <a href="" class="flex lg:flex-row flex-col gap-2 mb-5">
                    <img class="lg:w-1/2 w-full" src="{{ asset('gn24-v2/img-3/icon/demo_video.png') }}" alt="">
                    <div class="lg:w-1/2 w-full">
                        <p class="text-base lg:text-lg"><span class="font-bold">Chấm công, xem hồ sơ nhân viên </span>(tập
                            2)</p>
                        <p>App Quản lý</p>
                    </div>
                </a>
            </div>
        </main>
    @endsection
