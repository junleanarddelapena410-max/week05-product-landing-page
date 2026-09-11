@props([
    'variant' => 'primary', // primary | secondary | ghost
    'href' => null,
    'type' => 'button',
])

@php
    $base = 'inline-flex items-center justify-center px-6 py-3 rounded-xl font-medium text-sm transition-all duration-200 shadow-sm';

    $variants = [
        'primary'   => 'bg-stone-900 text-white hover:bg-amber-700 hover:shadow-md active:scale-[0.98]',
        'secondary' => 'bg-white text-stone-900 border border-stone-300 hover:border-amber-600 hover:text-amber-700 active:scale-[0.98]',
        'ghost'     => 'text-stone-700 hover:text-amber-700',
    ];

    $classes = $base . ' ' . ($variants[$variant] ?? $variants['primary']);
@endphp

@if($href)
    <a href="{{ $href }}" {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </a>
@else
    <button type="{{ $type }}" {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </button>
@endif
