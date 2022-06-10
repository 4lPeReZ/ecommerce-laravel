{{-- Vista principal que mostrara el carrusel de la pantalla de inicio --}}

<div class="font-roboto_reg" wire:init="loadPosts">
    @if (count($products))
        <div class="glider-contain">
            <ul class="glider-{{ $category->id }}" style="scrollbar-width: none">
                @foreach ($products as $product)
                    <li class="bg-fondo rounded-lg shadow {{ $loop->last ? '' : 'sm:mr-4' }}">
                        <article>
                            <figure>
                                <img class="h-48 w-full object-cover object-center"
                                    src="{{ Storage::url($product->images->first()->url) }}" alt="">
                            </figure>
                            <div class="py-4 px-6">
                                <h1 class="text-lg text-principal">
                                    <a href="{{ route('products.show', $product) }}">
                                        {{ Str::limit($product->name, 20) }}
                                    </a>
                                </h1>
                                <p class="font-semibold text-principal">
                                    {{ $product->price }} €
                                </p>
                            </div>
                        </article>
                    </li>
                @endforeach
            </ul>
            {{-- Botones del carrusel --}}
            <button aria-label="Previous" class="glider-prev text-fondo">«</button>
            <button aria-label="Next" class="glider-next text-fondo">»</button>
        </div>
    @else
        <div class="flex justify-center items-center">
            <div class="spinner-border animate-spin inline-block w-8 h-8 border-4 rounded-full" role="status">
                <span class="visually-hidden"></span>
            </div>
        </div>
    @endif
</div>

<style>
    .glider-contain {
        width: 75%
    }
</style>
