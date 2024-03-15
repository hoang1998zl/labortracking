<div id="modal_khampha" class="w-screen h-screen fixed top-0 left-0 z-[100] bg-black bg-opacity-30 hidden">
    <div class="w-full h-full relative flex justify-center items-center">
        <div class="backdrop w-full h-full absolute z-10" onclick="Modal_Khampha_Function(false)"></div>
        <div class="w-10/12 md:w-[250px] bg-white shadow-2xl rounded-lg z-20 py-2 relative">
            <div class="w-full max-h-[70vh] overflow-auto">
                <h1 class="uppercase font-bold text-lg text-orange-400 mt-2 text-center">
                    Đăng nhập
                </h1>
                <div class="w-full px-4 lg:px-6 my-2">
                    <a href="{{ url('/auth/redirect/google') }}"
                        class="w-full px-2 py-1.5 bg-white border border-gray-300 rounded focus:outline-none flex justify-center items-center">
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
                        <span class="text-sm ps-2">với tài khoản Google</span>
                    </a>
                </div>
                <a class="w-full px-4 lg:px-6 flex items-center gap-x-2 py-2 border-t border-gray-300 focus:outline-none cursor-pointer"
                    onclick="Modal_Login_Function(true)">
                    <i class="fa-solid fa-right text-xl border border-black pe-2 rounded"></i>
                    <span>Đăng nhập</span>
                </a>
                <a class="w-full px-4 lg:px-6 flex items-center gap-x-2 py-2 border-t border-gray-300 focus:outline-none cursor-pointer"
                    onclick="Modal_Register_Function(true)">
                    <i class="fa-solid fa-plus text-xl border border-black px-1 rounded"></i>
                    <span>Đăng ký tài khoản</span>
                </a>
            </div>
        </div>
    </div>
</div>
