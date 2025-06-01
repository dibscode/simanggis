<x-guest-layout>
    <div class="flex justify-center items-center min-h-screen">
        <div class="bg-white p-8 rounded-lg border border-black w-full max-w-md">

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Logo Simanggis -->
                <div class="flex justify-center mb-6">
                    <img src="{{ asset('Logo_SiMANGGIS.png') }}" alt="Logo" class="h-16 w-auto">
                </div>

                <!-- Name -->
                <div>
                    <x-input-label for="name" :value="__('Name')" class="hidden" />
                    <x-text-input id="name" name="name" type="text" :value="old('name')" required autofocus
                        autocomplete="name" placeholder="Name" class="block mt-1 w-full bg-pink-50 rounded-md" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <!-- Username -->
                <div class="mt-2">
                    <x-input-label for="username" :value="__('Username')" class="hidden" />
                    <x-text-input id="username" name="username" type="text" :value="old('username')" required
                        autocomplete="username" placeholder="Username"
                        class="block mt-1 w-full bg-pink-50 rounded-md" />
                    <x-input-error :messages="$errors->get('username')" class="mt-2" />
                </div>


                <!-- Email Address -->
                <div class="mt-2">
                    <x-input-label for="email" :value="('Email')" class="hidden" />
                    <x-text-input id="email" name="email" type="email" :value="old('email')" required
                        autocomplete="email" placeholder="Email" class="block mt-1 w-full bg-pink-50 rounded-md" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- School Name -->
                <div class="mt-2">
                    <x-input-label for="school_name" :value="__('School Name')" class="hidden" />
                    <x-text-input id="school_name" name="school_name" type="text" :value="old('school_name')" required
                        autocomplete="off" placeholder="School Name" class="block mt-1 w-full bg-pink-50 rounded-md" />
                    <x-input-error :messages="$errors->get('school_name')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mt-2">
                    <x-input-label for="password" :value="__('Password')" class="hidden" />
                    <x-text-input id="password" name="password" type="password" required autocomplete="new-password"
                        placeholder="Password" class="block mt-1 w-full bg-pink-50 rounded-md" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Confirm Password -->
                <div class="mt-2">
                    <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="hidden" />
                    <x-text-input id="password_confirmation" name="password_confirmation" type="password" required
                        autocomplete="new-password" placeholder="Confirm Password"
                        class="block mt-1 w-full bg-pink-50 rounded-md" />
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                        href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>

                    <x-primary-button
                        class="ms-3 bg-indigo-600 hover:bg-indigo-700 text-white font-semibold px-4 py-2 rounded-md shadow transition duration-150">
                        {{ __('Register') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>