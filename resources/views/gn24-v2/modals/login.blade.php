<div id="modal_login" class="w-screen h-screen fixed top-0 left-0 z-[100] bg-black bg-opacity-30 hidden">
    <div class="w-full h-full relative flex justify-center items-start lg:items-center pt-4 lg:pt-0">
        <div class="backdrop w-full h-full absolute z-10" onclick="Modal_Login_Function(false)"></div>
        <div class="w-10/12 lg:w-[600px] bg-white shadow-2xl rounded-3xl z-20 px-5 py-5 relative">
            <h1 class="w-full border-b py-2 font-bold">
                Đăng nhập để tiếp tục
            </h1>
            <div class="w-full flex flex-col items-center justify-center py-5 max-h-[calc(100vh-7rem)] overflow-auto">
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
                        </svg>
                        <span class="md:block hidden ps-2">với tài khoản Google</span>
                    </a>
                </div>
                <p class="font-bold text-center text-sm md:text-base text-gray-600">hoặc đăng nhập bằng tài khoản
                </p>
                <form method="POST" action="{{ route('login') }}" class="w-full space-y-4 mt-4 login-form">
                    @csrf
                    <div>
                        <input type="email" name="email" id="email"
                            class="bg-gray-50 border border-gray-300 focus:border-orange-400 focus:ring-orange-400 text-gray-700 text-sm md:text-lg rounded-lg block w-full px-4 py-1.5"
                            placeholder="Tài khoản">
                    </div>
                    <div>
                        <input type="password" name="password" placeholder="Mật khẩu"
                            class="bg-gray-50 border border-gray-300 focus:border-orange-400 focus:ring-orange-400 text-gray-700 text-sm md:text-lg rounded-lg block w-full px-4 py-1.5">
                    </div>
                    <div class="flex justify-end">
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}"
                                class="md:text-base text-xs text-orange-400 hover:underline ">Quên mật
                                khẩu?</a>
                        @endif
                    </div>
                    <hr />
                    <div class="w-full flex flex-col md:flex-row gap-4 justify-between items-center">
                        <p>
                            Chưa có tài khoản? <button type="button" onclick="Change_Login_To_Register_Function()"
                                class="text-orange-400 hover:underline">Đăng ký</button>
                        </p>
                        <div class="w-full flex-1 flex gap-4 justify-end items-center">
                            <button type="button" onclick="Modal_Login_Function(false)"
                                class="w-full md:w-max bg-slate-100 hover:bg-slate-200 font-medium rounded text-sm md:text-base px-4 py-1.5">
                                Hủy
                            </button>
                            <button type="submit"
                                class="w-full md:w-max text-white bg-orange-400 hover:bg-orange-600 font-medium rounded text-sm md:text-base px-4 py-1.5">
                                Đăng nhập
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
