<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-peach border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-opacity-80 focus:bg-opacity-80 active:bg-opacity-90 focus:outline-none focus:ring-2 focus:ring-peach focus:ring-offset-2 transition ease-in-out duration-150', 'style' => 'background-color: var(--color-peach);']) }}>
    {{ $slot }}
</button>
