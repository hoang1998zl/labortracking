@extends('gn24-v2.layouts.app')
@section('title', 'Kế hoạch và thanh toán')
@section('content')
    <section
        class="w-full lg:w-[calc(100%-15rem)] min-h-[calc(100vh)] h-full lg:flex relative before:absolute before:top-0 before:right-0 before:bg-gradient-to-t before:w-full before:h-20 before:from-[#ff9450] before:from-10% before:to-white before:to-90% before:z-0">

        <div class="w-full lg:w-[calc(100%-15rem)] flex-1 relative z-10">
            <div class="w-11/12 mx-auto my-10 grid grid-cols-1 gap-y-10">
                <div class="p-4 lg:p-8 flex flex-col gap-4 bg-white rounded-lg shadow-lg">
                    <h1 class="uppercase font-bold text-xl text-orange-400">
                        Gói dịch vụ đang dùng
                    </h1>
                    @if ($choosedPlan == 'FREE')
                        <button type="button" class="w-max px-4 py-2 border border-black rounded text-black">
                            Trải nghiệm
                        </button>
                    @endif
                    @if ($choosedPlan == 'PREMIUM')
                        <button type="button" class="w-max px-4 py-2 border border-orange-400 rounded text-orange-400">
                            Doanh nghiệp
                        </button>
                    @endif
                    @if ($choosedPlan == 'STANDARD')
                        <button type="button" class="w-max px-4 py-2 border border-sky-400 rounded text-sky-400">
                            Tiêu chuẩn
                        </button>
                    @endif
                    <div class="w-full">
                        <p class="font-semibold">
                            Mô tả
                        </p>
                        <ul class="list-disc my-2 list-inside w-full grid md:grid-cols-2 gap-x-4 gap-y-2">
                            <li>
                                App định vị chấm công
                            </li>
                            <li>
                                App Hồ sơ nhân sự
                            </li>
                            <li>
                                App Chấm công quẹt thẻ từ
                            </li>
                            <li>
                                App Quản lý tài liệu công ty
                            </li>
                            <li>
                                App Xác thực tài liệu
                            </li>
                            @if ($choosedPlan == 'FREE')
                                <li>
                                    1GB lưu trữ
                                </li>
                            @endif
                            <li>
                                Chat và gọi video thời gian thực
                            </li>
                            <li>
                                XD quy trình phân phối tài liệu
                            </li>
                            @if ($choosedPlan == 'PREMIUM')
                                <li>
                                    Không giới hạn dung lượng lưu trữ
                                </li>
                                <li>
                                    Xây dựng hệ thống riêng cho DN
                                </li>
                                <li>
                                    Trích lục theo yêu cầu từ hỗ trợ
                                </li>
                                <li>
                                    Bảo mật dữ liệu:
                                    <ul class="ps-6">
                                        <li>
                                            <span class="font-bold">
                                                +
                                            </span>
                                            Theo chuẩn <span class="text-red-500 font-bold">Quốc tế</span>
                                        </li>
                                        <li>
                                            <span class="font-bold">
                                                +
                                            </span>
                                            Theo yêu cầu của <span class="text-red-500 font-bold">Doanh nghiệp</span>
                                        </li>
                                        <li>
                                            <span class="font-bold">
                                                +
                                            </span>
                                            Cài đặt PM tại máy chủ <span class="text-red-500 font-bold">Quốc tế</span>
                                        </li>
                                    </ul>
                                </li>
                            @endif
                            @if ($choosedPlan == 'STANDARD')
                                <li>
                                    10GB lưu trữ
                                </li>
                                <li>
                                    App Quản công việc
                                </li>
                                <li>
                                    Thu chi tài chính trên từng công việc
                                </li>
                                <li>
                                    Các tính năng chuyên sâu nhân sự
                                </li>
                                <li>
                                    BH Xã hội, Đào tạo, Thưởng phạt
                                </li>
                                <li>
                                    Ký quỹ, Công nợ, ...
                                </li>
                                <li>
                                    Bảng lương + Marco chuyên dụng
                                </li>
                            @endif
                        </ul>
                    </div>
                    <div class="w-full text-center">
                        <button type="button" class="w-max px-16 py-2 rounded-full bg-orange-400 text-white"
                            onclick="ChangeService_Function(true)">
                            Đổi gói
                        </button>
                    </div>
                </div>
                <div class="p-4 lg:p-8 flex flex-col gap-4 bg-white rounded-lg shadow-lg">
                    <h1 class="uppercase font-bold text-xl text-orange-400">
                        Lịch sử thanh toán
                    </h1>
                    <div class="w-full overflow-auto">
                        <table id="paymentHistory_table" class="w-max min-w-full table text-center">
                            <thead>
                                <th>
                                    Ngày giao dịch
                                </th>
                                <th>
                                    Mã giao dịch
                                </th>
                                <th>
                                    Tên ngân hàng
                                </th>
                                <th>
                                    Số tiền
                                </th>
                                <th>
                                    Thời gian gia hạn
                                </th>
                                <th>
                                    Gói đã chọn
                                </th>
                            </thead>
                            <tbody>
                                @if ($paymentHistory != null)
                                    @foreach ($paymentHistory as $item)
                                        <tr>
                                            <td>
                                                {{ $item->payment_date }}
                                            </td>
                                            <td>
                                                {{ $item->payment_code }}
                                            </td>
                                            <td>
                                                {{ $item->payment_bank }}
                                            </td>
                                            <td>
                                                {{ $item->price }}
                                            </td>
                                            <td>
                                                {{ $item->time_rechange }}
                                            </td>
                                            <td>
                                                @if ($item->product_type == 'PREMIUM')
                                                    Doanh nghiệp
                                                @endif
                                                @if ($item->product_type == 'STANDARD')
                                                    Tiêu chuẩn
                                                @endif
                                                @if ($item->product_type == 'FREE')
                                                    Trải nghiệm
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        @include('profile.sidebar-auth')

        @if (session('success'))
            <div id="successModal"
                class="w-screen h-screen fixed top-0 right-0 left-0 z-[100] flex items-center justify-center hidden">
                <div class="backdrop w-screen h-screen absolute z-0 top-0 left-0 bg-black bg-opacity-30"></div>
                <div class="dialog relative z-10 bg-white rounded-lg w-full max-w-[280px] md:max-w-[500px] text-center">
                    <div class="content px-4 py-4">
                        {{-- <p class="uppercase font-semibold text-orange-400 text-2xl">{{ session('success') }}</p> --}}

                        <div class="banking-wrapper flex flex-col items-center text-center my-6 uppercase font-bold">
                            <p class="text-xl text-orange-400">Tên ngân hàng</p>
                            <img src="{{ asset('gn24-v2/img-3/icon/qr-code.jpg') }}" alt="" class="w-2/3">
                            <p>Số tài khoản</p>
                            <p class="text-xl text-orange-400">Tên chủ tài khoản</p>
                        </div>
                    </div>
                </div>
            </div>
        @endif

    </section>
@endsection
@section('scripts')
    <script src="https://unpkg.com/@material-tailwind/html@latest/scripts/tabs.js"></script>

    <script>
        $(document).ready(function() {
            $('#successModal').removeClass('hidden');
        });

        $('#successModal .backdrop').click(function() {
            $('#successModal').addClass('hidden');
        });
    </script>
@endsection
