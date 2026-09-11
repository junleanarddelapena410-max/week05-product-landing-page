@props(['name' => '', 'position' => '', 'review' => '', 'initials' => 'AA'])

<div class="p-6 rounded-2xl bg-white border border-stone-200">
    <p class="text-stone-600 text-sm leading-relaxed">&ldquo;{{ $review }}&rdquo;</p>

    <div class="mt-6 flex items-center gap-3">
        <div class="w-11 h-11 rounded-full bg-stone-900 text-amber-400 flex items-center justify-center text-sm font-semibold">
            {{ $initials }}
        </div>
        <div>
            <p class="text-sm font-semibold text-stone-900">{{ $name }}</p>
            <p class="text-xs text-stone-400">{{ $position }}</p>
        </div>
    </div>
</div>
