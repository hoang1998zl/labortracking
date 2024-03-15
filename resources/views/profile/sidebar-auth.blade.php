<div class="p-4 lg:p-0 lg:w-60 mx-auto">
    <div
        class="w-full lg:min-h-screen max-h-screen sticky lg:z-20 lg:top-0 lg:left-0 lg:shadow my-4 lg:my-0 bg-white flex flex-col rounded-lg lg:rounded-t-none ps-4">
        <a href="{{ route('gn24.videos.index', 'tong-quan') }}"
            class="w-full h-14 lg:h-20 flex items-center text-lg lg:text-xl font-bold uppercase text-orange-400 text-left">
            Hướng dẫn
        </a>
        <div class="w-full lg:h-[calc(100vh-5rem-5rem)] pe-4 mb-4 lg:mb-0 overflow-y-auto hidden-scrollbar">
            <div class="w-max lg:w-full flex flex-row gap-5 lg:flex-col lg:items-center overflow-x-auto">
                <a class="w-40 lg:w-full flex flex-col cursor-pointer" onclick="Modal_Video_Function(true,this)">
                    <video src="{{ asset('gn24-v2/video-img/all/dang_ky.mp4') }}"
                        class="rounded-xl w-full aspect-video border border-gray-300"></video>
                    <h1 class="font-bold mt-2 text-sm">
                        Hướng dẫn đăng ký tài khoản (tập 1)
                    </h1>
                    <p class="text-gray-600 text-xs md:text-sm">Tổng quan</p>
                </a>
                <a class="w-40 lg:w-full flex flex-col cursor-pointer" onclick="Modal_Video_Function(true,this)">
                    <video src="{{ asset('gn24-v2/video-img/all/quanly_quyentruycap_tap2.mp4') }}"
                        class="rounded-xl w-full aspect-video border border-gray-300"></video>
                    <h1 class="font-bold mt-2 text-sm">
                        Quản lý quyền truy cập (tập 2)
                    </h1>
                    <p class="text-gray-600 text-xs md:text-sm">Tổng quan</p>
                </a>
                <a class="w-40 lg:w-full flex flex-col cursor-pointer" onclick="Modal_Video_Function(true,this)">
                    <video src="{{ asset('gn24-v2/video-img/all/tao_thumuc_tap3.mp4') }}"
                        class="rounded-xl w-full aspect-video border border-gray-300"></video>
                    <h1 class="font-bold mt-2 text-sm">
                        Tạo thư mục (tập 3)
                    </h1>
                    <p class="text-gray-600 text-xs md:text-sm">Tổng quan</p>
                </a>
                <a class="w-40 lg:w-full flex flex-col cursor-pointer" onclick="Modal_Video_Function(true,this)">
                    <video src="{{ asset('gn24-v2/video-img/all/upload_tailieu_tap1.mp4') }}"
                        class="rounded-xl w-full aspect-video border border-gray-300"></video>
                    <h1 class="font-bold mt-2 text-sm">
                        Upload tài liệu (tập 4)
                    </h1>
                    <p class="text-gray-600 text-xs md:text-sm">Tổng quan</p>
                </a>
            </div>
        </div>
        <div class="w-full h-20 hidden lg:flex justify-center items-end pe-4 pb-3">
            <a href="{{ route('gn24.videos.index', 'tong-quan') }}"
                class="w-full text-center bg-orange-400 text-white py-1.5 rounded-full font-bold">
                Xem thêm
            </a>
        </div>
    </div>
</div>
