@extends('gn24-v2.layouts.app')
@section('title', 'Bảng giá')
@section('content')
    <section>
        <main>
            <div class="w-full bg-cover bg-no-repeat h-auto py-10 lg:py-0 flex items-center min-h-[calc(100vh-88px-96px)]"
                style="background-image: url({{ asset('gn24-v2/img/333.png') }});">
                <div class="lg:w-full w-11/12 mx-auto">
                    <div class="flex md:flex-row flex-col items-center justify-center lg:gap-16 gap-5">
                        <div class="flex flex-col items-center gap-10 lg:w-1/4 md:w-1/2">
                            <div class="bg-white rounded-2xl py-5 w-full px-5 text-center">
                                <p class="lg:text-2xl text-lg text-orange-500 font-bold text-center">Ứng dụng <br> Định vị chấm
                                    công</p>
                                <div class="flex items-center gap-10 w-11/12 mx-auto pt-5">
                                    <div class="flex flex-col items-center gap-5">
                                        <img class="w-1/2" src="{{ asset('gn24-v2/app-download-img/qr-left.png') }}"
                                            alt="">
                                        <p class="text-orange-500 lg:text-base text-sm">Quét mã để tải ứng dụng</p>
                                    </div>
                                    <img class="w-1/3" src="{{ asset('gn24-v2/app-download-img/phone-left.png') }}"
                                        alt="">
                                </div>
                                <p class="py-5 text-orange-500 lg:text-base text-sm">HOẶC</p>
                                <h1 class="w-full text-2xl font-bold text-center mb-5">
                                    Tải ứng dụng
                                </h1>
                                <div class="w-full flex md:flex-row flex-col items-center gap-10">
                                    <a class="w-8/12" href="https://testflight.apple.com/join/NJq3DQck">
                                        <img class="rounded-lg border border-white"
                                        src="{{ asset('gn24-v2/img/app-store.png') }}" alt="">
                                    </a>
                                    <a class="w-8/12" href="{{ asset('gn24-v2/app-download/dvcc.apk') }}">
                                        <img class="rounded-lg border border-white"
                                            src="{{ asset('gn24-v2/img/google-play.png') }}" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col items-center gap-10 lg:w-1/4 md:w-1/2">
                            <div class="bg-white rounded-2xl py-5 w-full px-5 text-center">
                                <p class="lg:text-2xl text-lg text-orange-500 font-bold ">Ứng dụng <br> Quản lý tài liệu</p>
                                <div class="flex items-center gap-10 w-11/12 mx-auto pt-5">
                                    <div class="flex flex-col items-center gap-5">
                                        <img class="w-1/2" src="{{ asset('gn24-v2/app-download-img/qr-right.png') }}"
                                            alt="">
                                        <p class=" text-orange-500 lg:text-base text-sm">Quét mã để tải ứng dụng</p>
                                    </div>
                                    <img class="w-1/3" src="{{ asset('gn24-v2/app-download-img/phone-right.png') }}"
                                        alt="">
                                </div>
                                <p class="py-5 text-orange-500 lg:text-base text-sm">HOẶC</p>
                                <h1 class="w-full text-2xl font-bold text-center mb-5">
                                    Tải ứng dụng:
                                </h1>
                                <div class="w-full flex md:flex-row flex-col items-center gap-10">
                                    <a class="w-8/12" href="#">
                                        <img class="rounded-lg border border-white"
                                        src="{{ asset('gn24-v2/img/app-store.png') }}" alt="">
                                    </a>
                                    <a class="w-8/12" href="#">
                                        <img class="rounded-lg border border-white"
                                            src="{{ asset('gn24-v2/img/google-play.png') }}" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </section>
@endsection
