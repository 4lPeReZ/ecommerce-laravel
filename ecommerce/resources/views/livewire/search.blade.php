<div class="flex-1 relative" x-data>

    <form action="{{route('search')}}" autocomplete="off">
        <x-jet-input name='name' style="width: 25rem" wire:model="search" type="text" placeholder="Buscador..."/>

        <button class="absolute top-0 right-0 w-10 h-10 bg-background flex items-center justify-center">
            <x-search size="5" />
        </button>
    </form>

    <div class="absolute w-full mt-1 hidden" :class="{ 'hidden' : !$wire.open }" @click.away="$wire.open = false">
        <div class="bg-fondo rounded-lg shadow">
            <div class="px-4 py-3 space-y-1">
                @forelse ($products as $product)
                    <a href="{{route('products.show', $product)}}" class="flex">
                        <img class="w-16 h-12 object-cover" src="{{Storage::url($product->images->first()->url)}}" alt="">
                        <div class="ml-4 text-titulo">
                            <p class="text-lg font-semibold leading-5">{{$product->name}}</p>
                            <p>Categoría: {{$product->subcategory->category->name}}</p>
                        </div>
                    </a>
                @empty
                    <p class="text-lg leading-5">No existe ningún producto con estos parametros</p>
                @endforelse
            </div>
        </div>
    </div>
</div>
