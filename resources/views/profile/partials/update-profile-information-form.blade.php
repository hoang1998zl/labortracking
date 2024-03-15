<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Thông tin') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('Cập nhật địa chỉ email của bạn.') }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>
    <div class="md:py-5 py-2 md:flex items-center">
        <div class="md:w-1/2 w-full mx-auto">
            <x-input-label for="avatar" :value="__('Ảnh đại diện')" />
            @if (Auth::user()->getFirstMediaUrl('user_avatar') != null)
                <img class="pt-3 w-1/2 mx-auto" src="{{ Auth::user()->getFirstMediaUrl('user_avatar') }}" alt="Avatar">
            @else
                <svg class="w-1/2 mx-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" aria-hidden="true"
                    class="h-12">
                    <path fill-rule="evenodd"
                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-5.5-2.5a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0zM10 12a5.99 5.99 0 00-4.793 2.39A6.483 6.483 0 0010 16.5a6.483 6.483 0 004.793-2.11A5.99 5.99 0 0010 12z"
                        clip-rule="evenodd"></path>
                </svg>
            @endif
        </div>
        <div class="md:w-1/2 w-full">
            <x-input-label for="avatar" :value="__('Upload ảnh đại diện mới')" />
            <input class="filepond md:w-2/3 w-full" type="file" name="avatar">
        </div>
    </div>
    <form method="post" action="{{ route('profile.update') }}" enctype="multipart/form-data"
        class="forgot-password-form md:mt-6 md:space-y-6">
        @csrf
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" name="email" type="email" class="mt-1 block lg:w-1/2 md:w-4/5 w-full" :value="old('email', $user->email)"
                required autocomplete="username" />
            {{-- <x-input-error class="mt-2" :messages="$errors->get('email')" /> --}}

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !$user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800">
                        {{ __('Địa chỉ mail của bạn chưa được xác thực. Hãy xác thực ngay.') }}

                        <button form="send-verification"
                            class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            {{ __('Gửi lại xác thực.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600">
                            {{ __('Một link xác thực đã được gửi đến email của bạn.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Lưu') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600">{{ __('Đã lưu.') }}</p>
            @endif
        </div>
    </form>
</section>
@section('scripts')
    <script src="https://unpkg.com/filepond/dist/filepond.js"></script>
    <script src="{{ asset('gn24-v2/js/avatarUpdate.js') }}"></script>
@endsection
@section('styles')
    <link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet">
@endsection
