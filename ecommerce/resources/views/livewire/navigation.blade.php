<header>
    <nav class="bg-background container flex flex-wrap justify-between items-center">
        <div class="container flex flex-wrap justify-between items-center content-center">
            <ul class="container flex flex-wrap justify-between items-center content-center mx mt-3 md:flex-row " style="width: 80%">
                <li class="flex items-center>
                    <a href="#" class="flex items-center">
                        <img src={{ asset('storage\Logo_2.png') }} alt="Logo" class="h-16 pr-16 pl-16" alt="Logo">
                    </a>
                </li>
                <li class="flex items-center">
                    <a href="#" class="block pl-16 text-principal">Albums</a>
                </li>
                <li class="flex items-center">
                    <a href="#" class="block text-principal">DVD-BluRay</a>
                </li>
                <li class="flex items-center">
                    <a href="#" class="block pr-16 text-principal">Merchandise</a>
                </li>
                <li class="flex items-center pr-16 pl-16">
                    @livewire('search')
                </li>
                <li class="flex items-center">
                    <a href="#" class="block pl-16 text-principal">Acceder</a>
                </li>
                <li class="flex items-center pr-16">
                    <a href="#" class="block text-principal">Carrito</a>
                </li>
            </ul>
        </div>
    </nav>
</header>
