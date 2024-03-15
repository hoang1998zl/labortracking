<header class="w-full hidden lg:block fixed z-[99] top-0 left-0 border-b border-gray-200">
    <nav class="bg-white w-full">
        <div class="w-full h-16 bg-white flex items-center justify-between px-4 lg:px-10 relative">
            <a href="{{ route('gn24.index') }}" class="h-4/6 block focus:outline-none lg:w-40">
                <img src="{{ asset('gn24-v2/img-3/logo-labor-1.png') }}" alt="" class="h-full">
            </a>

            <div class="items-center justify-between hidden lg:flex w-auto">
                <ul class="w-full flex lg:flex-row lg:space-x-8">
                    <li>
                        <a href="{{ route('gn24.index') }}"
                            class="h-full flex flex-row lg:flex-col justify-start lg:justify-end px-4 py-1 lg:p-0 items-center hover:text-white lg:hover:text-orange-500 rounded lg:bg-transparent focus:outline-none {{ \Route::current()->getName() == 'gn24.index' ? 'lg:text-orange-400' : 'text-gray-600' }} lg:p-0">
                            <i class="fa-solid fa-house text-2xl"></i>
                            Trang chủ
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('gn24.index') }}/#indexpricing"
                            class="h-full flex flex-row lg:flex-col justify-start lg:justify-end px-4 py-1 lg:p-0 items-center hover:text-white lg:hover:text-orange-500 rounded lg:bg-transparent text-gray-600 focus:outline-none">
                            <i class="fa-regular fa-crown text-2xl"></i>
                            Nâng cấp
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('gn24.videos.index', 'tong-quan') }}"
                            class="h-full flex flex-row lg:flex-col justify-start lg:justify-end px-4 py-1 lg:p-0 items-center hover:text-white lg:hover:text-orange-500 rounded lg:bg-transparent focus:outline-none {{ \Route::current()->getName() == 'gn24.videos.index' || \Route::current()->getName() == 'gn24.videos.details' ? 'lg:text-orange-400' : 'text-gray-600' }} lg:p-0">
                            <i class="fa-regular fa-circle-play text-2xl"></i>
                            Hướng dẫn
                        </a>
                    </li>
                    <li>
                        <a class="h-full flex flex-row lg:flex-col justify-start lg:justify-end px-4 py-1 lg:p-0 items-center hover:text-white lg:hover:text-orange-500 rounded lg:bg-transparent text-gray-600 focus:outline-none cursor-pointer"
                            onclick="Modal_App_Function(true)">
                            <i class="fa-solid fa-qrcode text-2xl"></i>
                            Ứng dụng
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('gn24.contact') }}"
                            class="h-full flex flex-row lg:flex-col justify-start lg:justify-end px-4 py-1 lg:p-0 items-center hover:text-white lg:hover:text-orange-500 rounded lg:bg-transparent text-gray-600 focus:outline-none {{ \Route::current()->getName() == 'gn24.contact' ? 'lg:text-orange-400' : 'text-gray-600' }} lg:p-0">
                            <i class="fa-solid fa-headset text-2xl"></i>
                            Liên lạc
                        </a>
                    </li>
                </ul>
            </div>

            <div class="relative">
                <button id="dropdown_menu_button"
                    class="w-12 h-12 border border-orange-400 lg:w-40 py-2 lg:bg-orange-400 lg:hover:bg-orange-500 text-white rounded lg:rounded-full focus:outline-none">
                    <span class="hidden lg:block">
                        Khám phá
                    </span>
                    <i class="fa-solid fa-bars text-2xl text-orange-400 lg:hidden"></i>
                </button>
                <div id="dropdown_menu"
                    class="w-60 h-[calc(100vh-4rem)] lg:h-auto border-t overflow-y-auto lg:overflow-[unset] fixed lg:absolute top-16 lg:top-[calc(100%+1.5rem)] left-0 lg:left-[unset] lg:right-0 bg-white shadow-md rounded-lg -translate-x-full lg:translate-x-0 lg:hidden transition-all duration-300 delay-75 ease-linear">
                    <div class="w-full flex flex-col items-center">
                        <div class="w-full lg:hidden">
                            <ul class="w-full flex lg:flex-row flex-col lg:space-x-8">
                                <li>
                                    <a href="{{ route('gn24.index') }}"
                                        class="h-full flex flex-row lg:flex-col gap-x-2 justify-start lg:justify-end px-4 py-1 lg:p-0 items-center hover:text-white hover:bg-orange-400 lg:hover:text-orange-500 rounded lg:bg-transparent focus:outline-none {{ \Route::current()->getName() == 'gn24.index' ? 'lg:text-orange-400 text-white bg-orange-500' : 'text-gray-600' }} lg:p-0">
                                        <i class="fa-solid fa-house text-2xl"></i>
                                        <span class="pt-1">Trang chủ</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('gn24.index') }}/#indexpricing"
                                        class="h-full flex flex-row lg:flex-col gap-x-2 justify-start lg:justify-end px-4 py-1 lg:p-0 items-center hover:text-white hover:bg-orange-400 lg:hover:text-orange-500 rounded lg:bg-transparent text-gray-600 focus:outline-none"
                                        onclick="$('#dropdown_menu').addClass('-translate-x-full lg:translate-x-0 lg:hidden')">
                                        <i class="fa-regular fa-crown text-2xl"></i>
                                        <span class="pt-1">Nâng cấp</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('gn24.videos.index', 'tong-quan') }}"
                                        class="h-full flex flex-row lg:flex-col gap-x-2 justify-start lg:justify-end px-4 py-1 lg:p-0 items-center hover:text-white hover:bg-orange-400 lg:hover:text-orange-500 rounded lg:bg-transparent focus:outline-none {{ \Route::current()->getName() == 'gn24.videos.index' || \Route::current()->getName() == 'gn24.videos.details' ? 'lg:text-orange-400  text-white bg-orange-500' : 'text-gray-600' }} lg:p-0">
                                        <i class="fa-regular fa-circle-play text-2xl"></i>
                                        <span class="pt-1">Hướng dẫn</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="h-full flex flex-row lg:flex-col gap-x-2 justify-start lg:justify-end px-4 py-1 lg:p-0 items-center hover:text-white cursor-pointer hover:bg-orange-400 lg:hover:text-orange-500 rounded lg:bg-transparent text-gray-600 focus:outline-none"
                                        onclick="Modal_App_Function(true)">
                                        <i class="fa-solid fa-qrcode text-2xl"></i>
                                        <span class="pt-1">Ứng dụng</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('gn24.contact') }}"
                                        class="h-full flex flex-row lg:flex-col gap-x-2 justify-start lg:justify-end px-4 py-1 lg:p-0 items-center hover:text-white hover:bg-orange-400 lg:hover:text-orange-500 rounded lg:bg-transparent text-gray-600 focus:outline-none {{ \Route::current()->getName() == 'gn24.contact' ? 'lg:text-orange-400 text-white bg-orange-500' : 'text-gray-600' }} lg:p-0">
                                        <i class="fa-solid fa-headset text-2xl"></i>
                                        <span class="pt-1">Liên lạc</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <h1 class="uppercase font-bold text-lg text-orange-400 mt-2 hidden lg:block">
                            Đăng nhập
                        </h1>
                        <div class="w-full px-4 lg:px-6 my-2">
                            <a href="{{ url('/auth/redirect/google') }}"
                                class="w-full px-2 py-1.5 bg-white border border-gray-300 rounded focus:outline-none flex justify-center items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="25px"
                                    height="25px" fill="#fbc02d">
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
    </nav>
</header>
