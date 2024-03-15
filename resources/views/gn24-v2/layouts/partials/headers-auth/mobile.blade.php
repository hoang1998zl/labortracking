<header
    class="w-full h-16 sticky z-[99] top-0 left-0 border-b border-gray-200 bg-white flex lg:hidden items-center justify-between px-4">
    <a href="{{ route('profile.edit') }}" class="h-16 block focus:outline-none">
        <img src="{{ asset('gn24-v2/img-3/icon/LogoWeos.png') }}" alt="" class="h-full">
    </a>
    <ul class="flex items-center gap-2">
        @auth
            @if (Auth::user()->is_setting == 1)
                <li>
                    <a id="dynamicLink1_1" href=""
                        class="w-10 h-10 rounded border border-orange-400 flex justify-center items-center text-orange-400 cursor-pointer focus:outline-none">
                        <div class="flex justify-center items-center text-2xl relative">
                            <i class="fa-regular fa-file-lines"></i>
                        </div>
                    </a>
                </li>
                <li>
                    <a id="dynamicLink2_1" href=""
                        class="w-10 h-10 rounded border border-orange-400 flex justify-center items-center text-orange-400 cursor-pointer focus:outline-none">
                        <div class="w-full h-full flex justify-center items-center text-2xl relative">
                            <i class="fa-regular fa-clock"></i>
                            <i class="fa-solid fa-location-dot text-xs absolute bottom-0 right-1"></i>
                        </div>
                    </a>
                </li>
            @endif
        @endauth
        <li>
            <button class="w-10 h-10 border border-orange-400 rounded" onclick="menuDropdown()">
                <i class="fa-solid fa-bars text-2xl text-orange-400"></i>
            </button>
        </li>
    </ul>
    <div class="w-full h-16 grid grid-cols-4 gap-2 fixed bottom-0 left-0 bg-white z-50">
        <a href="{{ route('profile.edit') }}"
            class="text-xs flex flex-col justify-center items-center hover:text-orange-400 {{ \Route::current()->getName() == 'profile.edit' ? 'text-orange-400' : 'text-gray-600' }}">
            <div class="h-8 w-14 flex justify-center items-center text-2xl relative">
                <i class="fa-regular fa-address-card"></i>
            </div>
            <p class="-mt-1">
                Thông tin
            </p>
        </a>
        <a href="{{ route('profile.accountsongquyen') }}"
            class="text-xs flex flex-col justify-center items-center hover:text-orange-400 {{ \Route::current()->getName() == 'profile.accountsongquyen' ? 'text-orange-400' : 'text-gray-600' }}">
            <div class="h-8 w-14 flex justify-center items-center text-2xl relative">
                <i class="fa-regular fa-user"></i>
                <i class="fa-solid fa-lock text-xs absolute bottom-0 right-3"></i>
            </div>
            <p class="-mt-1">
                Phân quyền
            </p>
        </a>
        <a href="{{ route('profile.plans-and-prices') }}"
            class="text-xs flex flex-col justify-center items-center hover:text-orange-400 {{ \Route::current()->getName() == 'profile.plans-and-prices' ? 'text-orange-400' : 'text-gray-600' }}">
            <div class="h-8 w-14 flex justify-center items-center text-2xl relative">
                <i class="fa-regular fa-credit-card"></i>
            </div>
            <p class="-mt-1">
                Thanh toán
            </p>
        </a>
        <a href="{{ route('logout') }}"
            class="text-xs flex flex-col justify-center items-center text-gray-600 hover:text-orange-400"
            onclick="event.preventDefault();document.getElementById('logout-form-desktop').submit();">
            <div class="h-8 w-14 flex justify-center items-center text-2xl relative">
                <i class="fa-solid fa-right-from-bracket"></i>
            </div>
            <p class="-mt-1">
                Đăng xuất
            </p>
            <form action="{{ route('logout') }}" id="logout-form-desktop" method="POST" class="hidden">
                @csrf
            </form>
        </a>
    </div>
</header>

