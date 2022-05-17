@props(['size' => 6, 'color' => 'principal'])

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
    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
</svg>