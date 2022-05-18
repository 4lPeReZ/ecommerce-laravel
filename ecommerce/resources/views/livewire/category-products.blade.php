<div>
    <div class="glider-contain">
        <ul class="glider" style="scrollbar-width: none">
            @foreach ($category->products as $product)
                <li class="bg-fondo rounded-lg shadow">
                    <figure>
                        <img src="{{Storage::url($product->images->first()->url)}}" alt="">
                    </figure>
                </li>
            @endforeach
        </ul>
      
        <button aria-label="Previous" class="glider-prev">«</button>
        <button aria-label="Next" class="glider-next">»</button>
        <div role="tablist" class="dots"></div>
      </div>
</div>
