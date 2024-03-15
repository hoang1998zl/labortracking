<form method="POST" action="{{ route('contact.store') }}"
    class="contact-form w-full grid grid-cols-1 md:grid-cols-2 gap-4 my-4">
    @csrf
    <div class="w-full flex flex-col gap-2">
        <label class="mb-2 md:text-base text-sm font-semibold text-orange-400">Họ Tên</label>
        <input type="text" name="name"
            class="border w-full border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-orange-400 focus:border-orange-400 p-2.5 ">
    </div>
    <div class="w-full flex flex-col gap-2">
        <label class="mb-2 md:text-base text-sm font-semibold text-orange-400">Tên công ty</label>
        <input type="text" name="company"
            class="border w-full border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-orange-400 focus:border-orange-400 p-2.5 ">
    </div>
    <div class="w-full flex flex-col gap-2">
        <label class="mb-2 md:text-base text-sm font-semibold text-orange-400">Số điện thoại</label>
        <input type="tel" name="phone"
            class="border w-full border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-orange-400 focus:border-orange-400 p-2.5 ">
    </div>
    <div class="w-full flex flex-col gap-2">
        <label for="" class="mb-2 md:text-base text-sm font-semibold text-orange-400">Email</label>
        <input type="email" name="email"
            class="w-full border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-orange-400 focus:border-orange-400 p-2.5">
    </div>
    <div class="w-full flex flex-col gap-2 md:col-span-2">
        <label class="block mb-2 md:text-base text-sm font-semibold text-orange-400" for="message">Nội dung yêu
            cầu</label>
        <textarea
            class="h-40 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-orange-400 focus:border-orange-400 block w-full resize-none"
            name="message"></textarea>
    </div>
    <div class="text-center md:col-span-2 mt-4">
        <button type="submit"
            class="text-white bg-orange-400 hover:bg-orange-600 focus:ring-4 focus:outline-none focus:ring-orange-400 font-medium rounded-full text-lg   w-full sm:w-auto px-10 md:px-20 py-2.5">
            Đăng ký tư vấn
        </button>
    </div>
</form>

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script type="module" src="{{ asset('gn24-v2/js/validator/index.js') }}"></script>
    <script type="module" src="{{ asset('gn24-v2/js/validator/contactValidate.js') }}"></script>
    <script type="module" src="{{ asset('gn24-v2/js/typedContact.js') }}"></script>
@endsection
