
<div class="min-h-screen flex">

<!-- Logo -->

<div class="flex w-full max-w-5xl mx-auto">

    <!-- Gambar di sebelah kiri -->

    <div class="w-1/2 hidden md:flex items-center justify-center">
        <img src="{{ asset('logo-icon.png') }}" alt="Login Image" class="max-h-full max-w-full object-cover">
    </div>
    
    <!-- Form login -->
     
    <div class="w-1/2 flex items-center justify-center">
        

            <x-guest-layout>
                
                <div class="flex justify-center mb-6">
                    <img src="{{ asset('Logo_SiMANGGIS.png') }}" alt="Logo" class="h-16 w-auto">
                </div>

                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />
                
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    
                    <!-- Email Address -->
                    <div>
                        <x-input-label for="email" :value="('Email')" class="hidden" />
                        <x-text-input 
                    id="email" 
                    name="email" 
                    type="email" 
                    :value="old('email')"
                    required autofocus autocomplete="username"
                    placeholder="Email"
                    class="block mt-1 w-full bg-pink-50 rounded-md" 
                    />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
                    
                    <!-- Password -->
                    <div class="mt-4">
                    <x-input-label for="password" :value="('Password')" class="hidden"/>
                    <x-text-input 
                    id="password" 
                    name="password" 
                    type="password" 
                    :value="old('email')"
                    required autocomplete="current-password"
                    placeholder="Password"
                    class="block mt-1 w-full bg-pink-50 rounded-md" 
                    />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>
                    
                    <!-- Remember Me -->
                    <div class="block mt-4">
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                            <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                        </label>
                    </div>
                    
                    <!-- Buttons -->
                    <div class="flex items-center justify-between mt-6">
                        @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                        @endif
                        
                        <x-primary-button class="ms-3 bg-indigo-600 hover:bg-indigo-700 text-white font-semibold px-4 py-2 rounded-md shadow transition duration-150">
                            {{ __('Log in') }}
                        </x-primary-button>
                    </div>
                </form>
            </x-guest-layout>
        </div>
    </div>
</div>
