@extends('gn24-v2.layouts.app')
@section('title', 'Trang chủ')
@section('content')
    <main id="indexmain" class="w-full bg-slate-50 flex flex-col gap-10">
        <div
            class="w-full bg-gradient-to-b from-[#ff9450] from-0% via-white via-10% md:via-20% lg:via-25% to-[#eceff8] to-100% pb-0 lg:pb-20 px-4">

            <div id="map" class="w-full mt-4 lg:mt-0 px-4 flex justify-center items-center lg:-translate-y-10">
                <div class="w-0 lg:w-40 h-0"></div>
                <div class="w-full flex-1 h-60 md:h-[70vh] rounded-lg border-2 border-orange-400 overflow-hidden bg-white"></div>
                <div class="w-0 lg:w-40 h-0"></div>
            </div>

            <div id="indexfeature" class="w-full flex flex-col lg:flex-row items-center overflow-hidden">
                <div class="w-full mt-8 lg:mt-0 max-w-lg mx-auto flex flex-col gap-4 items-center justify-center">
                    <div class="w-full flex justify-center items-center">
                        <h1 class="text-xl uppercase text-center font-bold"
                            style="font-size:clamp(0.8rem, 1.25rem, 1.5rem)">
                            Đa dạng sản phẩm với nhiều tính năng
                        </h1>
                    </div>
                    <div class="w-full relative">
                        <div class="h-1/2 aspect-square bg-orange-400 z-0 absolute -top-3 -left-3"></div>
                        <div class="w-full bg-orange-200 p-4 rounded relative z-10 text-sm">
                            <p>
                                Ngoài ra, với mong muốn mọi đáp ứng nhu cầu từ doanh nghiệp chúng tôi nhận tư vấn thiết kế
                                phần
                                mềm, website, ứng dụng theo mong muốn của doanh nghiệp.
                            </p>
                        </div>
                        <div class="h-1/2 aspect-square bg-orange-400 z-0 absolute -bottom-3 -right-3"></div>
                    </div>
                </div>
                <div class="indexfeature_wrapper block mx-auto aspect-square relative">
                    <div></div>
                    <div></div>
                    <div></div>
                    <img class="w-full" src={{ asset('gn24-v2/img-3/icon/laptop2.png') }} alt="" />
                    <div class="spinner text-center text-[0.5rem] md:text-base">
                        <div class="relative w-full h-full">
                            <div class="item">
                                <div class="item-image">
                                    <div class="relative">
                                        <img src="{{ asset('gn24-v2/img-3/icon/synchronize (2).png') }}" alt="">
                                    </div>
                                    <p>Quy trình<br />đa bước</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="item-image">
                                    <div class="relative">
                                        <img src="{{ asset('gn24-v2/img-3/icon/synchronize (2).png') }}" alt="">
                                    </div>
                                    <p>Quản lý<br />công việc</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="item-image">
                                    <div class="relative">
                                        <img src="{{ asset('gn24-v2/img-3/icon/chat (2).png') }}" alt="">
                                    </div>
                                    <p>Trò chuyện</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="item-image">
                                    <div class="relative">
                                        <img src="{{ asset('gn24-v2/img-3/icon/procedure (1).png') }}" alt="">
                                    </div>
                                    <p>Quản lý<br />chấm công</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="item-image">
                                    <div class="relative">
                                        <img src="{{ asset('gn24-v2/img-3/icon/synchronize (2).png') }}" alt="">
                                    </div>
                                    <p>Thu - chi</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="item-image">
                                    <div class="relative">
                                        <img src="{{ asset('gn24-v2/img-3/icon/synchronize (2).png') }}" alt="">
                                    </div>
                                    <p>Quản lý<br />tài liệu</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
