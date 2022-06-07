<x-guest-layout>

    <x-jet-authentication-card class="w-min-[50vh]">
        <x-slot name="titulo">
            <h1 class="font-sans font-semibold text-center mb-4 text-3xl">Acceder</h1>
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" pattern="^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" pattern="^(?=\w*\d)(?=\w*[A-Z])(?=\w*[a-z])\S{8,16}$" required autocomplete="current-password" />
            </div>

            <div class="flex mt-4">
                <label for="remember_me" class="mr-auto">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
                <div class="ml-auto">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif
                </div>
            </div>

            <div class="flex w-full items-center mt-4 mb-4">
                <x-jet-button class="w-full justify-center">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
        <div class="w-full">
            <p class="text-center">o</p>
            <x-jet-button class="w-full mt-4 mb-4">
                <a href="{{ route('register') }}" class="w-full text-sm fle text-center items-center">
                    Crear una cuenta
                </a>
            </x-jet-button>
        </div>


    </x-jet-authentication-card>

</x-guest-layout>