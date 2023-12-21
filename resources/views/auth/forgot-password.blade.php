<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600" style="margin-bottom: 1rem;">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}" style="margin-bottom: 2rem;">
        @csrf

        <!-- Email Address -->
        <div style="margin-bottom: 1rem;">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus style="border: 1px solid #ccc; padding: 0.5rem; border-radius: 4px;" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" style="color: #dc3545; font-size: 0.875rem;" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button style="background-color: #3490dc; color: #fff; padding: 0.5rem 1rem; border-radius: 4px;">
                {{ __('Email Password Reset Link') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
