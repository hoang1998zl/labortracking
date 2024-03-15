@extends('gn24-v2.layouts.app')
@section('title', 'Tổng hợp video hướng dẫn sử dụng ứng dụng')
@section('content')

    @auth
        <div class="w-full relative mt-0">
    @else
        <div class="w-full relative mt-12">
    @endauth
        <img src="{{ asset('gn24-v2/img-3/bg_video.jpg') }}" alt="" class="w-full h-auto">

        <main class="py-5 min-h-[calc(100vh-4rem)] flex flex-col 2xl:w-10/12 w-11/12 mx-auto gap-x-5 gap-y-0">
            <div class="w-full bg-[#37383d] rounded-lg px-4 py-2.5 z-10 overflow-auto hidden-scrollbar -translate-y-2/3">
                @auth
                    <div class="w-max mx-auto 2xl:w-full flex items-center justify-between gap-x-2">
                    @else
                        <div class="w-max mx-auto xl:w-full flex items-center justify-between gap-x-2">
                        @endauth
                        <a href="{{ route('gn24.videos.index', 'tong-quan') }}"
                            class="w-max py-2 px-4 cursor-pointer block text-center {{ \Route::current()->parameter('video') == 'tong-quan' ? 'bg-white text-orange-400' : ' text-gray-400' }} hover:bg-white rounded-md lg:rounded-full hover:text-orange-400">
                            <span>Tổng quan</span>
                        </a>
                        <a href="{{ route('gn24.videos.index', 'quan-ly-cham-cong') }}"
                            class="w-max py-2 px-4 cursor-pointer block text-center {{ \Route::current()->parameter('video') == 'quan-ly-cham-cong' ? 'bg-white text-orange-400' : ' text-gray-400' }} hover:bg-white rounded-md lg:rounded-full hover:text-orange-400">
                            <span>Quản lý chấm công</span>
                        </a>
                        <a href="{{ route('gn24.videos.index', 'ung-dung-dinh-vi-cham-cong') }}"
                            class="w-max py-2 px-4 cursor-pointer block text-center {{ \Route::current()->parameter('video') == 'ung-dung-dinh-vi-cham-cong' ? 'bg-white text-orange-400' : ' text-gray-400' }} hover:bg-white rounded-md lg:rounded-full hover:text-orange-400">
                            <span>Ứng dụng định vị chấm công</span>
                        </a>
                        <a href="{{ route('gn24.videos.index', 'quan-ly-tai-lieu') }}"
                            class="w-max py-2 px-4 cursor-pointer block text-center {{ \Route::current()->parameter('video') == 'quan-ly-tai-lieu' ? 'bg-white text-orange-400' : ' text-gray-400' }} hover:bg-white rounded-md lg:rounded-full hover:text-orange-400">
                            <span>Quản lý tài liệu</span>
                        </a>
                        <a href="{{ route('gn24.videos.index', 'quan-ly-cong-viec') }}"
                            class="w-max py-2 px-4 cursor-pointer block text-center {{ \Route::current()->parameter('video') == 'quan-ly-cong-viec' ? 'bg-white text-orange-400' : ' text-gray-400' }} hover:bg-white rounded-md lg:rounded-full hover:text-orange-400">
                            <span>Quản lý công việc</span>
                        </a>
                        <a href="{{ route('gn24.videos.index', 'quan-ly-quy-trinh') }}"
                            class="w-max py-2 px-4 cursor-pointer block text-center {{ \Route::current()->parameter('video') == 'quan-ly-quy-trinh' ? 'bg-white text-orange-400' : ' text-gray-400' }} hover:bg-white rounded-md lg:rounded-full hover:text-orange-400">
                            <span>Quản lý quy trình</span>
                        </a>
                    </div>
                </div>
                {{-- <div class="w-full lg:hidden block fixed top-16 bg-white/[.9] z-10 right-0">
                <div id="click-show-list"
                    class="text-center border rounded-2xl w-11/12 mx-auto my-2 py-2 bg-gray-100 hover:bg-white">
                    Danh sách hướng dẫn
                </div>
                <div id="list-url" class="hidden w-11/12 bg-white mx-auto rounded-xl mt-3 border border-t-0">
                    <a href="{{ route('gn24.videos.index', 'tong-quan') }}"
                        class="py-2 px-4 cursor-pointer block {{ \Route::current()->parameter('video') == 'tong-quan' ? 'bg-orange-400 text-white' : '' }} hover:bg-orange-400 rounded hover:text-white">
                        <span>Tổng quan</span>
                    </a>
                    <a href="{{ route('gn24.videos.index', 'quan-ly-cham-cong') }}"
                        class="py-2 px-4 cursor-pointer block {{ \Route::current()->parameter('video') == 'quan-ly-cham-cong' ? 'bg-orange-400 text-white' : '' }} hover:bg-orange-400 rounded hover:text-white">
                        <span>Quản lý chấm công</span>
                    </a>
                    <a href="{{ route('gn24.videos.index', 'ung-dung-dinh-vi-cham-cong') }}"
                        class="py-2 px-4 cursor-pointer block {{ \Route::current()->parameter('video') == 'ung-dung-dinh-vi-cham-cong' ? 'bg-orange-400 text-white' : '' }} hover:bg-orange-400 rounded hover:text-white">
                        <span>Ứng dụng định vị chấm công</span>
                    </a>
                    <a href="{{ route('gn24.videos.index', 'quan-ly-tai-lieu') }}"
                        class="py-2 px-4 cursor-pointer block {{ \Route::current()->parameter('video') == 'quan-ly-tai-lieu' ? 'bg-orange-400 text-white' : '' }} hover:bg-orange-400 rounded hover:text-white">
                        <span>Quản lý tài liệu</span>
                    </a>
                    <a href="{{ route('gn24.videos.index', 'quan-ly-cong-viec') }}"
                        class="py-2 px-4 cursor-pointer block {{ \Route::current()->parameter('video') == 'quan-ly-cong-viec' ? 'bg-orange-400 text-white' : '' }} hover:bg-orange-400 rounded hover:text-white">
                        <span>Quản lý công việc</span>
                    </a>
                    <a href="{{ route('gn24.videos.index', 'form-nhap-lieu') }}"
                        class="py-2 px-4 cursor-pointer block {{ \Route::current()->parameter('video') == 'form-nhap-lieu' ? 'bg-orange-400 text-white' : '' }} hover:bg-orange-400 rounded hover:text-white">
                        <span>Form nhập liệu</span>
                    </a>
                </div>
            </div> --}}
                {{-- <div class="w-3/4 hidden">
            <p class="text-center text-2xl">Chưa có video nào.</p>
        </div> --}}
                <div class="grid 2xl:grid-cols-4 lg:grid-cols-3 grid-cols-2 gap-4 md:gap-10 w-full">
                    @if (
                        \Route::current()->parameter('video') == 'quan-ly-cham-cong' ||
                            \Route::current()->parameter('video') == 'tong-quan')
                        <a class="flex flex-col mb-5 cursor-pointer" onclick="Modal_Video_Function(true,this)">
                            <video src="{{ asset('gn24-v2/video-img/all/dang_ky.mp4') }}"
                                class="rounded-md lg:rounded-xl w-full aspect-video border border-gray-300"></video>
                            <h1 class="font-bold mt-2 text-sm md:text-base">
                                Hướng dẫn đăng ký tài khoản (tập 1)
                            </h1>
                            <p class="text-gray-600 text-xs md:text-sm">Tổng quan</p>
                        </a>
                        <a class="flex flex-col mb-5 cursor-pointer" onclick="Modal_Video_Function(true,this)">
                            <video src="{{ asset('gn24-v2/video-img/all/quanly_quyentruycap_tap2.mp4') }}"
                                class="rounded-md lg:rounded-xl w-full aspect-video border border-gray-300"></video>
                            <h1 class="font-bold mt-2 text-sm md:text-base">
                                Quản lý quyền truy cập (tập 2)
                            </h1>
                            <p class="text-gray-600 text-xs md:text-sm">Tổng quan</p>
                        </a>
                        <a class="flex flex-col mb-5 cursor-pointer" onclick="Modal_Video_Function(true,this)">
                            <video src="{{ asset('gn24-v2/video-img/all/tao_thumuc_tap3.mp4') }}"
                                class="rounded-md lg:rounded-xl w-full aspect-video border border-gray-300"></video>
                            <h1 class="font-bold mt-2 text-sm md:text-base">
                                Tạo thư mục (tập 3)
                            </h1>
                            <p class="text-gray-600 text-xs md:text-sm">Tổng quan</p>
                        </a>
                        <a class="flex flex-col mb-5 cursor-pointer" onclick="Modal_Video_Function(true,this)">
                            <video src="{{ asset('gn24-v2/video-img/all/upload_tailieu_tap1.mp4') }}"
                                class="rounded-md lg:rounded-xl w-full aspect-video border border-gray-300"></video>
                            <h1 class="font-bold mt-2 text-sm md:text-base">
                                Upload tài liệu (tập 4)
                            </h1>
                            <p class="text-gray-600 text-xs md:text-sm">Tổng quan</p>
                        </a>
                    @endif
                </div>
        </main>
    </div>
@endsection
