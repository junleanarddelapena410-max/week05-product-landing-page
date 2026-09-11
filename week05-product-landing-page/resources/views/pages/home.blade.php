@extends('layouts.app')

@section('title', "Smokes n' Booze — Vape & Spirits Shop")

@section('content')

    <x-hero />

    {{-- FEATURES --}}
    <section id="features" class="max-w-7xl mx-auto px-6 lg:px-8 py-20">
        <div class="text-center max-w-2xl mx-auto">
            <span class="text-xs font-semibold tracking-widest uppercase text-amber-700">Why Shop With Us</span>
            <h2 class="mt-3 text-3xl sm:text-4xl font-bold text-stone-900">Everything you need, nothing you don't</h2>
            <p class="mt-4 text-stone-500">Six reasons regulars keep coming back to Smokes n' Booze.</p>
        </div>

        <div class="mt-14 grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <x-feature-card icon="🌬️" title="Premium E-Liquid Selection"
                description="Hundreds of flavors from trusted brands, restocked weekly so your favorite is never out." />
            <x-feature-card icon="🥃" title="Curated Spirits Collection"
                description="Hand-picked whiskey, wine, and craft spirits selected by staff who actually taste-test." />
            <x-feature-card icon="🚗" title="Same-Day Local Pickup"
                description="Order online in the morning, pick it up on your way home — no waiting in line." />
            <x-feature-card icon="🧑‍🔬" title="Expert Staff Recommendations"
                description="Not sure what to try? Our staff picks are based on real customer feedback, not ads." />
            <x-feature-card icon="🎁" title="Loyalty Rewards Program"
                description="Earn points on every purchase and redeem them for discounts on future orders." />
            <x-feature-card icon="🔒" title="Age-Verified Secure Checkout"
                description="Fast, encrypted checkout with mandatory ID verification — 21+ only, every time." />
        </div>
    </section>

    {{-- PRODUCT SHOWCASE --}}
    <section class="bg-stone-100/70 py-20">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="text-center max-w-2xl mx-auto">
                <span class="text-xs font-semibold tracking-widest uppercase text-amber-700">Take a Look Inside</span>
                <h2 class="mt-3 text-3xl sm:text-4xl font-bold text-stone-900">Shop from anywhere, anytime</h2>
            </div>

            <div class="mt-14 grid lg:grid-cols-3 gap-6">
                <div class="lg:col-span-2 rounded-2xl bg-white border border-stone-200 p-6 shadow-sm">
                    <div class="h-72 rounded-xl bg-stone-100 flex items-center justify-center text-stone-400 text-sm">
                        Online Store Preview
                    </div>
                </div>
                <div class="rounded-2xl bg-white border border-stone-200 p-6 shadow-sm flex flex-col gap-4">
                    <div class="h-32 rounded-xl bg-stone-100 flex items-center justify-center text-stone-400 text-sm">
                        Mobile View
                    </div>
                    <div class="h-32 rounded-xl bg-stone-100 flex items-center justify-center text-stone-400 text-sm">
                        Order Dashboard
                    </div>
                </div>
            </div>

            <div class="mt-8 grid sm:grid-cols-3 gap-6 text-center">
                <div class="p-4">
                    <p class="text-2xl font-bold text-stone-900">Live Stock</p>
                    <p class="text-sm text-stone-500 mt-1">Real-time inventory, no ghost orders</p>
                </div>
                <div class="p-4">
                    <p class="text-2xl font-bold text-stone-900">Curbside Pickup</p>
                    <p class="text-sm text-stone-500 mt-1">Schedule a pickup window in seconds</p>
                </div>
                <div class="p-4">
                    <p class="text-2xl font-bold text-stone-900">Order History</p>
                    <p class="text-sm text-stone-500 mt-1">Reorder your go-to bundle in one tap</p>
                </div>
            </div>
        </div>
    </section>

    {{-- PRICING / FEATURED BUNDLES --}}
    <section id="pricing" class="max-w-7xl mx-auto px-6 lg:px-8 py-20">
        <div class="text-center max-w-2xl mx-auto">
            <span class="text-xs font-semibold tracking-widest uppercase text-amber-700">Featured Bundles</span>
            <h2 class="mt-3 text-3xl sm:text-4xl font-bold text-stone-900">Popular picks, ready to order</h2>
            <p class="mt-4 text-stone-500">Priced per product — no subscriptions, no commitments.</p>
        </div>

        <div class="mt-14 grid sm:grid-cols-2 lg:grid-cols-3 gap-8 items-center">
            <x-pricing-card
                name="Starter Vape Kit"
                price="$29.99"
                :features="['Entry-level vape device', '2 e-liquid bottles of your choice', 'Free coil pack', 'In-store or curbside pickup']"
                cta="Add to Cart" />

            <x-pricing-card
                name="Premium E-Liquid Bundle"
                price="$49.99"
                :features="['5 premium e-liquid flavors', 'Mix of nicotine strengths', 'Loyalty points x2', 'Free local delivery']"
                :highlighted="true"
                cta="Add to Cart" />

            <x-pricing-card
                name="Ultimate Spirits & Vape Combo"
                price="$89.99"
                :features="['1 curated spirits bottle', '3 premium e-liquids', 'Vape accessory of your choice', 'Priority pickup lane']"
                cta="Add to Cart" />
        </div>
    </section>

    {{-- TESTIMONIALS --}}
    <section id="testimonials" class="bg-stone-100/70 py-20">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="text-center max-w-2xl mx-auto">
                <span class="text-xs font-semibold tracking-widest uppercase text-amber-700">Customer Love</span>
                <h2 class="mt-3 text-3xl sm:text-4xl font-bold text-stone-900">What regulars are saying</h2>
            </div>

            <div class="mt-14 grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <x-testimonial-card
                    name="Marco D."
                    position="Regular Customer"
                    initials="MD"
                    review="The staff actually know their flavors. I've never had a bad recommendation from this shop." />

                <x-testimonial-card
                    name="Jenna R."
                    position="Loyalty Member"
                    initials="JR"
                    review="Ordering online and picking up curbside saves me so much time. The rewards points are a nice bonus too." />

                <x-testimonial-card
                    name="Tobias K."
                    position="First-Time Buyer"
                    initials="TK"
                    review="Clean site, easy checkout, and the spirits selection is way better than the big chain stores nearby." />
            </div>
        </div>
    </section>

    {{-- CTA --}}
    <section class="bg-stone-900 py-20">
        <div class="max-w-4xl mx-auto px-6 text-center">
            <h2 class="text-3xl sm:text-4xl font-bold text-white">Ready to stock up?</h2>
            <p class="mt-4 text-stone-400">Join our rewards program, contact our team, or place your first order today.</p>
            <div class="mt-8 flex flex-wrap justify-center gap-4">
                <x-button variant="primary" href="#pricing" class="!bg-amber-600 hover:!bg-amber-500">Start Free Order</x-button>
                <x-button variant="secondary" href="#contact">Contact Sales</x-button>
            </div>
        </div>
    </section>

@endsection
