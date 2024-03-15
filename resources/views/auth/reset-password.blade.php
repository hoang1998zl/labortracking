@extends('gn24-v2.layouts.app')
@section('title', 'Reset mật khẩu')
@section('content')
    <section class="h-screen w-full">
        <div class="h-52 bg-gradient-to-r from-orange-400 to-orange-300">
        </div>
        <div class="-translate-y-16 bg-white lg:w-5/12 w-11/12 shadow-2xl rounded-2xl mx-auto lg:py-10 py-5">
            <div class="w-9/12 mx-auto">
                <p class="text-gray-500 text-center md:text-2xl text-lg font-bold pb-5">Cấp lại mật khẩu</p>
                <p class="text-gray-500 text-center text-sm font-bold pb-5">Vui lòng nhập các thông tin bên dưới, chúng tôi
                    sẽ tiến hành cấp lại mật khẩu cho Quý khách. Xin cảm ơn.</p>
                <form method="POST" action="{{ route('verification.send') }}" class="space-y-6">
                    @csrf
                    <!-- Password Reset Token -->
                    <input type="hidden" name="token" value="{{ $request->route('token') }}">

                    <!-- Email Address -->
                    <div>
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                            :value="old('email', $request->email)" required autofocus autocomplete="username" />
                    </div>

                    <!-- Password -->
                    <div class="mt-4">
                        <x-input-label for="password" :value="__('Mật khẩu mới')" />
                        <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                            autocomplete="new-password" />
                    </div>

                    <!-- Confirm Password -->
                    <div class="mt-4">
                        <x-input-label for="password_confirmation" :value="__('Xác nhận mật khẩu mới')" />

                        <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                            name="password_confirmation" required autocomplete="new-password" />
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <x-primary-button>
                            {{ __('Reset mật khẩu') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"></script>
    <script type="module" src="{{ asset('gn24-v2/js/validator/index.js') }}"></script>
    <script type="module" src="{{ asset('gn24-v2/js/validator/passwordValidate.js') }}"></script>
@endsection
