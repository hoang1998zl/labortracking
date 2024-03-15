@extends('gn24-v2.layouts.app')
@section('title', 'Đăng nhập')
@section('login')
    <section class="">
        <div class="h-36 bg-gradient-to-r from-orange-400 to-orange-300">
        </div>
        <div class="-translate-y-16 bg-white lg:w-5/12 w-11/12 shadow-2xl rounded-2xl mx-auto lg:py-10 py-5">
            <div class="w-9/12 mx-auto">
                <p class="text-gray-500 text-center md:text-2xl text-lg font-bold">Đăng nhập</p>
                <div class="flex w-full justify-center gap-5 py-5">
                    <a href="{{ url('/auth/redirect/google') }}"
                        class="flex items-center border hover:border-orange-400 text-gray-700 rounded-lg py-3 px-3">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="25px" height="25px"
                            fill="#fbc02d">
                            <path fill="#fbc02d"
                                d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12	s5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24s8.955,20,20,20	s20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z" />
                            <path fill="#e53935"
                                d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039	l5.657-5.657C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z" />
                            <path fill="#4caf50"
                                d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36	c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z" />
                            <path fill="#1565c0"
                                d="M43.611,20.083L43.595,20L42,20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571	c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z" />
                        </svg><span class="md:block hidden ps-2">với tài khoản Google</span>
                    </a>
                </div>
                <p class="font-bold text-center md:text-xl text-sm text-gray-600">hoặc đăng nhập bằng email</p>
                <form method="POST" action="{{ route('login') }}" class="space-y-6 login-form">
                    @csrf
                    <div>
                        <input type="email" name="email" id="email"
                            class="bg-gray-50 border border-gray-300 focus:border-orange-400 focus:ring-orange-400 text-gray-700 text-sm md:text-lg rounded-lg block w-full p-3"
                            placeholder="Tài khoản">
                    </div>
                    <div>
                        <input type="password" name="password" placeholder="Mật khẩu"
                            class="bg-gray-50 border border-gray-300 focus:border-orange-400 focus:ring-orange-400 text-gray-700 text-sm md:text-lg rounded-lg block w-full p-3">
                    </div>
                    <div class="flex justify-between md:mx-5 mx-1">
                        <div class="flex items-start">
                            <div class="flex items-center h-5">
                                <input id="remember_me" name="remember" type="checkbox" value=""
                                    class="w-4 h-4 border rounded bg-gray-50 focus:ring-3 text-orange-400 border-orange-400 ">
                            </div>
                            <label for="remember_me" class="ml-2 md:text-base text-xs font-medium text-orange-400">Ghi nhớ
                                tài
                                khoản</label>
                        </div>
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}"
                                class="md:text-base text-xs text-orange-400 hover:underline ">Quên mật
                                khẩu?</a>
                        @endif
                    </div>
                    <div class="text-center">
                        <button type="submit"
                            class="w-6/12 text-white bg-orange-400 hover:bg-orange-600 font-medium rounded-lg text-sm md:text-xl px-5 py-2.5">Đăng
                            nhập</button>
                    </div>
                    {{-- <div class="text-sm font-medium text-gray-500 ">Chưa có tài khoản? <a href="{{ route('register') }}"
                            class=" hover:underline hover:text-orange-400 ">Đăng
                            ký</a> --}}
            </div>
            </form>
        </div>
        </div>
    </section>
@endsection
@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"></script>
    <script type="module" src="{{ asset('gn24-v2/js/validator/index.js') }}"></script>
    <script type="module" src="{{ asset('gn24-v2/js/validator/loginValidate.js') }}"></script>
@endsection
