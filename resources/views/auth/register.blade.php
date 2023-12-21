<x-guest-layout style="font-family: Arial, sans-serif;">
    <form method="POST" action="{{ route('register') }}" style="margin-bottom: 2rem;">
        @csrf

        <!-- Name -->
        <div style="margin-bottom: 1rem;">
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" style="border: 1px solid #ccc; padding: 0.5rem; border-radius: 4px;" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" style="color: #dc3545; font-size: 0.875rem;" />
        </div>

        <!-- Email Address -->
        <div class="mt-4" style="margin-top: 1rem;">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" style="border: 1px solid #ccc; padding: 0.5rem; border-radius: 4px;" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" style="color: #dc3545; font-size: 0.875rem;" />
        </div>

        <!-- Password -->
        <div class="mt-4" style="margin-top: 1rem;">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" style="border: 1px solid #ccc; padding: 0.5rem; border-radius: 4px;" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" style="color: #dc3545; font-size: 0.875rem;" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4" style="margin-top: 1rem;">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" style="border: 1px solid #ccc; padding: 0.5rem; border-radius: 4px;" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" style="color: #dc3545; font-size: 0.875rem;" />
        </div>

        <div class="flex items-center justify-end mt-4" style="margin-top: 1rem;">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}" style="text-decoration: underline; color: #3490dc;">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4" style="background-color: #3490dc; color: #fff; padding: 0.5rem 1rem; border-radius: 4px;">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
