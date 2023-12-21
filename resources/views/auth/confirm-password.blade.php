<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600" style="margin-bottom: 1rem;">
        {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
    </div>

    <form method="POST" action="{{ route('password.confirm') }}" style="margin-bottom: 2rem;">
        @csrf

        <!-- Password -->
        <div style="margin-bottom: 1rem;">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" 
                            style="border: 1px solid #ccc; padding: 0.5rem; border-radius: 4px;" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" style="color: #dc3545; font-size: 0.875rem;" />
        </div>

        <div class="flex justify-end mt-4">
            <x-primary-button style="background-color: #3490dc; color: #fff; padding: 0.5rem 1rem; border-radius: 4px;">
                {{ __('Confirm') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
