@props([
    'name' => 'Bundle',
    'price' => '$0',
    'features' => [],
    'highlighted' => false,
    'cta' => 'Shop Now',
])

<div class="relative rounded-2xl p-8 border transition-all duration-200
    {{ $highlighted ? 'bg-stone-900 border-stone-900 text-white shadow-xl scale-[1.03]' : 'bg-white border-stone-200 hover:shadow-lg' }}">

    @if($highlighted)
        <span class="absolute -top-3 left-8 bg-amber-600 text-white text-xs font-semibold px-3 py-1 rounded-full">
            Most Popular
        </span>
    @endif

    <h3 class="text-lg font-semibold {{ $highlighted ? 'text-white' : 'text-stone-900' }}">{{ $name }}</h3>

    <p class="mt-3 text-4xl font-bold {{ $highlighted ? 'text-white' : 'text-stone-900' }}">
        {{ $price }}
    </p>

    <ul class="mt-6 space-y-3 text-sm {{ $highlighted ? 'text-stone-300' : 'text-stone-500' }}">
        @foreach($features as $feature)
            <li class="flex items-start gap-2">
                <span class="{{ $highlighted ? 'text-amber-400' : 'text-amber-600' }}">&#10003;</span>
                <span>{{ $feature }}</span>
            </li>
        @endforeach
    </ul>

    <div class="mt-8">
        <x-button :variant="$highlighted ? 'primary' : 'secondary'" href="#contact"
            @class([$highlighted ? '!bg-amber-600 hover:!bg-amber-500 !text-white' : ''])>
            {{ $cta }}
        </x-button>
    </div>
</div>
