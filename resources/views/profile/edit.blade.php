@extends('gn24-v2.layouts.app')
@section('title', 'Tài khoản')
@section('content')
    <section
        class="w-full lg:w-[calc(100%-15rem)] min-h-[calc(100vh)] h-full lg:flex relative before:absolute before:top-0 before:right-0 before:bg-gradient-to-t before:w-full before:h-20 before:from-[#ff9450] before:from-10% before:to-white before:to-90% before:z-0">
        <div class="w-full lg:w-[calc(100%-15rem)] relative z-10 px-4 flex flex-col gap-4">
            <div class="w-full mt-5 lg:mt-10 grid grid-cols-2 md:grid-cols-3 xl:grid-cols-5 gap-2 md:gap-4">
                @foreach ($tongduyet as $key => $value)
                    @php
                        $bgColor = '';
                        $textColor = '';
                        $text = '';
                        if ($key == 'diTre') {
                            $bgColor = 'rgb(224 242 254)';
                            $textColor = 'rgb(2 132 199)';
                            $text = 'Xin đi trễ';
                        } elseif ($key == 'veSom') {
                            $bgColor = 'rgb(243 232 255)';
                            $textColor = 'rgb(147 51 234)';
                            $text = 'Xin về sớm';
                        } elseif ($key == 'nghiPhep') {
                            $bgColor = 'rgb(254 226 226)';
                            $textColor = 'rgb(220 38 38)';
                            $text = 'Nghỉ phép';
                        } elseif ($key == 'congTac') {
                            $bgColor = 'rgb(205 253 222)';
                            $textColor = 'rgb(17 251 61)';
                            $text = 'Công tác';
                        } elseif ($key == 'tangCa') {
                            $bgColor = 'rgb(254 248 224)';
                            $textColor = 'rgb(254 144 66)';
                            $text = 'Tăng ca';
                        }
                    @endphp
                    <div class="bg-white rounded-lg p-2 md:p-4 lg:p-2 2xl:p-4 flex justify-center items-center gap-2 md:gap-4 lg:gap-2 2xl:gap-4 shadow-xl"
                        style="color: {{ $textColor }}">
                        <div class="w-8 md:w-12 lg:w-10 2xl:w-12 aspect-square rounded-full text-lg md:text-2xl lg:text-xl 2xl:text-2xl flex justify-center items-center"
                            style="background-color: {{ $bgColor }}">
                            <i class="fa-solid fa-person-running"></i>
                        </div>
                        <div class="text-center flex-1">
                            <p class="text-lg font-bold text-black">
                                {{ $value }}
                            </p>
                            <p class="text-sm">
                                {{ $text }}
                            </p>
                        </div>
                    </div>
                @endforeach
                {{-- <div
                    class="bg-white rounded-lg p-2 md:p-4 lg:p-2 2xl:p-4 flex justify-center items-center gap-2 md:gap-4 lg:gap-2 2xl:gap-4 shadow-xl text-sky-600">
                    <div
                        class="w-8 md:w-12 lg:w-10 2xl:w-12 aspect-square rounded-full bg-sky-100 text-lg md:text-2xl lg:text-xl 2xl:text-2xl flex justify-center items-center">
                        <i class="fa-solid fa-person-running"></i>
                    </div>
                    <div class="text-center flex-1">
                        <p class="text-lg font-bold text-black">
                            0
                        </p>
                        <p class="text-sm">
                            Xin đi trễ
                        </p>
                    </div>
                </div>
                <div
                    class="bg-white rounded-lg p-2 md:p-4 lg:p-2 2xl:p-4 flex justify-center items-center gap-2 md:gap-4 lg:gap-2 2xl:gap-4 shadow-xl text-purple-600">
                    <div
                        class="w-8 md:w-12 lg:w-10 2xl:w-12 aspect-square rounded-full bg-purple-100 text-lg md:text-2xl lg:text-xl 2xl:text-2xl flex justify-center items-center">
                        <i class="fa-solid fa-person-walking-luggage"></i>
                    </div>
                    <div class="text-center flex-1">
                        <p class="text-lg font-bold text-black">
                            0
                        </p>
                        <p class="text-sm">
                            Xin về sớm
                        </p>
                    </div>
                </div>
                <div
                    class="bg-white rounded-lg p-2 md:p-4 lg:p-2 2xl:p-4 flex justify-center items-center gap-2 md:gap-4 lg:gap-2 2xl:gap-4 shadow-xl text-red-600">
                    <div
                        class="w-8 md:w-12 lg:w-10 2xl:w-12 aspect-square rounded-full bg-red-100 text-lg md:text-2xl lg:text-xl 2xl:text-2xl flex justify-center items-center">
                        <i class="fa-solid fa-person-walking-luggage"></i>
                    </div>
                    <div class="text-center flex-1">
                        <p class="text-lg font-bold text-black">

                            0
                        </p>
                        <p class="text-sm">
                            Nghỉ phép
                        </p>
                    </div>
                </div>
                <div
                    class="bg-white rounded-lg p-2 md:p-4 lg:p-2 2xl:p-4 flex justify-center items-center gap-2 md:gap-4 lg:gap-2 2xl:gap-4 shadow-xl text-[#11fb3d]">
                    <div
                        class="w-8 md:w-12 lg:w-10 2xl:w-12 aspect-square rounded-full bg-[#cdfdde] text-lg md:text-2xl lg:text-xl 2xl:text-2xl flex justify-center items-center">
                        <i class="fa-solid fa-plane -rotate-45"></i>
                    </div>
                    <div class="text-center flex-1">
                        <p class="text-lg font-bold text-black">

                            0
                        </p>
                        <p class="text-sm">
                            Công tác
                        </p>
                    </div>
                </div>
                <div
                    class="bg-white rounded-lg p-2 md:p-4 lg:p-2 2xl:p-4 flex justify-center items-center gap-2 md:gap-4 lg:gap-2 2xl:gap-4 shadow-xl text-[#fe9042]">
                    <div
                        class="w-8 md:w-12 lg:w-10 2xl:w-12 aspect-square rounded-full bg-[#fef8e0] text-lg md:text-2xl lg:text-xl 2xl:text-2xl flex justify-center items-center">
                        <i class="fa-regular fa-clock"></i>
                    </div>
                    <div class="text-center flex-1">
                        <p class="text-lg font-bold text-black">

                            0
                        </p>
                        <p class="text-sm">
                            Tăng ca
                        </p>
                    </div>
                </div> --}}
            </div>

            {{-- <div class="w-full hidden p-4 bg-white rounded-lg">
                {!! $CallFrequencyChart->container() !!}
            </div> --}}

            <div class="w-full grid grid-cols-1 md:grid-cols-2 lg:grid-cols-1 xl:grid-cols-2 gap-4">
                <div class="w-full p-4 bg-white rounded-lg">
                    <div class="w-full lg:w-2/3 2xl:w-1/2 mx-auto relative">
                        <h1 class="text-3xl font-bold absolute top-2/3 left-1/2 -translate-x-1/2 ">1GB</h1>
                        <canvas id="myChart"></canvas>
                    </div>
                    <p class="text-center font-bold text-xl">Dung lượng lưu trữ file</p>
                    <div class="flex flex-wrap justify-start items-start mt-4 gap-2">
                        <div class="flex items-center gap-1">
                            <span
                                class="h-8 aspect-video rounded bg-blue-600 text-white font-bold flex justify-center items-center text-center">W</span>
                            <span class="text-sm 2xl:text-base">40 File</span>
                        </div>
                        <div class="flex items-center gap-1">
                            <span
                                class="h-8 aspect-video rounded bg-green-600 text-white font-bold flex justify-center items-center text-center">X</span>
                            <span class="text-sm 2xl:text-base">15 File</span>
                        </div>
                        <div class="flex items-center gap-1">
                            <span
                                class="h-8 aspect-video rounded bg-red-600 text-white font-bold flex justify-center items-center text-center">PDF</span>
                            <span class="text-sm 2xl:text-base">20 File</span>
                        </div>
                    </div>
                </div>
                <div class="w-full flex flex-col gap-4">
                    <div class="w-full p-4 bg-white rounded-lg">
                        <div class="py-5">
                            {!! $FileStorageCapacity->container() !!}
                        </div>
                    </div>
                    <div class="w-full grid grid-cols-1 lg:grid-cols-2 gap-4">
                        <div class="w-full p-4 lg:p-2 bg-white rounded-lg flex">
                            <div
                                class="h-16 xl:h-12 2xl:h-16 aspect-square flex justify-center items-center rounded-full bg-sky-400 text-white text-3xl xl:text-xl 2xl:text-3xl">
                                <i class="fa-solid fa-file-circle-check"></i>
                            </div>
                            <div class="text-left flex-1 ml-2 self-center">
                                <p class="font-semibold text-gray-600">
                                    Kiểm duyệt
                                </p>
                                <p>
                                    <strong>10</strong>
                                    file
                                </p>
                            </div>
                        </div>
                        <div class="w-full p-4 lg:p-2 bg-white rounded-lg flex">
                            <div
                                class="h-16 xl:h-12 2xl:h-16 aspect-square flex justify-center items-center rounded-full bg-red-600 text-white text-3xl xl:text-xl 2xl:text-3xl">
                                <i class="fa-solid fa-circle-check"></i>
                            </div>
                            <div class="text-left flex-1 ml-2 self-center">
                                <p class="font-semibold text-gray-600">
                                    Chứng nhận
                                </p>
                                <p>
                                    <strong>10</strong>
                                    file
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('profile.sidebar-auth')
        <script src="{{ $UploadFrequencyChart->cdn() }}"></script>
        {{ $UploadFrequencyChart->script() }}
        <script src="{{ $FolderCountChart->cdn() }}"></script>
        {{ $FolderCountChart->script() }}
        <script src="{{ $ProcedureCountChart->cdn() }}"></script>
        {{ $ProcedureCountChart->script() }}
        <script src="{{ $FileUploadedCountChart->cdn() }}"></script>
        {{ $FileUploadedCountChart->script() }}
        <script src="{{ $CallFrequencyChart->cdn() }}"></script>
        {{ $CallFrequencyChart->script() }}
        <script src="{{ $FileStorageCapacity->cdn() }}"></script>
        {{ $FileStorageCapacity->script() }}
    </section>
@endsection
@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"></script>
    <script type="module" src="{{ asset('gn24-v2/js/validator/index.js') }}"></script>
    <script type="module" src="{{ asset('gn24-v2/js/validator/passwordValidate.js') }}"></script>
    <script type="module" src="{{ asset('gn24-v2/js/validator/forgotPasswordValidate.js') }}"></script>

@endsection
