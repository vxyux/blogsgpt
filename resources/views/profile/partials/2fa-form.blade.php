<section class="space-y-6">
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Delete Account') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
        </p>
    </header>

    <x-primary-button
        x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'user-2fa')"
    >{{ __('Configure 2FA') }}</x-primary-button>

    <x-modal name="user-2fa" focusable>
        <form method="get" action="{{ route('profile.qr') }}" class="p-6">
            @csrf
            @method('get')

            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                {{ __('Setup 2FA') }}
            </h2>

            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                {{ __('Setting up 2FA on your account increases overall
                       security that prevents hackers from getting in.
                       Install an authenticator (Google, Authy, etc) on
                       your mobile device. Scan the QR code and follow the prompts.') }}
            </p>

            <br>

            <img src="{{ asset('media/qr-code.png') }}" class="invert mx-auto" alt="">

            <div class="mt-6 flex justify-end">
                <x-secondary-button x-on:click="$dispatch('close')">
                    {{ __('Cancel') }}
                </x-secondary-button>

                <x-danger-button class="ml-3">
                    {{ __('Scanned it') }}
                </x-danger-button>
            </div>
        </form>
    </x-modal>
</section>
