@extends('gn24-v2.layouts.app')
@section('title', 'Đăng nhập')
@section('content')
    <section class="h-screen w-full">
        <div class="">
            <div class="h-52 bg-gradient-to-r from-orange-400 to-orange-300">
            </div>
            <div class="lg:w-7/12 md:w-9/12 w-11/12 h-52 mx-auto">
                <div class="w-full -translate-y-16 bg-white h-auto shadow-2xl rounded-lg py-8">
                    <p class="text-gray-600 text-center md:text-2xl text-lg font-bold pb-5">Vui lòng kiểm tra hòm thư điện tử
                    </p>
                    <p class="text-center md:text-base text-sm text-gray-600"><span class="block">Cảm ơn Quý khách đã đăng
                            ký và trở
                            thành một thành viên của WeOS<sup>®</sup>!</span>
                        Trước khi bắt đầu,
                        chúng tôi đã gửi cho Quý khách một email xác thực đến <span
                            class="text-orange-400 block hover:cursor-pointer hover:text-orange-600 hover:font-bold">{{ Auth::user()->email }}</span>.
                        Quý khách
                        hãy kiểm
                        tra hòm thư và làm theo hướng dẫn để hoàn tất đăng ký. <span class="block">Nếu Quý khách không tìm
                            thấy email, vui
                            lòng
                            nhấn nút gửi lại dưới đây.</span></p>
                    @if (session('status') == 'verification-link-sent')
                        <div class="mb-4 font-medium text-sm text-orange-400">
                            {{ __('Một liên kết xác minh mới đã được gửi đến địa chỉ email bạn đã cung cấp khi đăng ký.') }}
                        </div>
                    @endif
                    <form method="POST" action="{{ route('verification.send') }}" class="space-y-6">
                        @csrf
                        <div class="text-center">
                            <x-primary-button>
                                {{ __('Gửi lại email xác thực') }}
                            </x-primary-button>
                        </div>
                    </form>
                    <form method="POST" class="pt-10" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit"
                            class="ps-10 underline text-base text-orange-400 hover:text-orange-600 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-300">
                            {{ __('Đăng xuất') }}
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
