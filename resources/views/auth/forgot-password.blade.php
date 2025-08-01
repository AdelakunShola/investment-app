
    @php($about = \App\Models\About::first())

    <div class="flex justify-center mb-8">
        <a href="{{ url('/') }}">
            <img src="{{ $about && $about->image ? asset($about->image) : '' }}"
                 class="h-36 w-36 object-contain" alt="Logo">
        </a>
    </div>

    <div class="mb-6 text-base text-gray-700 leading-relaxed text-center">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-6 text-lg" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}" class="space-y-6 max-w-lg mx-auto">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" class="text-lg font-semibold" />
            <x-text-input id="email" class="block mt-2 w-full text-base p-3" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2 text-sm" />
        </div>

        <div class="flex items-center justify-end mt-6">
            <x-primary-button class="px-6 py-3 text-base">
                {{ __('Email Password Reset Link') }}
            </x-primary-button>
        </div>
    </form>


