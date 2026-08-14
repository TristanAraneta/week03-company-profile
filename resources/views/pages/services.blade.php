@extends('layouts.app')

@section('content')
{{-- Hero Section --}}
<section class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop text-center mb-16">
    {{-- Our Services Header Block --}}
<div class="text-center max-w-2xl mx-auto mb-12">
    <h2 class="font-serif text-3xl md:text-4xl text-primary font-medium tracking-wide mb-2">
        Our Services
    </h2>
    
    {{-- Ornamental Divider --}}
    <div class="flex items-center justify-center gap-2 my-3">
        <span class="w-8 h-[1px] bg-primary/20"></span>
        <span class="w-2 h-2 rounded-full border border-primary/60 inline-block"></span>
        <span class="w-8 h-[1px] bg-primary/20"></span>
    </div>

    <p class="text-on-surface-variant text-base md:text-lg leading-relaxed mt-4">
        Elevating your special moments with artisanal craftsmanship, European elegance, and the finest ingredients available.
    </p>
</div>
</section>

{{-- Services Grid --}}
<section class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        
        {{-- Card 1 --}}
        <article class="group bg-surface-container-lowest border border-outline-variant/20 rounded-xl overflow-hidden flex flex-col hover:-translate-y-1 hover:border-tertiary/30 transition-all duration-300">
            <div class="relative w-full aspect-[4/3] overflow-hidden">
                <img src="{{ asset('images/servicecard.jpg') }}" alt="Custom Cake Design" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
            </div>
            <div class="p-8 flex flex-col flex-grow">
                <h3 class="font-headline-sm text-headline-sm text-on-surface mb-3">Custom Cake Design</h3>
                <p class="font-body-md text-body-md text-on-surface-variant flex-grow">
                    Bespoke centerpieces tailored to your vision. From intricate sugar floristry to modern architectural tiers, our custom cakes are true edible art.
                </p>
                <a href="{{ route('contact') }}" class="mt-6 pt-6 border-t border-outline-variant/20 flex items-center justify-between hover:opacity-80 transition-opacity">
                    <span class="font-label-sm text-label-sm text-tertiary uppercase tracking-widest">Inquire</span>
                    <span class="material-symbols-outlined text-tertiary transform transition-transform group-hover:translate-x-1">arrow_right_alt</span>
                </a>
            </div>
        </article>

        {{-- Card 2 --}}
        <article class="group bg-surface-container-lowest border border-outline-variant/20 rounded-xl overflow-hidden flex flex-col hover:-translate-y-1 hover:border-tertiary/30 transition-all duration-300">
            <div class="relative w-full aspect-[4/3] overflow-hidden">
                <img src="{{ asset('images/servicecard1.jpg') }}" alt="Event Catering" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
            </div>
            <div class="p-8 flex flex-col flex-grow">
                <h3 class="font-headline-sm text-headline-sm text-on-surface mb-3">Event Catering</h3>
                <p class="font-body-md text-body-md text-on-surface-variant flex-grow">
                    Sophisticated sweet and savory selections for intimate gatherings to grand receptions, presented with impeccable attention to detail.
                </p>
                <a href="{{ route('contact') }}" class="mt-6 pt-6 border-t border-outline-variant/20 flex items-center justify-between hover:opacity-80 transition-opacity">
                    <span class="font-label-sm text-label-sm text-tertiary uppercase tracking-widest">Inquire</span>
                    <span class="material-symbols-outlined text-tertiary transform transition-transform group-hover:translate-x-1">arrow_right_alt</span>
                </a>
            </div>
        </article>

        {{-- Card 3 --}}
        <article class="group bg-surface-container-lowest border border-outline-variant/20 rounded-xl overflow-hidden flex flex-col hover:-translate-y-1 hover:border-tertiary/30 transition-all duration-300">
            <div class="relative w-full aspect-[4/3] overflow-hidden">
                <img src="{{ asset('images/servicesproduct.jpg') }}" alt="Artisanal Bakery" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
            </div>
            <div class="p-8 flex flex-col flex-grow">
                <h3 class="font-headline-sm text-headline-sm text-on-surface mb-3">Seasonal Tarts &amp; Cakes</h3>
                <p class="font-body-md text-body-md text-on-surface-variant flex-grow">
                    Handcrafted daily pastries, viennoiserie, and seasonal tarts available for daily enjoyment at our store front.
                </p>
                <a href="{{ route('contact') }}" class="mt-6 pt-6 border-t border-outline-variant/20 flex items-center justify-between hover:opacity-80 transition-opacity">
                    <span class="font-label-sm text-label-sm text-tertiary uppercase tracking-widest">Inquire</span>
                    <span class="material-symbols-outlined text-tertiary transform transition-transform group-hover:translate-x-1">arrow_right_alt</span>
                </a>
            </div>
        </article>

    </div>
</section>
@endsection