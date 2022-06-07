<x-app-layout>
    <h1 class="font-abril text-center mt-8 text-3xl xl:text-6xl ">NOVEDADES</h1>
    <div class="container py-8 font-roboto_reg content-center">
        @foreach ($categories as $category)
            <section class="mb-6 py-6">
                <div class="flex items-center mb-2 mr-auto ml-auto w-3/4">
                    <h1 class="text-lg uppercase font-semibold text-titulo">
                        {{ $category->name }}
                    </h1>
                    <a href="{{route('categories.show', $category)}}" class="text-titulo2 text-xs hover:text-backgroundfooter hover:underline ml-2">Ver más</a>
                </div>
                @livewire('category-products', ['category' => $category])
            </section>
        @endforeach
    </div>

    @push('script')
        <script>
            Livewire.on('glider', function(id) {

                new Glider(document.querySelector('.glider-' + id), {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    draggable: true,
                    dots: '.glider-' + id + '~ .dots',
                    arrows: {
                        prev: '.glider-' + id + '~ .glider-prev',
                        next: '.glider-' + id + '~ .glider-next'
                    },
                    responsive: [
                        {
                            breakpoint: 370,
                            settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1,
                            }
                        },
                        {
                            breakpoint: 640,
                            settings: {
                                slidesToShow: 2,
                                slidesToScroll: 2,
                            }
                        },
                        {
                            breakpoint: 768,
                            settings: {
                                slidesToShow: 3,
                                slidesToScroll: 3,
                            }
                        },
                        {
                            breakpoint: 1024,
                            settings: {
                                slidesToShow: 4,
                                slidesToScroll: 4,
                            }
                        },
                        {
                            breakpoint: 1280,
                            settings: {
                                slidesToShow: 5,
                                slidesToScroll: 5,
                            }
                        },
                    ]
                });
            });
        </script>
    @endpush

</x-app-layout>