<x-guest-layout>
    <div class="registration-container">
        <div class="registration-heading">
            {{ __('Register') }}
        </div>

        <form method="POST" action="{{ route('register') }}" class="registration-form">
            @csrf

            <!-- Name -->
            <div class="input-field">
                <x-input-label for="name" :value="__('Name')" class="input-label" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="input-error" />
            </div>

            <!-- Email Address -->
            <div class="input-field">
                <x-input-label for="email" :value="__('Email')" class="input-label" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="input-error" />
            </div>

            <!-- Password -->
            <div class="input-field">
                <x-input-label for="password" :value="__('Password')" class="input-label" />
                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                <x-input-error :messages="$errors->get('password')" class="input-error" />
            </div>

            <!-- Confirm Password -->
            <div class="input-field">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="input-label" />
                <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                <x-input-error :messages="$errors->get('password_confirmation')" class="input-error" />
            </div>

            <div class="form-footer">
                <a href="{{ route('login') }}" class="text-sm">
                    {{ __('Already registered?') }}
                </a>
                <x-primary-button class="primary-button">
                    {{ __('Register') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</x-guest-layout>
