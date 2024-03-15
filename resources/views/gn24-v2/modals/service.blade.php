@auth
    <?php
    $productType = Auth::user()->product_type;
    ?>
    <div id="modal_change_service" class="w-screen h-screen fixed top-0 left-0 z-[100] bg-black bg-opacity-30 hidden">
        <div class="w-full h-full relative flex justify-center items-start lg:items-center pt-8 lg:pt-0">
            <div class="backdrop w-full h-full absolute z-10" onclick="ChangeService_Function(false)"></div>
            <div class="w-11/12 2xl:w-8/12 bg-gray-100 shadow-2xl rounded-3xl z-20 px-5 py-5 relative">
                <form action="{{ route('profile.changePlan') }}" method="POST"
                    class="w-full max-h-[calc(100vh-4rem-2rem)] lg:max-h-[70vh] overflow-auto">
                    @csrf
                    <div class="w-full mx-auto flex flex-wrap justify-center gap-x-10 mt-10">
                        <label for="free_radio" id="free_product"
                            class="bg-white py-4 px-4 w-full md:w-2/5 lg:w-72 2xl:w-80 rounded-xl flex flex-col gap-4 items-center transition-all duration-300 delay-75 ease-in-out shadow-lg relative cursor-pointer {{ $productType == 'FREE' ? 'scale-105' : '' }}">
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
                            <div class="w-full flex-1 text-xs p-4 rounded-lg">
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
                            <input type="radio" name="product_type" value="FREE" id="free_radio"
                                {{ $productType == 'FREE' ? 'checked' : '' }} class="hidden">
                        </label>
                        <label for="premium_radio" id="premium_product"
                            class="bg-white py-4 px-4 w-full md:w-2/5 lg:w-72 2xl:w-80 rounded-xl flex flex-col gap-4 items-center transition-all duration-300 delay-75 ease-in-out shadow-lg relative cursor-pointer {{ $productType == 'PREMIUM' ? 'scale-105' : '' }}">
                            <h1 class="text-xl font-bold">
                                Doanh nghiệp
                            </h1>
                            <div class="w-10/12 h-20 text-center flex gap-2 flex-col items-center justify-center">
                                <h1 class='font-bold text-orange-400 text-2xl'>
                                    5.000.000đ
                                </h1>
                                <div
                                    class="w-full overflow-hidden px-5 py-2 text-sm flex justify-center items-center gap-2 rounded bg-orange-400 relative before:absolute before:top-0 before:left-0 before:h-full before:aspect-square before:bg-white before:rotate-45 before:-translate-x-2/3 after:absolute after:top-0 after:right-0 after:h-full after:aspect-square after:bg-white after:rotate-45 after:translate-x-2/3">
                                    <img src="{{ asset('gn24-v2/img-3/icon/crown.png') }}" alt="" class="w-4">
                                    <p class="text-white">
                                        Khuyên dùng
                                    </p>
                                    <img src="{{ asset('gn24-v2/img-3/icon/crown.png') }}" alt="" class="w-4">
                                </div>
                            </div>
                            <div class="w-full flex-1 text-xs p-4 rounded-lg">
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
                                        <span>Cài đặt PM tại máy chủ <span class="text-red-500 font-bold">Quốc
                                                tế</span></span>
                                    </li>
                                    <li class="ps-6">
                                        <i class="fa-solid fa-plus text-orange-500 me-2"></i>
                                        <span>Theo yêu cầu của <span class="text-red-500 font-bold">Doanh
                                                nghiệp</span></span>
                                    </li>
                                </ul>
                            </div>
                            <input type="radio" name="product_type" value="PREMIUM" id="premium_radio"
                                {{ $productType == 'PREMIUM' ? 'checked' : '' }} class="hidden">
                        </label>
                        <label for="standard_radio" id="standard_product"
                            class="bg-white py-4 px-4 w-full md:w-2/5 lg:w-72 2xl:w-80 rounded-xl flex flex-col gap-4 items-center transition-all duration-300 delay-75 ease-in-out shadow-lg relative cursor-pointer {{ $productType == 'STANDARD' ? 'scale-105' : '' }}">
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
                            <div class="w-full flex-1 text-xs p-4 rounded-lg">
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
                                            Ký quỹ, Công nợ, ...
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
                            <input type="radio" name="product_type" value="STANDARD" id="standard_radio"
                                {{ $productType == 'STANDARD' ? 'checked' : '' }} class="hidden">
                        </label>
                    </div>
                    <div class="w-full text-center mt-10" onclick="ChangeService_Function(false)">
                        <button type="submit" class="w-max mx-auto px-16 py-2 rounded-full bg-orange-400 text-white">
                            Đồng ý
                        </button>
                    </div>
                </form>
                <button type="button"
                    class="w-10 h-10 flex justify-center items-center text-3xl text-white bg-red-400 cursor-pointer absolute rounded-full top-0 right-0 translate-x-1/2 -translate-y-1/2">
                    <i class="fas fa-times" onclick="ChangeService_Function(false)"></i>
                </button>
            </div>
        </div>
    </div>
@endauth
