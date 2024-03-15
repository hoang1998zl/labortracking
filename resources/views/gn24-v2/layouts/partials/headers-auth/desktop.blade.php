<header
    class="w-60 min-h-screen sticky z-10 top-0 left-0 shadow bg-white hidden lg:flex flex-col items-center rounded-lg">
    <a href="{{ route('profile.edit') }}" class="h-16 block focus:outline-none">
        <img src="{{ asset('gn24-v2/img-3/icon/LogoWeos.png') }}" alt="" class="h-full">
    </a>
    <nav class="w-full">
        <ul class="w-full px-4 flex flex-col items-center font-bold">
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
            {{ \Route::current()->getName() == 'profile.edit' ? 'bg-slate-100 text-orange-400' : '' }}">
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
        {{ \Route::current()->getName() == 'profile.accountsongquyen' ? 'bg-slate-100 text-orange-400' : '' }}">
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
        {{ \Route::current()->getName() == 'profile.plans-and-prices' ? 'bg-slate-100 text-orange-400' : '' }}">
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
                <form action="{{ route('logout') }}" id="logout-form-desktop" method="POST" class="hidden">
                    @csrf
                </form>
            </li>
        </ul>
    </nav>

    <button class="mt-10 w-40 py-2 bg-orange-400 text-white rounded-full" onclick="ChangeService_Function(true)">
        Nâng cấp
    </button>
</header>
