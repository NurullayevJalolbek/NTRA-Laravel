<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <!-- Name -->
        <div>
            <x-input-label for="first_name" :value="__('First Name')" />
            <x-text-input id="first_name" class="block mt-1 w-full" type="text" name="first_name" :value="old('first_name')" required autofocus autocomplete="first_name" />
            <x-input-error :messages="$errors->get('first_name')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="last_name" :value="__('Last Name')" />
            <x-text-input id="last_name" class="block mt-1 w-full" type="text" name="last_name" :value="old('last_name')" required autocomplete="last_name" />
            <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
        </div>


        <!--phone -->
        <div class="flex items-center space-x-2">
            <x-input-label for="phone_prefix" :value="__('phone')" />
            <input
                id="phone_prefix"
                type="text"
                value="+998"
                readonly
                class="block mt-1 w-auto text-center border border-gray-300 rounded-lg py-1 px-2 bg-gray-100"
                style="min-width: 10px;" />

            <x-text-input
                id="phone"
                class="block mt-1 w-full rounded-lg"
                type="text"
                name="phone"
                :value="old('phone')"
                required
                autofocus
                autocomplete="tel"
                placeholder="Telefon raqami"
                oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 9);" /> <!-- Faqat raqamlarni qabul qilish va maksimal uzunlikni 9 ta raqam bilan cheklash -->

            <x-input-error :messages="$errors->get('phone')" class="mt-2" />

        </div>







        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
