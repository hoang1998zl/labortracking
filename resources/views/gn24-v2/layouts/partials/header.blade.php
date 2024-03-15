<div id="header" class="w-full bg-white px-4 h-16 flex justify-between items-center gap-4">
    <a href="{{ route('gn24.index') }}" class="w-40 h-full block focus:outline-none">
        <img src="{{ asset('gn24-v2/img-3/icon/LogoWeos.png') }}" alt="" class="h-full">
    </a>

    <button type="button"
        class="w-40 h-4/6 bg-orange-400 text-white flex justify-center items-center cursor-pointer text-lg rounded-full z-50">
        Khám phá
    </button>
</div>

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"></script>
    <script type="module" src="{{ asset('gn24-v2/js/validator/index.js') }}"></script>
    <script type="module" src="{{ asset('gn24-v2/js/validator/loginValidate.js') }}"></script>
@endsection
