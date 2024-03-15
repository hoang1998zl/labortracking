<div id="modal_appdownload" class="w-screen h-screen fixed top-0 left-0 z-[100] bg-black bg-opacity-30 hidden">
    <div class="w-full h-full relative flex justify-center items-start lg:items-center pt-4 lg:pt-0">
        <div class="backdrop w-full h-full absolute z-10" onclick="Modal_App_Function(false)"></div>
        <div class="w-10/12 md:w-1/2 lg:min-w-[450px] bg-white shadow-2xl rounded-3xl z-20 px-5 py-5 lg:p-10 relative">
            <div class="w-full max-h-[70vh] overflow-auto">
                <div class="w-full mx-auto relative">
                    <button id="change_app_detail-btn"
                        class="w-full px-4 py-2 mx-auto flex text-center justify-center items-center gap-2 text-orange-400 text-xl relative">
                        <span class="flex flex-col lg:flex-row gap-1">
                            <span>Tải ứng dụng</span>
                            <span>
                                <span id="change_app_detail-content-QLTL" class="">Quản lý tài liệu</span>
                                <span id="change_app_detail-content-QLCC" class="hidden">Quản lý chấm công</span>
                            </span>
                        </span>
                        <i class="fa-solid fa-caret-down"></i>
                    </button>
                    <div id="change_app_detail-popup"
                        class="w-full py-2 absolute top-full right-0 bg-white rounded border z-50 hidden text-black">
                        <div id="change_app_detail-QLTL-btn"
                            class="w-full relative text-left px-4 py-2 rounded cursor-pointer hover:bg-orange-400 hover:text-white bg-orange-400 text-white">
                            Quản lý tài liệu
                        </div>
                        <div id="change_app_detail-QLCC-btn"
                            class="w-full relative text-left px-4 py-2 rounded cursor-pointer hover:bg-orange-400 hover:text-white">
                            Quản lý chấm công
                        </div>
                    </div>
                </div>
                <div id="change_app_detail-QLTL" class="w-full">
                    <div class="w-full grid grid-cols-1 md:grid-cols-2 py-4 text-center">
                        <div class="w-full lg:h-full flex flex-col justify-center items-center gap-4 px-4 text-center">
                            <p>
                                Đăng nhập bằng Trình duyệt
                            </p>
                            <img src="{{ asset('gn24-v2/img-3/icon/qltl_qrcode.png') }}" alt=""
                                class="w-1/2 lg:w-1/3">
                            <a href="https://file.weos.vn/"
                                class="text-blue-600 px-2 py-1.5 rounded border-2 border-gray-300 text-left">
                                https://file.weos.vn/
                            </a>
                        </div>
                        <div
                            class="w-full flex flex-col items-center gap-4 px-4 text-center lg:border-s-2 border-gray-300">
                            <p>
                                Quét mã ngay để tải ứng dụng
                            </p>
                            <img src="{{ asset('gn24-v2/img-3/icon/qr-code.jpg') }}" alt=""
                                class="w-1/2 lg:w-1/3">
                            <p>
                                Hoặc kiểm tra trong <br /> các cửa hàng ứng dụng
                            </p>
                            <div class="w-full grid grid-cols-2 gap-4">
                                <a href="https://testflight.apple.com/join/NJq3DQck">
                                    <img src="{{ asset('gn24-v2/img/app-store.png') }}" alt=""
                                        class="h-full rounded-md border border-white">
                                </a>
                                <a href="{{ asset('gn24-v2/app-download/dvcc.apk') }}">
                                    <img src="{{ asset('gn24-v2/img/google-play.png') }}" alt=""
                                        class="h-full rounded-md border border-white">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="change_app_detail-QLCC"class="w-full hidden">
                    <div class="w-full grid grid-cols-1 md:grid-cols-2 py-4 text-center">
                        <div class="w-full lg:h-full flex flex-col justify-center items-center gap-4 px-4 text-center">
                            <p>
                                Đăng nhập bằng Trình duyệt
                            </p>
                            <img src="{{ asset('gn24-v2/img-3/icon/qlcc_qrcode.png') }}" alt=""
                                class="w-1/2 lg:w-1/3">
                            <a href="https://id.weos.vn/"
                                class="text-blue-600 px-2 py-1.5 rounded border-2 border-gray-300 text-left">
                                https://id.weos.vn/
                            </a>
                        </div>
                        <div
                            class="w-full flex flex-col items-center gap-4 px-4 text-center lg:border-s-2 border-gray-300">
                            <p>
                                Quét mã ngay để tải ứng dụng
                            </p>
                            <img src="{{ asset('gn24-v2/img-3/icon/qr-code.jpg') }}" alt=""
                                class="w-1/2 lg:w-1/3">
                            <p>
                                Hoặc kiểm tra trong <br /> các cửa hàng ứng dụng
                            </p>
                            <div class="w-full grid grid-cols-2 gap-4">
                                <a href="https://testflight.apple.com/join/NJq3DQck">
                                    <img src="{{ asset('gn24-v2/img/app-store.png') }}" alt=""
                                        class="w-full rounded-md border border-white" />
                                </a>
                                <a href="{{ asset('gn24-v2/app-download/dvcc.apk') }}">
                                    <img src="{{ asset('gn24-v2/img/google-play.png') }}" alt=""
                                        class="w-full rounded-md border border-white" />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
