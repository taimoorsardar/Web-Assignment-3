<x-guest-layout style="font-family: Arial, sans-serif;">
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" style="margin-bottom: 1rem;" />

    <form method="POST" action="{{ route('login') }}" style="margin-bottom: 2rem;">
        @csrf

        <!-- Email Address -->
        <div style="margin-bottom: 1rem;">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" style="border: 1px solid #ccc; padding: 0.5rem; border-radius: 4px;" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" style="color: #dc3545; font-size: 0.875rem;" />
        </div>

        <!-- Password -->
        <div class="mt-4" style="margin-top: 1rem;">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" style="border: 1px solid #ccc; padding: 0.5rem; border-radius: 4px;" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" style="color: #dc3545; font-size: 0.875rem;" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4" style="margin-top: 1rem;">
            <label for="remember_me" class="inline-flex items-center" style="display: inline-flex; align-items: center;">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4" style="margin-top: 1rem;">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}" style="text-decoration: underline; color: #3490dc;">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3" style="background-color: #3490dc; color: #fff; padding: 0.5rem 1rem; border-radius: 4px;">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
