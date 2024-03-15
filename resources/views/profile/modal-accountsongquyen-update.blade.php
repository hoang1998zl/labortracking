<div id="modal_updatesongquyen" class="w-screen h-screen fixed top-0 left-0 z-[100] bg-black bg-opacity-30 hidden">
    <div class="w-full h-full relative flex justify-center items-center">
        <div class="backdrop w-full h-full absolute z-10" onclick="Modal_UpdateSongQuyen_Function(false)">
        </div>
        <div class="w-10/12 md:w-11/12 lg:w-[600px] bg-white shadow-2xl rounded-3xl z-20 px-5 py-5 relative">
            <button
                class="w-10 h-10 flex justify-center items-center text-3xl text-white bg-red-400 cursor-pointer absolute rounded-full top-0 right-0 translate-x-1/2 -translate-y-1/2"
                onclick="Modal_UpdateSongQuyen_Function(false)">
                <i class="fa-solid fa-times"></i>
            </button>
            <h1 class="text-xl font-bold mb-4 text-orange-400 text-center">
                Cập nhật tài khoản
            </h1>

            <form method="POST" action="{{ route('profile.accountsongquyen.update') }}"
                class="w-full space-y-4 mt-4 updatesongquyen-form max-h-[70vh] overflow-y-auto ">
                @csrf
                @method('PUT')
                <div class="w-full grid grid-cols-1 md:grid-cols-2 gap-4">
                    <input id="updatesongquyen_id" name="id" class="hidden" type="text" />
                    <div class="flex flex-col gap-2">
                        <p class="font-bold">
                            Email
                        </p>
                        <input id="updatesongquyen_email" name="email"
                            class="w-full px-2 py-1.5 rounded-md border border-orange-400 focus:outline-none focus:ring-orange-400 focus:border-orange-400"
                            type="email" />
                    </div>
                    <div class="flex flex-col gap-2">
                        <p class="font-bold">
                            Mật khẩu
                        </p>
                        <input id="updatesongquyen_password" name="password"
                            class="w-full px-2 py-1.5 rounded-md border border-orange-400 focus:outline-none focus:ring-orange-400 focus:border-orange-400"
                            type="text" />
                    </div>
                </div>
                <p class="font-bold -mb-2">
                    Quản lý chấm công
                </p>
                <div class="w-full grid grid-cols-1 md:grid-cols-3 gap-4">
                    <div class="flex items-center gap-1">
                        <input id="updatesongquyen_permission_cauhinh" name="permission_cauhinh"
                            class="w-6 h-6 text-orange-400 focus:ring-0 rounded" type="checkbox" />
                        <p class="px-2 py-1 rounded border border-orange-400 text-center flex-1">
                            Cấu hình
                        </p>
                    </div>
                    <div class="flex items-center gap-1">
                        <input id="updatesongquyen_permission_hoso" name="permission_hoso"
                            class="w-6 h-6 text-orange-400 focus:ring-0 rounded" type="checkbox" />
                        <p class="px-2 py-1 rounded border border-orange-400 text-center flex-1">
                            Hồ sơ
                        </p>
                    </div>
                    <div class="flex items-center gap-1">
                        <input id="updatesongquyen_permission_bangluong" name="permission_bangluong"
                            class="w-6 h-6 text-orange-400 focus:ring-0 rounded" type="checkbox" />
                        <p class="px-2 py-1 rounded border border-orange-400 text-center flex-1">
                            Bảng lương
                        </p>
                    </div>
                    <div class="flex items-center gap-1">
                        <input id="updatesongquyen_permission_duyetapp" name="permission_duyetapp"
                            class="w-6 h-6 text-orange-400 focus:ring-0 rounded" type="checkbox" />
                        <p class="px-2 py-1 rounded border border-orange-400 text-center flex-1">
                            Duyệt App
                        </p>
                    </div>
                    <div class="flex items-center gap-1">
                        <input id="updatesongquyen_permission_chamcong" name="permission_chamcong"
                            class="w-6 h-6 text-orange-400 focus:ring-0 rounded" type="checkbox" />
                        <p class="px-2 py-1 rounded border border-orange-400 text-center flex-1">
                            Chấm công
                        </p>
                    </div>
                    <div class="flex items-center gap-1">
                        <input id="updatesongquyen_permission_tamung" name="permission_tamung"
                            class="w-6 h-6 text-orange-400 focus:ring-0 rounded" type="checkbox" />
                        <p class="px-2 py-1 rounded border border-orange-400 text-center flex-1">
                            Tạm ứng
                        </p>
                    </div>
                    <div class="flex items-center gap-1">
                        <input id="updatesongquyen_permission_macroluong" name="permission_macroluong"
                            class="w-6 h-6 text-orange-400 focus:ring-0 rounded" type="checkbox" />
                        <p class="px-2 py-1 rounded border border-orange-400 text-center flex-1">
                            Macro lương
                        </p>
                    </div>
                    <div class="flex items-center gap-1">
                        <input id="updatesongquyen_permission_daotao" name="permission_daotao"
                            class="w-6 h-6 text-orange-400 focus:ring-0 rounded" type="checkbox" />
                        <p class="px-2 py-1 rounded border border-orange-400 text-center flex-1">
                            Đào tạo
                        </p>
                    </div>
                    <div class="flex items-center gap-1">
                        <input id="updatesongquyen_permission_congno" name="permission_congno"
                            class="w-6 h-6 text-orange-400 focus:ring-0 rounded" type="checkbox" />
                        <p class="px-2 py-1 rounded border border-orange-400 text-center flex-1">
                            Công nợ
                        </p>
                    </div>
                    <div class="flex items-center gap-1">
                        <input id="updatesongquyen_permission_thuongphat" name="permission_thuongphat"
                            class="w-6 h-6 text-orange-400 focus:ring-0 rounded" type="checkbox" />
                        <p class="px-2 py-1 rounded border border-orange-400 text-center flex-1">
                            Thưởng/phạt
                        </p>
                    </div>
                    <div class="flex items-center gap-1">
                        <input id="updatesongquyen_permission_baohiem" name="permission_baohiem"
                            class="w-6 h-6 text-orange-400 focus:ring-0 rounded" type="checkbox" />
                        <p class="px-2 py-1 rounded border border-orange-400 text-center flex-1">
                            Bảo hiểm
                        </p>
                    </div>
                    <div class="flex items-center gap-1">
                        <input id="updatesongquyen_permission_suckhoe" name="permission_suckhoe"
                            class="w-6 h-6 text-orange-400 focus:ring-0 rounded" type="checkbox" />
                        <p class="px-2 py-1 rounded border border-orange-400 text-center flex-1">
                            Sức khỏe
                        </p>
                    </div>
                    <div class="flex items-center gap-1">
                        <input id="updatesongquyen_permission_kyquy" name="permission_kyquy"
                            class="w-6 h-6 text-orange-400 focus:ring-0 rounded" type="checkbox" />
                        <p class="px-2 py-1 rounded border border-orange-400 text-center flex-1">
                            Ký quỹ
                        </p>
                    </div>
                </div>
                <p class="font-bold -mb-2">
                    Quản lý công việc
                </p>
                <div class="w-full grid grid-cols-1 md:grid-cols-3 gap-4">
                    <div class="flex items-center gap-1">
                        <input id="updatesongquyen_permission_congviec" name="permission_congviec"
                            class="w-6 h-6 text-orange-400 focus:ring-0 rounded" type="checkbox" />
                        <p class="px-2 py-1 rounded border border-orange-400 text-center flex-1">
                            Công việc
                        </p>
                    </div>
                    <div class="flex items-center gap-1 md:col-span-2">
                        <input id="updatesongquyen_permission_babuoc" name="permission_babuoc"
                            class="w-6 h-6 text-orange-400 focus:ring-0 rounded" type="checkbox" />
                        <p class="px-2 py-1 rounded border border-orange-400 text-center flex-1">
                            Quy trình ba bước
                        </p>
                    </div>
                </div>
                <div class="w-full flex justify-center items-center mt-2">
                    <button type="submit" class="w-32 py-1.5 text-white bg-orange-400 rounded-md">
                        Đồng ý
                    </button>
                </div>
            </form>

        </div>
    </div>
</div>
