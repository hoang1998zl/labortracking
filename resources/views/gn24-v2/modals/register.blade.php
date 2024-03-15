<div id="modal_register" class="w-screen h-screen fixed top-0 left-0 z-[100] bg-black bg-opacity-30 hidden">
    <div class="w-full h-full relative flex justify-center items-start lg:items-center pt-4 lg:pt-0">
        <div class="backdrop w-full h-full absolute z-10" onclick="Modal_Register_Function(false)"></div>
        <div
            class="w-10/12 lg:w-[800px]  bg-white shadow-2xl rounded-3xl z-20 px-5 py-5 relative">
            <p class="text-center font-bold md:text-2xl text-lg text-gray-600 mt-5">Đăng ký tài khoản
            </p>
            <div class="w-full flex flex-col items-center max-h-[70vh] overflow-auto">
                <div class="flex w-full justify-center gap-5 py-3">
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
                <form method="POST" action="{{ route('register') }}" class="w-full px-10 register-form">
                    @csrf
                    <div class="w-full mx-auto">
                        <div class="pb-3">
                            <label class="font-bold text-base text-gray-700" for="">Email</label>
                            <input
                                class="w-full rounded-md border border-gray-300 focus:border-orange-400 focus:ring-orange-400"
                                type="email" name="email" id="email" value="{{ old('email') }}">
                        </div>
                        <div class="pb-3">
                            <label class="font-bold text-base text-gray-700" for="">Mật khẩu</label>
                            <input type="password" name="password" id="password_reg"
                                class="w-full rounded-md border border-gray-300 focus:border-orange-400 focus:ring-orange-400">
                        </div>
                        <div class="pb-3">
                            <label class="font-bold text-base text-gray-700" for="">Xác nhận mật
                                khẩu</label>
                            <input type="password" name="password_confirmation"
                                class="w-full rounded-md border border-gray-300 focus:border-orange-400 focus:ring-orange-400"
                                id="password_confirmation">
                        </div>
                        <div class="pb-3">
                            <label class="font-bold text-base text-gray-700" for="">Số điện thoại</label>
                            <input type="tel" name="phone" value="{{ old('phone') }}"
                                class="w-full rounded-md border border-gray-300 focus:border-orange-400 focus:ring-orange-400">
                        </div>
                        <div class="pb-3 md:flex w-full gap-5">
                            <div class="md:w-7/12 w-full">
                                <label class="block font-bold text-base text-gray-700" for="">Tên công
                                    ty</label>
                                <input
                                    class="w-full rounded-md border border-gray-300 focus:border-orange-400 focus:ring-orange-400"
                                    type="text" name="company_name" id="company_name"
                                    value="{{ old('company_name') }}">
                            </div>
                            <div class="md:w-5/12 w-full">
                                <label class="font-bold text-base text-gray-700 block" for="">Mã công
                                    ty</label>
                                <div class="flex items-center">
                                    <input
                                        class="w-full rounded-md border border-gray-300 focus:border-orange-400 focus:ring-orange-400"
                                        type="text" name="company_code" id="company_code"
                                        value="{{ old('company_code') }}">

                                </div>
                            </div>
                        </div>
                        <p class="mb-3 text-center text-gray-400 italic text-sm hover:text-gray-700 hover:font-bold">
                            Ghi
                            chú: <span>Mã công ty sẽ là các chữ
                                cái
                                đầu của
                                mỗi từ trong tên công ty.</span></p>
                        <div class="pb-3 flex items-center">
                            <input type="checkbox" checked class="rounded-sm border text-orange-400 border-orange-400 "
                                name="terms">
                            <p class="ps-2">Tôi đồng ý với <a href=""
                                    class="italic text-orange-400 hover:underline">Thoả thuận sử
                                    dụng</a> và
                                <a href="" class="italic text-orange-400 hover:underline">Quy định bảo
                                    mật</a> của
                                WeOS<sup>®</sup>
                            </p>
                        </div>
                        <div class="py-5 w-6/12 mx-auto">
                            <button type="submit"
                                class="w-full rounded-lg bg-orange-400 hover:bg-orange-600 py-3 text-white font-bold">Đăng
                                ký</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
