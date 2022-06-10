<div>
    {{-- Componente el cual muestra de manera listada o no nuestros productos referentes a una categoria y sus filtro medriante subcategorias y marcas --}}
    <div class="bg-white rounded-lg shadow-lg mb-6 font-roboto_reg">
        <div class="px-6 py-2 flex justify-between items-center">
            <h1 class="font-semibold text-titulo uppercase">{{ $category->name }}</h1>

            <div class="hidden md:block grid grid-cols-2 border border-fondo divide-x divide-separador text-principal">
                <i class="fas fa-border-all text-principal p-3 cursor-pointer {{ $view == 'grid' ? 'text-backgroundfooter' : '' }}"
                    wire:click="$set('view', 'grid')"></i>
                <i class="fas fa-th-list p-3 text-principal cursor-pointer {{ $view == 'list' ? 'text-backgroundfooter' : '' }}"
                    wire:click="$set('view', 'list')"></i>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">

        <aside>

            <h2 class="font-semibold text-titulo text-center mb-2">Subcategorías</h2>
            <ul class="divide-y divide-separador">
                @foreach ($category->subcategories as $subcategory)
                    <li class="py-2 text-sm">
                        <a class="cursor-pointer hover:text-principal capitalize {{ $subcategoria == $subcategory->slug ? 'text-principal font-semibold' : '' }}"
                            wire:click="$set('subcategoria', '{{ $subcategory->slug }}')">{{ $subcategory->name }}
                        </a>
                    </li>
                @endforeach
            </ul>

            <h2 class="font-semibold text-titulo text-center mt-4 mb-2">Marcas</h2>
            <ul class="divide-y divide-separador">
                @foreach ($category->brands as $brand)
                    <li class="py-2 text-sm">
                        <a class="cursor-pointer hover:text-principal capitalize {{ $marca == $brand->name ? 'text-principal font-semibold' : '' }}"
                            wire:click="$set('marca', '{{ $brand->name }}')">
                            {{ $brand->name }}
                        </a>
                    </li>
                @endforeach
            </ul>

            <x-jet-button class="mt-4" wire:click="limpiar">
                Eliminar filtros
            </x-jet-button>
        </aside>

        <div class="md:col-span-2 lg:col-span-4">
            @if ($view == 'grid')

                <ul class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    @forelse ($products as $product)
                        <li class="bg-white rounded-lg shadow">
                            <article>
                                <figure>
                                    <img class="h-48 w-full object-cover object-center"
                                        src="{{ Storage::url($product->images->first()->url) }}" alt="">
                                </figure>

                                <div class="py-4 px-6">
                                    <h1 class="text-lg text-principal font-roboto_reg">
                                        <a href="{{ route('products.show', $product) }}">
                                            {{ Str::limit($product->name, 20) }}
                                        </a>
                                    </h1>

                                    <p class="font-semibold text-principal">{{ $product->price }} €</p>
                                </div>
                            </article>
                        </li>

                    @empty
                        {{--Si no coincide ningun producto con el filtro se muestra este mensahje--}}
                        <li class="md:col-span-2 lg:col-span-4">
                            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative"
                                role="alert">
                                <strong class="font-bold">Upss!</strong>
                                <span class="block sm:inline">No existe ningún producto con ese filtro.</span>
                            </div>
                        </li>
                    @endforelse
                </ul>
            @else
                <ul>
                    @forelse ($products as $product)
                        <x-product-list :product="$product" />

                    @empty
                        {{--Si no coincide ningun producto con el filtro se muestra este mensahje--}}
                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative"
                            role="alert">
                            <strong class="font-bold">Upss!</strong>
                            <span class="block sm:inline">No existe ningún producto con ese filtro.</span>
                        </div>
                    @endforelse
                </ul>
            @endif

            <div class="mt-4">
                {{ $products->links() }}
            </div>
        </div>

    </div>
</div>
