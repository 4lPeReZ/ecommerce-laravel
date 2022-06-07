<x-app-layout>
    <div class="container py-8">
        <ul>
            @forelse ($products as $product)
                <x-product-list :product="$product" />

            @empty
                <li class="bg-fondo rounded-lg shadow-2xl">
                    <div class="p-4">
                        <p class="text-lg font-semibold text-titulo2">No coincide con ningún producto</p>
                    </div>
                </li>
            @endforelse
        </ul>

        <div class="mt-4">
            {{$products->links()}}
        </div>
    </div>
</x-app-layout>