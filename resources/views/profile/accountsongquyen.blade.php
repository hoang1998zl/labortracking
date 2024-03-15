@extends('gn24-v2.layouts.app')
@section('title', 'Trang chủ')
@section('content')
    <section
        class="w-full pt-12 px-4 lg:px-0 lg:pt-0 lg:w-[calc(100%-15rem)] min-h-[calc(100vh)] lg:flex relative before:absolute before:top-0 before:right-0 before:bg-gradient-to-t before:w-full before:h-20 before:from-[#ff9450] before:from-10% before:to-white before:to-90% before:z-0">
        <div
            class="w-full lg:w-[calc(100%-15rem)] lg:mx-4 lg:mt-12 flex-1 h-full bg-white rounded-lg p-4 row-span-5 flex flex-col shadow-xl relative">
            <h1 class="w-full mb-4 lg:my-4 text-xl font-bold lg:uppercase text-orange-400 text-center">
                Tài khoản song quyền
            </h1>
            <button class="text-orange-400 text-2xl absolute top-5 left-5" onclick="Modal_CreateSongQuyen_Function(true)">
                <i class="fa-solid fa-plus"></i>
            </button>

            <button
                class="w-max hidden lg:block bg-orange-400 text-white py-1.5 px-6 rounded-t-md font-semibold focus:outline-none"
                onclick="Modal_CreateSongQuyen_Function(true)">
                <i class="fa-solid fa-plus me-1"></i>
                <span>Thêm</span>
            </button>

            <div class="w-full h-[70vh] hidden lg:block border-2 border-orange-400 overflow-scroll">
                <style>
                    #tablePhanQuyen th,
                    #tablePhanQuyen td {
                        padding: 0.5rem;
                        border-width: 1px;
                        border-style: solid;
                        border-color: #ccc;
                        text-align: center;
                        vertical-align: middle;
                    }

                    #tablePhanQuyen th:first-child,
                    #tablePhanQuyen td:first-child {
                        text-align: left
                    }

                    #tablePhanQuyen tbody tr td {
                        vertical-align: top;
                    }

                    #tablePhanQuyen tbody tr td:nth-child(3) p {
                        padding: 0.25rem 0.5rem;
                        border-radius: 0.25rem;
                        background-color: #efedf7;
                    }
                </style>
                <div class="w-max min-w-full">
                    <table id="tablePhanQuyen" class="w-max h-max min-w-full">
                        <thead class="text-orange-400">
                            <tr>
                                <th class="text-left">
                                    <p>
                                        Email
                                    </p>
                                </th>
                                <th>
                                    <p>
                                        Mật khẩu
                                    </p>
                                </th>
                                <th class="w-[300px] lg:w-[450px]">
                                    <p>
                                        Quyền truy cập
                                    </p>
                                </th>
                                <th colspan="2" class="w-[120px]">
                                    <p>
                                        Thao tác
                                    </p>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>
                                        <p>
                                            {{ $user->email }}
                                        </p>
                                    </td>
                                    <td>
                                        <p>
                                            ********
                                        </p>
                                    </td>
                                    <td>
                                        <div class="flex flex-wrap gap-2 justify-center">
                                            @if ($user->permission_cauhinh == true)
                                                <p>
                                                    Cấu hình
                                                </p>
                                            @endif
                                            @if ($user->permission_hoso == true)
                                                <p>
                                                    Hồ sơ
                                                </p>
                                            @endif
                                            @if ($user->permission_bangluong == true)
                                                <p>
                                                    Bảng lương
                                                </p>
                                            @endif
                                            @if ($user->permission_duyetapp == true)
                                                <p>
                                                    Duyệt App
                                                </p>
                                            @endif
                                            @if ($user->permission_chamcong == true)
                                                <p>
                                                    Chấm công
                                                </p>
                                            @endif
                                            @if ($user->permission_tamung == true)
                                                <p>
                                                    Tạm ứng
                                                </p>
                                            @endif
                                            @if ($user->permission_macroluong == true)
                                                <p>
                                                    Macro lương
                                                </p>
                                            @endif
                                            @if ($user->permission_daotao == true)
                                                <p>
                                                    Đào tạo
                                                </p>
                                            @endif
                                            @if ($user->permission_congno == true)
                                                <p>
                                                    Công nợ
                                                </p>
                                            @endif
                                            @if ($user->permission_thuongphat == true)
                                                <p>
                                                    Thưởng/phạt
                                                </p>
                                            @endif
                                            @if ($user->permission_baohiem == true)
                                                <p>
                                                    Bảo hiểm
                                                </p>
                                            @endif
                                            @if ($user->permission_suckhoe == true)
                                                <p>
                                                    Sức khỏe
                                                </p>
                                            @endif
                                            @if ($user->permission_kyquy == true)
                                                <p>
                                                    Ký quỹ
                                                </p>
                                            @endif
                                            @if ($user->permission_congviec == true)
                                                <p>
                                                    Công việc
                                                </p>
                                            @endif
                                            @if ($user->permission_babuoc == true)
                                                <p>
                                                    Quy trình 3 bước
                                                </p>
                                            @endif
                                        </div>
                                    </td>
                                    <td>
                                        <button class="text-sky-400"
                                            onclick="Modal_UpdateSongQuyen_Function(true, {{ $user }} )">
                                            <i class="fa-solid fa-pen"></i>
                                        </button>
                                    </td>
                                    <td>
                                        <form method="POST"
                                            action="{{ route('profile.accountsongquyen.destroy', $user->id) }}">
                                            @csrf
                                            @method('DELETE')
                                            <button class="text-red-500">
                                                <i class="fa-solid fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="w-full grid lg:hidden grid-cols-1 md:grid-cols-2 gap-x-4">
                @foreach ($users as $user)
                    <div class="w-full flex flex-col justify-start py-2">
                        <div class="w-full flex items-center gap-2 py-2">
                            <img src="{{ asset('gn24-v2/img-3/icon/icon_user.png') }}" alt=""
                                class="w-10 h-10 aspect-square rounded-full bg-orange-100">

                            <div class="flex-1 flex flex-col line-clamp-1">
                                <p class="font-bold text-sm">
                                    {{ $user->email }}
                                </p>
                                <p class="text-gray-600 text-xs">
                                    {{ $user->password }}
                                </p>
                            </div>
                            <div class="flex gap-2 items-center">
                                <button class="text-sky-400 p-2 rounded border border-sky-400"
                                    onclick="Modal_UpdateSongQuyen_Function(true, {{ $user }} )">
                                    <i class="fa-solid fa-pen"></i>
                                </button>
                                <form method="POST" action="{{ route('profile.accountsongquyen.destroy', $user->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button class="text-red-500 p-2 rounded border border-red-500">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class="w-full flex flex-wrap gap-2 p-1 rounded border border-orange-400 text-sm">
                            @if ($user->permission_cauhinh == true)
                                <p class="px-2 py-0.5 rounded bg-gray-200">
                                    Cấu hình
                                </p>
                            @endif
                            @if ($user->permission_hoso == true)
                                <p class="px-2 py-0.5 rounded bg-gray-200">
                                    Hồ sơ
                                </p>
                            @endif
                            @if ($user->permission_bangluong == true)
                                <p class="px-2 py-0.5 rounded bg-gray-200">
                                    Bảng lương
                                </p>
                            @endif
                            @if ($user->permission_duyetapp == true)
                                <p class="px-2 py-0.5 rounded bg-gray-200">
                                    Duyệt App
                                </p>
                            @endif
                            @if ($user->permission_chamcong == true)
                                <p class="px-2 py-0.5 rounded bg-gray-200">
                                    Chấm công
                                </p>
                            @endif
                            @if ($user->permission_tamung == true)
                                <p class="px-2 py-0.5 rounded bg-gray-200">
                                    Tạm ứng
                                </p>
                            @endif
                            @if ($user->permission_macroluong == true)
                                <p class="px-2 py-0.5 rounded bg-gray-200">
                                    Macro lương
                                </p>
                            @endif
                            @if ($user->permission_daotao == true)
                                <p class="px-2 py-0.5 rounded bg-gray-200">
                                    Đào tạo
                                </p>
                            @endif
                            @if ($user->permission_congno == true)
                                <p class="px-2 py-0.5 rounded bg-gray-200">
                                    Công nợ
                                </p>
                            @endif
                            @if ($user->permission_thuongphat == true)
                                <p class="px-2 py-0.5 rounded bg-gray-200">
                                    Thưởng/phạt
                                </p>
                            @endif
                            @if ($user->permission_baohiem == true)
                                <p class="px-2 py-0.5 rounded bg-gray-200">
                                    Bảo hiểm
                                </p>
                            @endif
                            @if ($user->permission_suckhoe == true)
                                <p class="px-2 py-0.5 rounded bg-gray-200">
                                    Sức khỏe
                                </p>
                            @endif
                            @if ($user->permission_kyquy == true)
                                <p class="px-2 py-0.5 rounded bg-gray-200">
                                    Ký quỹ
                                </p>
                            @endif
                            @if ($user->permission_congviec == true)
                                <p class="px-2 py-0.5 rounded bg-gray-200">
                                    Công việc
                                </p>
                            @endif
                            @if ($user->permission_babuoc == true)
                                <p class="px-2 py-0.5 rounded bg-gray-200">
                                    Quy trình 3 bước
                                </p>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        @include('profile.sidebar-auth')
    </section>
@endsection

@include('profile.modal-accountsongquyen-create')
@include('profile.modal-accountsongquyen-update')
