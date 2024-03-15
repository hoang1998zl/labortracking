@extends('gn24-v2.layouts.app')
@section('title', 'Liên hệ')
@section('content')
    <div class="lg:pt-16 pt-20 lg:pb-0 pb-5 w-full mx-auto lg:min-h-[calc(100vh-88px-96px)] flex justify-center items-center">
        <section>
            <div class="w-11/12 mx-auto">
                <div class="flex flex-col lg:flex-row">
                    <div class="w-full lg:w-1/2 md:block">
                        <div class="lg:w-10/12 w-11/12 mx-auto">
                            <p id="typed-contact" class="lg:text-5xl text-2xl leading-snug font-black"></p>
                            <p class=" py-10 text-lg font-bold"><i class="text-red-500 fa-solid fa-check"></i> </p>
                            <p>Hệ điều hành doanh nghiệp là một công cụ quan trọng giúp tổ chức quản lý và điều hành các
                                hoạt động kinh doanh một cách hiệu quả, đảm bảo tính hiệu quả, an toàn và linh hoạt trong
                                môi trường kinh doanh đầy cạnh tranh ngày nay.</p>
                        </div>
                    </div>
                    <div class="lg:w-1/2 w-full relative">
                        <div class="w-full mx-auto mt-4 lg:mt-0">
                            <div class="w-full shadow-2xl mx-auto bg-white py-5 rounded-lg md:px-10 px-5">
                                <p class="py-3 md:text-2xl text-lg font-extrabold">Muốn tìm hiểu nhiều hơn?</p>
                                <p class="pb-3 italic text-gray-400 md:text-base text-sm">Hãy điền thông tin vào form dưới,
                                    các chuyên
                                    gia
                                    của chúng tôi
                                    sẽ
                                    liên hệ lại với Quý khách.</p>
                                <form method="POST" action="{{ route('contact.store') }}" class="w-full contact-form">
                                    @csrf
                                    <div class="md:flex justify-center gap-10 w-full">
                                        <div class="md:mb-6 mb-3 w-full">
                                            <label class="mb-2 md:text-base text-sm font-medium text-gray-900">Họ Tên<span
                                                    class="text-red-600 text-lg">*</span>:</label><br>
                                            <input type="text" name="name"
                                                class="border w-full border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-orange-400 focus:border-orange-400 p-2.5 ">
                                        </div>
                                        <div class="md:mb-6 mb-3 w-full">
                                            <label class="mb-2 md:text-base text-sm font-medium text-gray-900">Tên công
                                                ty<span class="text-red-600 text-lg">*</span>:</label><br>
                                            <input type="text" name="company"
                                                class="border w-full border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-orange-400 focus:border-orange-400 p-2.5 ">
                                        </div>
                                    </div>
                                    <div class="md:flex justify-center gap-10 w-full">
                                        <div class="md:mb-6 mb-3 w-full">
                                            <label class="mb-2 md:text-base text-sm font-medium text-gray-900">Số điện
                                                thoại<span class="text-red-600 text-lg">*</span>:</label><br>
                                            <input type="tel" name="phone"
                                                class="border w-full border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-orange-400 focus:border-orange-400 p-2.5 ">
                                        </div>
                                        <div class="md:mb-6 mb-3 w-full">
                                            <label for=""
                                                class="mb-2 md:text-base text-sm font-medium text-gray-900">Email<span
                                                    class="text-red-600 text-lg">*</span>:</label><br>
                                            <input type="email" name="email"
                                                class="w-full border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-orange-400 focus:border-orange-400 p-2.5">
                                        </div>
                                    </div>
                                    <div class="mb-6 w-full">
                                        <label class="block mb-2 md:text-base text-sm font-medium text-gray-900"
                                            for="message">Nội dung yêu cầu:<span
                                                class="text-red-600 text-lg">*</span>:</label>
                                        <textarea
                                            class="h-40 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-orange-400 focus:border-orange-400 block w-full resize-none"
                                            name="message"></textarea>
                                    </div>
                                    <div class="text-end">
                                        <button type="submit"
                                            class="text-white bg-orange-400 hover:bg-orange-600 focus:ring-4 focus:outline-none focus:ring-orange-400 font-medium rounded-lg text-sm w-full sm:w-auto px-10 py-2.5">Gửi</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script type="module" src="{{ asset('gn24-v2/js/validator/index.js') }}"></script>
    <script type="module" src="{{ asset('gn24-v2/js/validator/contactValidate.js') }}"></script>
    <script type="module" src="{{ asset('gn24-v2/js/typedContact.js') }}"></script>
@endsection
