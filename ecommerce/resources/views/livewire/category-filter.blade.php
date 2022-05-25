<div>
    <div class="bg-backgorund rounded-lg shadow-lg mb-6">
        <div class="px-6 py-2 flex justify-between items-center">
            <h1 class="font-semibold text-titulo uppercase">{{ $category->name }}</h1>
            <div class="grid grid-cols-2 border border-gray text-titulo">
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="m-2 h-6 w-6 cursor-pointer {{ $view == 'grid' ? 'stroke-black' : '' }}"
                    wire:click="$set('view', 'grid')" fill="none" viewBox="0 0 24 24" stroke="#585859" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="m-2 h-6 w-6 cursor-pointer {{ $view == 'list' ? 'stroke-black' : '' }}"
                    wire:click="$set('view', 'list')" fill="none" viewBox="0 0 24 24" stroke="#585859" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 10h16M4 14h16M4 18h16" />
                </svg>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">
        <aside>

            <h2 class="font-semibold mb-2 text-left">Subcategorias</h2>
            <ul class="divide-y divide-gray">
                @foreach ($category->subcategories as $subcategory)
                    <li class="py-2 text-sm">
                        <a class="cursor-pointer hover:text-titulo capitalize {{ $subcategoria == $subcategory->name ? 'text-titulo2 font-bold' : '' }}"
                            wire:click="$set('subcategoria','{{ $subcategory->name }}')">
                            {{ $subcategory->name }}
                        </a>
                    </li>
                @endforeach
            </ul>

            <h2 class="font-semibold mb-2 mt-4 text-left">Marcas</h2>
            <ul class="divide-y divide-gray">
                @foreach ($category->brands as $brand)
                    <li class="py-2 text-sm">
                        <a class="cursor-pointer hover:text-titulo capitalize {{ $marca == $brand->name ? 'text-titulo2 font-bold' : '' }}"
                            wire:click="$set('marca','{{ $brand->name }}')">
                            {{ $brand->name }}
                        </a>
                    </li>
                @endforeach
            </ul>

            <x-jet-button class="mt-4" wire:click="limpiar">
                Eliminar Filtros
            </x-jet-button>
        </aside>
        <div class="md:col-span-2 lg:col-span-4">
            @if ($view == 'grid')
                <ul class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    @foreach ($products as $product)
                        <li class="bg-fondo rounded-lg shadow">
                            <article>
                                <figure>
                                    <img class="h-48 w-full object-cover object-center"
                                        src="{{ Storage::url($product->images->first()->url) }}" alt="">
                                </figure>
                                <div class="py-4 px-6">
                                    <h1 class="text-lg font-semibold text-titulo">
                                        <a href="{{route('products.show', $product)}}">
                                            {{ Str::limit($product->name, 20) }}
                                        </a>
                                    </h1>
                                    <p class="font-bold text-titulo2">
                                        {{ $product->price }}€
                                    </p>
                                </div>
                            </article>
                        </li>
                    @endforeach
                </ul>
            @else
                <ul>
                    @foreach ($products as $product)
                        <x-product-list :product="$product" />
                    @endforeach
                </ul>
            @endif

            <div class="mt-4">
                {{ $products->links() }}
            </div>
        </div>
    </div>
</div>
