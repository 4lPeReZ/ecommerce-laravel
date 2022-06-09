<button {{ $attributes->merge(['type' => 'button', 'class' => 'inline-flex items-center px-4 py-2 bg-white border border-fondo rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:text-principal focus:outline-none focus:border-blue-300 focus:ring focus:ring-blue-200 active:text-titulo2 active:bg-gray-50 disabled:opacity-25 transition']) }}>
    {{ $slot }}
</button>
