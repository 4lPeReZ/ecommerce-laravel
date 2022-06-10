@props(['product'])
{{-- componente para mostrar de manera listada los productos que pertenecen a una categoria --}}
<li class="bg-fondo rounded-lg shadow mb-4">
    <article class="md:flex">
        <figure>
            <img class="h-48 w-full md:w-56 object-cover object-center"
                src="{{ Storage::url($product->images->first()->url) }}" alt="">
        </figure>
        <div class="flex-1 py-4 px-6 flex flex-col">
            <div class="lg:flex justify-between">
                <div>
                    <h1 class="text-lg text-principal">{{ $product->name }}</h1>
                    <p class="font-bold text-principal">{{ $product->price }} €</p>
                </div>
                <div class="flex items-center">
                    <ul class="flex">
                        <li class="flex text-titulo text-sm">
                            {{ round($product->reviews->avg('rating'), 1) }}
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1 mr-1" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                            </svg>
                        </li>
                    </ul>
                    <span class="text-titulo text-sm">{{ $product->reviews->count() }} reseñas</span>
                </div>
            </div>

            <div class="mt-4 md:mt-auto mb-6">
                <x-button-enlace href="{{ route('products.show', $product) }}" class="bg-backgroundfooter text-fondo">
                    Mas información
                </x-button-enlace>
            </div>
        </div>
    </article>
</li>
