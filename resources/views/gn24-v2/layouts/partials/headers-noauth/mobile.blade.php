<header
    class="w-full fixed z-[99] top-0 left-0 border-b border-gray-200 bg-white flex lg:hidden items-center justify-between px-4">
    <a href="{{ route('profile.edit') }}" class="h-12 block focus:outline-none">
        <img src="{{ asset('gn24-v2/img-3/icon/LogoWeos.png') }}" alt="" class="h-full">
    </a>
    <button type="button" class="w-10 h-10 border border-orange-400 rounded" onclick="Modal_Khampha_Function(true)">
        <i class="fa-solid fa-bars text-2xl text-orange-400"></i>
    </button>
</header>
<header class="w-full lg:hidden fixed z-[99] bottom-0 left-0 border-b border-gray-200 bg-white">
    <nav class="w-full h-16">
        <ul class="w-full grid grid-cols-5 text-[0.6rem] text-center">
            <li>
                <a href="{{ route('gn24.index') }}"
                    class="h-16 flex flex-col justify-center items-center px-2 hover:text-orange-500 rounded lg:bg-transparent focus:outline-none {{ \Route::current()->getName() == 'gn24.index' ? 'text-orange-400' : 'text-gray-600' }} lg:p-0">
                    <i class="fa-solid fa-house text-2xl"></i>
                    Trang chủ
                </a>
            </li>
            <li>
                <a href="{{ route('gn24.index') }}/#indexpricing"
                    class="h-16 flex flex-col justify-center items-center px-2 hover:text-orange-500 rounded lg:bg-transparent text-gray-600 focus:outline-none">
                    <i class="fa-regular fa-crown text-2xl"></i>
                    Nâng cấp
                </a>
            </li>
            <li>
                <a class="h-20 w-20 mx-auto -translate-y-1/4 border-4 border-white flex flex-col justify-center items-center bg-orange-400 text-white rounded-full cursor-pointer"
                    onclick="Modal_Khampha_Function(true)">
                    <i class="fa-solid fa-ellipsis text-2xl leading-[0.5rem]"></i>
                    <i class="fa-solid fa-ellipsis text-2xl leading-[0.5rem]"></i>
                    <i class="fa-solid fa-ellipsis text-2xl leading-[0.5rem]"></i>
                    Khám phá
                </a>
            </li>
            <li>
                <a href="{{ route('gn24.videos.index', 'tong-quan') }}"
                    class="h-16 flex flex-col justify-center items-center px-2 hover:text-orange-500 rounded lg:bg-transparent focus:outline-none {{ \Route::current()->getName() == 'gn24.videos.index' || \Route::current()->getName() == 'gn24.videos.details' ? 'text-orange-400' : 'text-gray-600' }} lg:p-0">
                    <i class="fa-regular fa-circle-play text-2xl"></i>
                    Hướng dẫn
                </a>
            </li>
            <li>
                <a class="h-16 flex flex-col justify-center items-center px-2 hover:text-orange-500 rounded lg:bg-transparent text-gray-600 focus:outline-none cursor-pointer"
                    onclick="Modal_App_Function(true)">
                    <i class="fa-solid fa-qrcode text-2xl"></i>
                    Ứng dụng
                </a>
            </li>
            <li>
                <a href="{{ route('gn24.contact') }}"
                    class="h-14 flex justify-center items-center aspect-square text-orange-400 hover:bg-orange-400 hover:text-white rounded-full shadow-[0_0_4px_0_rgba(0,0,0,0.2)] bg-white fixed bottom-24 right-4 focus:outline-none">
                    <i class="fa-regular fa-headset text-3xl"></i>
                </a>
            </li>
        </ul>
    </nav>
</header>
