@extends('layouts.app')

@section('content')
{{-- Hero Section --}}
<section class="relative min-h-[600px] flex items-center justify-center px-margin-mobile md:px-margin-desktop mb-24 overflow-hidden">
    <div class="absolute inset-0 z-0">
    <div class="bg-cover bg-center w-full h-full opacity-40" style="background-image: url('{{ asset('images/hero.jpg') }}');"></div>
    <div class="absolute inset-0 bg-gradient-to-t from-surface via-surface/50 to-transparent"></div>
</div>

<div class="relative z-10 max-w-3xl mx-auto text-center bg-surface/85 backdrop-blur-md p-8 md:p-16 rounded-2xl border border-surface-variant shadow-sm">
    <span class="inline-block px-4 py-1.5 rounded-full bg-secondary-container text-on-secondary-container font-label-sm text-label-sm uppercase tracking-widest mb-6">
        Artisan Patisserie
    </span>
    
    {{-- Added font-bold / font-serif to give it the strong Figma display look --}}
    <h1 class="font-serif font-bold text-3xl sm:text-4xl md:text-5xl text-on-surface leading-tight tracking-tight mb-6">
        Handcrafting sweetness with artisanal precision.
    </h1>
    
    <p class="font-body-lg text-body-lg text-on-surface-variant mb-10 max-w-xl mx-auto">
        Experience the delicate balance of classic European sophistication and modern minimalism in every bite.
    </p>
    
    <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
        <a href="{{ route('contact') }}" class="inline-flex items-center justify-center px-8 py-4 bg-tertiary text-on-tertiary font-label-sm text-label-sm uppercase tracking-widest rounded-full hover:scale-[1.02] transition-transform duration-300 w-full sm:w-auto">
            Order Now
        </a>
        <a href="{{ route('services') }}" class="inline-flex items-center justify-center px-8 py-4 border border-tertiary text-tertiary font-label-sm text-label-sm uppercase tracking-widest rounded-full hover:bg-tertiary/5 transition-colors duration-300 w-full sm:w-auto">
            View Menu
        </a>
    </div>
</div>
</section>

{{-- Specialties Section --}}
<section class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
    {{-- Our Specialties Header --}}
<div class="text-center mb-10">
    <h2 class="font-serif text-2xl md:text-3xl text-primary font-medium tracking-wide mb-2">
        Our Specialties
    </h2>
    <div class="w-10 h-0.5 bg-primary/30 mx-auto rounded-full"></div>
</div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-gutter">
        {{-- Specialty 1 --}}
        <div class="group bg-surface-container-lowest rounded-xl border border-primary-fixed overflow-hidden hover:-translate-y-1 transition-transform duration-300">
            <div class="relative h-64 overflow-hidden">
                <img src="{{ asset('images/cake.jpg') }}" alt="Signature Cakes" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
            </div>
            <div class="p-6 text-center">
                <h3 class="font-headline-sm text-headline-sm text-on-surface mb-2">Signature Cakes</h3>
                <p class="font-body-md text-body-md text-on-surface-variant">Custom handcrafted cakes layered with rich cream and fresh berries.</p>
            </div>
        </div>

        {{-- Specialty 2 --}}
        <div class="group bg-surface-container-lowest rounded-xl border border-primary-fixed overflow-hidden hover:-translate-y-1 transition-transform duration-300">
            <div class="relative h-64 overflow-hidden">
                <img src="{{ asset('images/croissant.jpg') }}" alt="Golden Croissants" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
            </div>
            <div class="p-6 text-center">
                <h3 class="font-headline-sm text-headline-sm text-on-surface mb-2">Golden Croissants</h3>
                <p class="font-body-md text-body-md text-on-surface-variant">Flaky, buttery French croissants baked fresh every morning.</p>
            </div>
        </div>

        {{-- Specialty 3 --}}
        <div class="group bg-surface-container-lowest rounded-xl border border-primary-fixed overflow-hidden hover:-translate-y-1 transition-transform duration-300">
            <div class="relative h-64 overflow-hidden">
                <img src="{{ asset('images/macarons.jpg') }}" alt="Artisanal Macarons" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
            </div>
            <div class="p-6 text-center">
                <h3 class="font-headline-sm text-headline-sm text-on-surface mb-2">Artisanal Macarons</h3>
                <p class="font-body-md text-body-md text-on-surface-variant">Delicate French macarons filled with chocolate ganache and fruit jams.</p>
            </div>
        </div>
    </div>
</section>
@endsection
