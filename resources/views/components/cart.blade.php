@props(['size' => 6, 'color' => 'principal']) {{-- componente boton creado a partir del que nos proporciona livewire --}}

@php
    switch ($color) {
        case 'principal':
            $col = '#585859';
            break;

        case 'secundario':
            $col = '#3F3F40';
            break;
        
        default:
            $col = '#585859';
            break;
    }


@endphp


<svg xmlns="http://www.w3.org/2000/svg" class="h-{{$size}} w-{{$size}}" fill="none" viewBox="0 0 24 24" stroke="{{$col}}" stroke-width="2">
    <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
</svg>