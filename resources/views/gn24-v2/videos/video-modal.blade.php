<div id="modal_video" class="w-screen h-screen fixed top-0 left-0 z-50 bg-black bg-opacity-30 hidden">
    <div class="w-full h-full relative flex justify-center items-center">
        <div class="backdrop w-full h-full absolute z-10" onclick="Modal_Video_Function(false)"></div>
        <div class="w-10/12 lg:w-8/12 bg-white shadow-2xl rounded-3xl z-20 p-4 lg:px-12 lg:py-12 relative">
            <iframe id="modal_video_iframe" class="w-full aspect-video rounded-xl" src=""
                title="Video hướng dẫn đăng ký" frameborder="0"
                allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
            <h1 class="text-base lg:text-lg mt-2 font-bold">Hướng dẫn đăng ký tài khoản</h1>
            <p class="text-gray-500">Tổng quan</p>
            <button
                class="w-10 h-10 hidden lg:flex justify-center items-center text-3xl text-white bg-red-400 cursor-pointer absolute rounded-full top-0 right-0 translate-x-1/2 -translate-y-1/2">
                <i class="fas fa-times" onclick="Modal_Video_Function(false)"></i>
            </button>
        </div>
    </div>
</div>
