<div>
    @auth
        {{-- desktop menu --}}
        @include('gn24-v2.layouts.partials.headers-auth.desktop')

        {{-- mobile menu --}}
        @include('gn24-v2.layouts.partials.headers-auth.mobile')
    @else
        {{-- desktop menu --}}
        @include('gn24-v2.layouts.partials.headers-noauth.desktop')
        
        {{-- mobile menu --}}
        @include('gn24-v2.layouts.partials.headers-noauth.mobile')
    @endauth

    @include('gn24-v2.modals.login')

    @include('gn24-v2.modals.service')

    @include('gn24-v2.modals.register')

    @include('gn24-v2.modals.app-download')

    @include('gn24-v2.modals.khampha')

</div>

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"></script>
    <script type="module" src="{{ asset('gn24-v2/js/validator/index.js') }}"></script>
    <script type="module" src="{{ asset('gn24-v2/js/validator/loginValidate.js') }}"></script>
@endsection
