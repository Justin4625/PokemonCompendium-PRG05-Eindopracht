<section class="bg-gray-800 p-6 rounded-lg shadow-lg max-w-md mx-auto mb-8">
    <header>
        <h2 class="text-2xl font-bold text-gray-100">
            {{ __('Update Password') }}
        </h2>
        <p class="mt-1 text-sm text-gray-400">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <div>
            <x-input-label for="update_password_current_password" :value="__('Current Password')" class="text-white font-semibold" />
            <x-text-input id="update_password_current_password" name="current_password" type="password" class="mt-1 block w-full p-2 bg-gray-700 text-white rounded-md" autocomplete="current-password" />
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="update_password_password" :value="__('New Password')" class="text-white font-semibold" />
            <x-text-input id="update_password_password" name="password" type="password" class="mt-1 block w-full p-2 bg-gray-700 text-white rounded-md" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="update_password_password_confirmation" :value="__('Confirm Password')" class="text-white font-semibold" />
            <x-text-input id="update_password_password_confirmation" name="password_confirmation" type="password" class="mt-1 block w-full p-2 bg-gray-700 text-white rounded-md" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-md transition duration-300">
                {{ __('Save') }}
            </x-primary-button>

            @if (session('status') === 'password-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-400"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
