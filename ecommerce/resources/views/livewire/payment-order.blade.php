<div>
    
    <div class="grid min-h-[75vh] grid-cols-1 lg:grid-cols-2 xl:grid-cols-5 gap-6 container py-8">

        <div class="xl:col-span-3">
            <div class="bg-fondo rounded-lg shadow-lg px-6 py-4 mb-6">
                <p class="text-titulo uppercase"><span class="font-semibold">Numero de pedido:</span> Pedido-{{$order->id}}</p>
            </div>
    
            <div class="bg-fondo rounded-lg shadow-lg p-4 mb-4">
                <div class="grid grid-cols-2 gap-6 text-titulo">
                    <div>
                        <p class="text-md xl:text-lg font-semibold uppercase">Envio</p>
    
                        @if ($order->shipping_type == 1)
                            <p class="text-sm">Los productos deben ser recogidos en tienda</p>
                            <p class="text-sm">Calle falsa 123</p>
                        @else
                            <p class="text-sm">Los productos seran enviados a:</p>
                            <p class="text-sm">{{$shipping->address}}</p>
                            <p>{{$shipping->department}} - {{$shipping->city}} - {{$shipping->district}}</p>
                        @endif
    
                    </div>
                    <div>
                        <p class="text-md xl:text-lg font-semibold uppercase">Contacto</p>
    
                        <p class="text-sm">Persona que recibira el producto: {{$order->contact}}</p>
                        <p class="text-sm">Telefono de contacto: {{$order->phone}}</p>
                    </div>
                </div>
            </div>
    
            <div class="bg-fondo rounded-lg shadow-lg p-6 text-titulo2 mb-6">
                <p class="text-xl font-semibold mb-4">Resumen</p>
    
                <table class="table-auto w-full">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Precio</th>
                            <th>Cantidad</th>
                            <th>Total</th>
                        </tr>
                    </thead>
    
                    <tbody class="divide-y divide-separador">
                        @foreach ($items as $item)
                            <tr>
                                <td>
                                    <div class="flex">
                                        <img class="h-15 w-20 object-cover mr-4 " 
                                            src="{{$item->options->image}}" alt="">
                                        <article>
                                            <h1 class="font-bold">
                                                {{$item->name}}
                                            </h1>
                                        </article>
                                    </div>
                                </td>
                                <td class="text-center text-sm xl:text-lg">
                                    {{$item->price}} €
                                </td>
                                <td class="text-center text-sm xl:text-lg">
                                    {{$item->qty}}
                                </td>
                                <td class="text-center text-sm xl:text-lg">
                                    {{$item->price * $item->qty}} €
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
    
            
        </div>

        <div class="xl:col-span-2">
            <div class="bg-fondo rounded-lg shadow-lg px-6 pt-6">
                <div class="flex justify-between items-center mb-4">
                    <img class="h-8" src="{{asset('img/visa-mastercard.png')}}" alt="">
                    <div>
                        <p class="text-sm font-semibold">
                            Subtotal: {{$order->total - $order->shipping_cost}} €
                        </p>
                        <p class="text-sm font-semibold">
                            Envio: {{$order->shipping_cost}} €
                        </p>
                        <p class="text-lg font-semibold uppercase">
                            Total: {{$order->total}} €
                        </p>
                    </div>
                </div>

                <div id="paypal-button-container"></div>
            </div>
        </div>

    </div>

    @push('script')

    <script src="https://www.paypal.com/sdk/js?client-id={{config('services.paypal.client_id')}}"></script>

    <script>

        paypal.Buttons({
  
  
          createOrder: (data, actions) => {
  
            return actions.order.create({
  
              purchase_units: [{
  
                amount: {
  
                  value: "{{$order->total}}" // Can also reference a variable or function
  
                }
  
              }]
  
            });
  
          },
  
          // Finalize the transaction after payer approval
  
          onApprove: (data, actions) => {
  
            return actions.order.capture().then(function(orderData) {
  
                Livewire.emit('payOrder');
              /* console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
  
              const transaction = orderData.purchase_units[0].payments.captures[0];
  
              alert(`Transaction ${transaction.status}: ${transaction.id}\n\nSee console for all available details`); */
  
  
            });
  
          }
  
        }).render('#paypal-button-container');
  
      </script>

    @endpush

</div>
