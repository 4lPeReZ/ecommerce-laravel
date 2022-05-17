<header class="bg-fondo sticky top-0">
    <div class="container flex flex-wrap justify-between items-center content-center">
        <ul class="container flex flex-wrap justify-between items-center content-center mx mt-1 mb-1 md:flex-row "
            style="width: 85%">
            <li class="flex items-center>
                    <a href=" #" class="flex items-center">
                <img src={{ asset('storage\Logo_2.png') }} alt="Logo" class="h-16 pr-16 pl-16" alt="Logo">
                </a>
            </li>
            <li class="flex items-center">
                @livewire('dropdown-albums')
            </li>
            <li class="flex items-center">
                @livewire('dropdown-dvd-blurays')
            </li>
            <li class="flex items-center">
                @livewire('dropdown-merchandise')
            </li>
            <li class="flex items-center pr-16 pl-16">
                @livewire('search')
            </li>
            <li class="flex items-center pl-16">
                <div class="ml-3 relative">
                    @auth
                        <x-jet-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                <button
                                    class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                    <img class="h-8 w-8 rounded-full object-cover"
                                        src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                </button>
                            </x-slot>

                            <x-slot name="content">
                                <!-- Account Management -->
                                <div class="block px-4 py-2 text-xs text-gray-400">
                                    {{ __('Manage Account') }}
                                </div>

                                <x-jet-dropdown-link href="{{ route('profile.show') }}">
                                    {{ __('Profile') }}
                                </x-jet-dropdown-link>


                                <div class="border-t border-gray-100"></div>

                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}" x-data>
                                    @csrf

                                    <x-jet-dropdown-link href="{{ route('logout') }}" @click.prevent="$root.submit();">
                                        {{ __('Log Out') }}
                                    </x-jet-dropdown-link>
                                </form>
                            </x-slot>
                        </x-jet-dropdown>
                    @else
                        <x-jet-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 cursor-pointer" fill="none"
                                    viewBox="0 0 24 24" stroke="#585859" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </x-slot>

                            <x-slot name="content">
                                <x-jet-dropdown-link href="{{ route('login') }}">
                                    {{ __('Login') }}
                                </x-jet-dropdown-link>
                                <x-jet-dropdown-link href="{{ route('register') }}">
                                    {{ __('Register') }}
                                </x-jet-dropdown-link>
                            </x-slot>
                        </x-jet-dropdown>
                    @endauth
                </div>
            </li>
            <li class="flex items-center pr-16">
                @livewire('dropdown-cart')
            </li>
        </ul>
    </div>
    <div class="bg-separador h-px"/>
</header>
