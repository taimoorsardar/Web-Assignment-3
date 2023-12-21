<x-guest-layout style="font-family: Arial, sans-serif;">
    <div class="mb-4 text-sm text-gray-600" style="margin-bottom: 1rem; color: #4b5563; font-size: 0.875rem;">
        {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
    </div>

    @if (session('status') == 'verification-link-sent')
        <div class="mb-4 font-medium text-sm text-green-600" style="margin-bottom: 1rem; font-weight: 500; color: #059669; font-size: 0.875rem;">
            {{ __('A new verification link has been sent to the email address you provided during registration.') }}
        </div>
    @endif

    <div class="mt-4 flex items-center justify-between" style="margin-top: 1rem; display: flex; align-items: center; justify-content: space-between;">
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf

            <div>
                <x-primary-button style="background-color: #3490dc; color: #fff; padding: 0.5rem 1rem; border-radius: 4px;">
                    {{ __('Resend Verification Email') }}
                </x-primary-button>
            </div>
        </form>

        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" style="text-decoration: underline; color: #4b5563; font-size: 0.875rem; cursor: pointer;">
                {{ __('Log Out') }}
            </button>
        </form>
    </div>
</x-guest-layout>
