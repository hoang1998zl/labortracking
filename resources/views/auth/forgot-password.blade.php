@extends('gn24-v2.layouts.app')
@section('title', 'Lấy lại mật khẩu')
@section('content')
    <section class="h-screen w-full">
        <div class="h-52 bg-gradient-to-r from-orange-400 to-orange-300">
        </div>
        <div class="bg-white -translate-y-16 lg:w-5/12 w-11/12 shadow-2xl rounded-2xl mx-auto lg:py-16 py-8 px-5">
            <p class="text-gray-500 text-center md:text-2xl text-lg font-bold">Lấy lại mật khẩu</p>
            <p class="text-gray-500 mb-5 text-center md:text-base text-sm">Hãy nhập email đã đăng ký của Quý khách, chúng
                tôi sẽ gửi cho
                Quý
                khách một email để cấp lại mật khẩu.</p>
            <form method="POST" action="{{ route('password.email') }}" class="forgot-password-form">
                @csrf
                <div class="md:w-9/12 w-10/12 mx-auto">
                    <div class="mb-3 md:mb-6">
                        <input type="email"
                            class="shadow-sm w-full bg-gray-50 border border-gray-200 text-gray-900 md:text-lg text-sm rounded-lg focus:ring-orange-400 focus:border-orange-400 block p-2.5"
                            placeholder="Nhập email của bạn" name="email">
                    </div>
                </div>
                <div class="text-center pt-5">
                    <button type="submit"
                        class="text-white bg-orange-400 hover:bg-orange-600 focus:ring-4 focus:outline-none focus:ring-orange-500 font-medium rounded-lg text-sm px-5 py-2.5 px-auto">Gửi</button>
                </div>
            </form>
        </div>
    </section>
@endsection
@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"></script>
    <script type="module" src="{{ asset('gn24-v2/js/validator/index.js') }}"></script>
    <script type="module" src="{{ asset('gn24-v2/js/validator/forgotPasswordValidate.js') }}"></script>
@endsection
