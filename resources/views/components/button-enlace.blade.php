{{-- componente boton creado a partir del que nos proporciona livewire --}}
<a
    {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-backgroundfooter border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-titulo2 focus:outline-none focus:border-titulo2 focus:ring focus:ring-fondo disabled:opacity-25 transition']) }}>
    {{ $slot }}
</a>