<div id="myMenubackdrop" class="w-full h-full fixed top-0 left-0 z-40 bg-black opacity-30 hidden"></div>
<div id="myMenu"
    class="w-screen h-[calc(100vh-4rem-4rem)] fixed top-16 left-0 z-50 transition-transform duration-200 delay-75 ease-in-out -translate-x-full">
    <div class="w-full h-full z-50 relative py-1">
        <div class="w-10/12 md:w-1/3 h-full bg-white rounded-e-md p-2">
            <div class="w-full h-full overflow-y-auto">
                <nav class="w-full pe-2">
                    <ul class="w-full flex flex-col">
                        @auth
                            @if (Auth::user()->is_setting == 1)
                                <li class="w-full flex">
                                    <a id="dynamicLink1" href=""
                                        class="w-full px-4 py-1.5 flex items-center focus:outline-none bg-transparent hover:bg-slate-100 hover:text-orange-400 rounded">
                                        <div class="h-8 w-14 flex justify-center items-center text-2xl relative">
                                            <i class="fa-regular fa-file-lines"></i>
                                        </div>
                                        <p class="pt-1">
                                            Tài liệu
                                        </p>
                                    </a>
                                </li>
                                <li class="w-full flex border-b">
                                    <a id="dynamicLink2" href=""
                                        class="w-full px-4 py-1.5 flex items-center focus:outline-none bg-transparent hover:bg-slate-100 hover:text-orange-400 rounded">
                                        <div class="h-8 w-14 flex justify-center items-center text-2xl relative">
                                            <i class="fa-regular fa-clock"></i>
                                            <i class="fa-solid fa-location-dot text-xs absolute bottom-0 right-3"></i>
                                        </div>
                                        <p class="pt-1">
                                            Chấm công
                                        </p>
                                    </a>
                                </li>
                            @endif
                        @endauth
                        <li class="w-full flex">
                            <a href="{{ route('profile.edit') }}"
                                class="w-full px-4 py-1.5 flex items-center focus:outline-none hover:bg-slate-100 hover:text-orange-400 rounded
                        {{ \Route::current()->getName() == 'profile.edit' ? 'bg-orange-400 text-white' : '' }}">
                                <div class="h-8 w-14 flex justify-center items-center text-2xl relative">
                                    <i class="fa-regular fa-address-card"></i>
                                </div>
                                <p class="pt-1">
                                    Thông tin
                                </p>
                            </a>
                        </li>
                        <li class="w-full flex">
                            <a href="{{ route('profile.accountsongquyen') }}"
                                class="w-full px-4 py-1.5 flex items-center focus:outline-none hover:bg-slate-100 hover:text-orange-400 rounded
                    {{ \Route::current()->getName() == 'profile.accountsongquyen' ? 'bg-orange-400 text-white' : '' }}">
                                <div class="h-8 w-14 flex justify-center items-center text-2xl relative">
                                    <i class="fa-regular fa-user"></i>
                                    <i class="fa-solid fa-lock text-xs absolute bottom-0 right-3"></i>
                                </div>
                                <p class="pt-1">
                                    Phân quyền
                                </p>
                            </a>
                        </li>
                        <li class="w-full flex">
                            <a class="w-full px-4 py-1.5 flex items-center focus:outline-none hover:bg-slate-100 hover:text-orange-400 rounded cursor-pointer"
                                onclick="Modal_App_Function(true)">
                                <div class="h-8 w-14 flex justify-center items-center text-2xl relative">
                                    <i class="fa-solid fa-qrcode text-2xl"></i>
                                </div>
                                <p class="pt-1">
                                    Ứng dụng
                                </p>
                            </a>
                        </li>
                        <li class="w-full flex">
                            <a href="{{ route('profile.plans-and-prices') }}"
                                class="w-full px-4 py-1.5 flex items-center focus:outline-none hover:bg-slate-100 hover:text-orange-400 rounded
                    {{ \Route::current()->getName() == 'profile.plans-and-prices' ? 'bg-orange-400 text-white' : '' }}">
                                <div class="h-8 w-14 flex justify-center items-center text-2xl relative">
                                    <i class="fa-regular fa-credit-card"></i>
                                </div>
                                <p class="pt-1">
                                    Thanh toán
                                </p>
                            </a>
                        </li>
                        <li class="w-full flex border-t">
                            <a href="{{ route('logout') }}"
                                class="w-full px-4 py-1.5 flex items-center focus:outline-none bg-transparent hover:bg-slate-100 hover:text-orange-400 rounded"
                                onclick="event.preventDefault();
                    document.getElementById('logout-form-desktop').submit();">
                                <div class="h-8 w-14 flex justify-center items-center text-2xl relative">
                                    <i class="fa-solid fa-arrow-right-from-bracket"></i>
                                </div>
                                <p class="pt-1">
                                    Thoát
                                </p>
                            </a>
                            <form action="{{ route('logout') }}" id="logout-form-desktop" method="POST"
                                class="hidden">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>

<script>
    function menuDropdown() {
        var menu = document.getElementById("myMenu");
        var backdrop = document.getElementById("myMenubackdrop");
        if (menu.classList.contains("-translate-x-full")) {
            menu.classList.remove("-translate-x-full");
            backdrop.classList.remove("hidden");
        } else {
            menu.classList.add("-translate-x-full");
            backdrop.classList.add("hidden");
        }
    }
</script>
