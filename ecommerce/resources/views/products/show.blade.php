<x-app-layout>
    <div class="container py-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-6">
            <div>
                <div class="flexslider">
                    <ul class="slides">
                        @foreach ($product->images as $image)
                            <li data-thumb="{{Storage::url($image->url)}}">
                                <img src="{{Storage::url($image->url)}}"/>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div>
                <h1 class="text-xl font-bold text-titulo">
                    {{$product->name}}
                </h1>
                <div class="flex">
                    <p class="text-titulo">Marca: <a class="underline capitalize hover:text-backgroundfooter" href="">{{$product->brand->name}}</a></p>
                    <div class="text-titulo2 mx-6">
                        5
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 cursor-pointer inline-block" fill="none" viewBox="0 0 24 24" stroke="black" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                          </svg>
                    </div>
                    <a class="text-titulo2 underline hover:text-backgroundfooter" href="">39 reseñas</a>
                </div>
                <p class="text-2xl font-semibold text-titulo2 my-4">
                    {{$product->price}} €
                </p>
                <div class="text-gray-700 mb-4">
                    <h2 class="font-bold text-lg">
                        Descripción
                    </h2>
                    {!!$product->description!!}
                </div>
                <div class="bg-fondo rounded-lg shadow-lg mb-6">
                    <div class="p-4 flex items-center">
                        <span class="flex items-center justify-center h-10 w-10 rounded-full bg-footerprincipal">
                            <i class="fas fa-truck text-sm text-backgroundfooter"></i>
                        </span>
                        <div class="ml-4">
                            <p class="text-lg font-semibold text-titulo2">Se hace envios a toda España</p>
                            <p class="capitalize">Recibelo el {{Date::now()->addDay(7)->locale('es')->format('l j F')}}</p>
                        </div>
                    </div>
                </div>
                @livewire('add-cart-item', ['product' => $product])

            </div>
        </div>
    </div>

    @push('script')
        <script>
            $(document).ready(function() {
                $('.flexslider').flexslider({
                    animation: "slide",
                    controlNav: "thumbnails"
                });
            });
        </script>
    @endpush
</x-app-layout>
