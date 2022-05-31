<header class="bg-fondo sticky z-50 top-0" x-data="dropdown()">
    <div class="container flex flex-wrap justify-between items-center content-cente md:justify-start">
        <ul class="container flex flex-wrap justify-between items-center content-center mx mt-1 mb-1 md:flex-row "
            style="width: 90%">
            <li class="flex items-center>
                <a href=" #" class="flex items-center">
                <img src={{ asset('storage\Logo_2.png') }} alt="Logo"
                    class="h-16 pr-16 pl-16 md:pr-10 md:pl-10 s:pr-5 s:pl-5 " alt="Logo">
                </a>
            </li>

            @foreach ($categories as $category)
                <li class="flex items-center text-principal">
                    <div class="flex-1 hidden xl:block">
                        <a href="{{route('categories.show', $category)}}" class="py-2 px-4 text-sm flex items-center ">
                            {{ $category->name }}
                        </a>
                    </div>
                </li>
            @endforeach

            <li class="flex items-center pr-16 pl-16">
                <div class="flex-1 hidden xl:block">
                    @livewire('search')
                </div>
            </li>
            <li class="flex items-center ">
                <div class="flex-1 hidden xl:block">
                    <div class="ml-3 relative">
                        @auth
                            <x-jet-dropdown align="right" width="48">
                                <x-slot name="trigger">
                                    <button
                                        class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                        <img class="h-8 w-8 rounded-full object-cover"
                                            src="{{ Auth::user()->profile_photo_url }}"
                                            alt="{{ Auth::user()->name }}" />
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

                                        <x-jet-dropdown-link href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                        this.closest('form').submit();">
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
                </div>
            </li>
            <li class="flex items-center pr-16 md:pr-10 s:pr-2">
                @livewire('dropdown-cart')
            </li>
            <li class="flex items-center order-last md:px-4 s:pl-2 s:pr-5 xl:hidden">
                <a x-on:click="show()"
                    class="flex flex-col items-center justify-center order-last bg-white bg-opacity-25 text-white cursor-pointer h-full">
                    <svg class="h-6 w-6 cursor-pointer" style="stroke: gray" fill="none" viewBox="0 0 24 24">
                        <path class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </a>
            </li>
        </ul>
    </div>

    <nav id="navigation-menu" :class="{ 'block': open, 'hidden': !open }"
        class="bg-backgroundfooter bg-opacity-25 w-full absolute hidden">

        <div class="bg-white w-full overflow-y-auto " style="height: 15.5rem">
            <div class="px-3 py-3 mb-2 w-full bg-backgroundfooter">
                @livewire('search')
            </div>
            <ul>
                @foreach ($categories as $category)
                    <li class="text-principal hover:bg-backgroundfooter hover:text-fondo">
                        <a href="{{route('categories.show', $category)}}" class="py-2 px-4 text-sm flex items-center">
                            {{ $category->name }}
                        </a>
                    </li>
                @endforeach
            </ul>
            <div class="bg-separador h-px" ></div>
            @auth
                <div class="text-principal hover:bg-backgroundfooter hover:text-fondo">
                    <a href="{{ route('profile.show') }}" class="py-2 px-4 text-sm flex items-center">
                        Perfil
                    </a>
                </div>
                <div class="text-principal hover:bg-backgroundfooter hover:text-fondo">
                    <a href="" onclick="event.preventDefault(); document.getElementById('logout-form').submit()"
                        class="py-2 px-4 text-sm flex items-center">
                        Cerrar sesión

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                            @csrf
                        </form>
                    </a>
                </div>

            @else
            <div class="text-principal hover:bg-backgroundfooter hover:text-fondo">
                <a href="{{ route('login') }}" class="py-2 px-4 text-sm flex items-center">
                    Iniciar sesión
                </a>
            </div>
            <div class="text-principal hover:bg-backgroundfooter hover:text-fondo">
                <a href="{{ route('register') }}" class="py-2 px-4 text-sm flex items-center">
                    Registrate
                </a>
            </div>
            @endauth
        </div>
    </nav>
    <div class="bg-separador h-px" />
</header>
