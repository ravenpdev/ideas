<button
    {{ $attributes->merge(['type' => 'sbumit', 'class' => 'p-1.5 px-3 text-xs border text-purple-500 border-purple-400 rounded uppercase tracking-wider hover:bg-purple-500 hover:text-white hover:border-purple-500']) }}>
    {{ $slot }}
</button>
