@props(['color' => '$color'])

<a {{ $attributes->merge(['type' => 'submit', 'class' => "justify-center inline-flex items-center px-4 py-2 bg-backgroundfooter border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-$color-500 active:bg-$color-900 focus:outline-none focus:border-$color-500 focus:ring focus:ring-$color-500 disabled:opacity-25 transition"]) }}>
    {{ $slot }}
</a>
