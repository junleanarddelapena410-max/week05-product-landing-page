@props(['icon' => '⭐', 'title' => 'Feature', 'description' => ''])

<div class="group p-6 rounded-2xl bg-white border border-stone-200 hover:border-amber-300 hover:shadow-lg transition-all duration-200">
    <div class="w-12 h-12 rounded-xl bg-stone-900 text-amber-400 flex items-center justify-center text-xl group-hover:bg-amber-600 group-hover:text-white transition-colors">
        {{ $icon }}
    </div>
    <h3 class="mt-5 text-lg font-semibold text-stone-900">{{ $title }}</h3>
    <p class="mt-2 text-sm text-stone-500 leading-relaxed">{{ $description }}</p>
</div>
