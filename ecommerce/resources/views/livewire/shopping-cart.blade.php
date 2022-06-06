<div class="container py-8 min-h-[75vh]">
    <x-table-responsive class="bg-fondo rounded-lg shadow-lg p-6 text-principal">
        <div class="px-6 py-4 bg-fondo">
            <h1 class="text-lg text-titulo font-semibold">CARRITO DE COMPRAS</h1>
        </div>

        @if (Cart::count())

            <table class="table-auto w-full">
                <thead>
                    <tr>
                    <th scope="col"
                        class="px-6 py-3 text-left text-xs font-medium text-titulo uppercase tracking-wider">
                        Nombre
                    </th>
                    <th scope="col"
                        class="px-6 py-3 text-left text-xs font-medium text-titulo uppercase tracking-wider">
                        Precio
                    </th>
                    <th scope="col"
                        class="px-6 py-3 text-left text-xs font-medium text-titulo uppercase tracking-wider">
                        Cantidad
                    </th>
                    <th scope="col"
                        class="px-6 py-3 text-left text-xs font-medium text-titulo uppercase tracking-wider">
                        Total
                    </th>
                </tr>
                </thead>
                <tbody class="bg-fondo divide-y divide-gray-200">
                    @foreach (Cart::content() as $item)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10">
                                        <img class="h-15 w-20 rounded-full object-cover object-center mr-4" src={{$item->options->image}}"" alt="">
                                    </div>
                                    <div>
                                        <p class="font-bold text-principal">{{$item->name}}</p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-principal">
                                <span>{{ $item->price }} €</span>
                                <a class="ml-6 cursor-pointer hover:text-red-600"
                                    wire:click="delete('{{$item->rowId}}')"
                                    wire:loading.class="text-red-600 opacity-25"
                                    wire:target="delete('{{$item->rowId}}')">
                                    <i class="fas fa-trash"></i>  
                                </a>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-principal">
                                <div class="text-sm text-titulo2">
                                    @livewire('update-cart-item', ['rowId' => $item->rowId], key($item->rowId)) 
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-principal">
                                <div class="text-sm text-titulo2">
                                    {{$item->price * $item->qty}} €
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="px-6 py-4">
                <a class="text-sm cursor-pointer text-principal hover:underline mt-3 inline-block" 
                    wire:click="destroy">
                    <i class="fas fa-trash"></i>
                    Borrar carrito de compras
                </a>
            </div>
 
        @else
            <div class="flex flex-col items-center">
                <x-cart />
                <p class="text-lg text-titulo mt-4">TU CARRO DE COMPRAS ESTÁ VACÍO</p>

                <x-button-enlace href="/" class="mt-4 px-16">
                    Ir al inicio
                </x-button-enlace>
            </div>
        @endif
        
    </x-table-responsive>


    @if (Cart::count())

        <div class="bg-fondo rounded-lg shadow-lg px-6 py-4 mt-4">
            <div class="flex justify-between items-center">
                <div>
                    <p class="text-titulo">
                        <span class="font-bold text-lg">Total:</span>
                        {{ Cart::subTotal() }} €
                    </p>
                </div>

                <div>
                    <x-button-enlace href="{{route('orders.create')}}">
                        Continuar
                    </x-button-enlace>
                </div>
            </div>
        </div>

    @endif
</div>
