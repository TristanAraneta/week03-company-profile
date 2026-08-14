@extends('layouts.app')

@section('content')
{{-- Hero Section --}}
<section class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop mb-20 text-center">
    {{-- Our Story Header --}}
<div class="text-center mb-6">
    <h2 class="font-serif text-2xl md:text-3xl text-primary font-medium tracking-wide mb-2">
        Our Story
    </h2>
    <div class="w-10 h-0.5 bg-primary/30 mx-auto rounded-full"></div>
</div>
    <p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl mx-auto mb-12">
        A tradition of excellence since 2010. Crafting moments of joy through the artistry of fine European pastry.
    </p>
<div class="relative w-full max-w-4xl mx-auto h-[300px] sm:h-[360px] rounded-t-[80px] sm:rounded-t-[120px] overflow-hidden border border-outline-variant/20 shadow-sm bg-cover"
     style="background-image: url('{{ asset('images/aboutus.jpg') }}'); background-position: center 80%;">
</div>
</section>

{{-- Mission & Values --}}
<section class="bg-surface-container-low py-20 border-y border-outline-variant/20">
    <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
        
        {{-- Mission & Vision Grid --}}
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 mb-20 items-stretch">
            <div class="bg-surface p-10 rounded-xl border border-outline-variant/20 flex flex-col justify-center">
                {{-- Card Headings (Our Mission / Our Vision) --}}
<h3 class="font-serif text-xl md:text-2xl text-primary font-semibold mb-3">
    Our Mission
</h3>
                <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
                    To elevate the everyday with extraordinary confections. We believe that every cake is a canvas, and every bite should be a celebration of flavor, texture, and uncompromising quality.
                </p>
            </div>
            <div class="bg-surface p-10 rounded-xl border border-outline-variant/20 flex flex-col justify-center relative overflow-hidden group">
                <h3 class="font-serif text-xl md:text-2xl text-primary font-semibold mb-3">
    Our Vision
</h3>
                    To be the heart of our community's celebrations, renowned globally for pioneering modern pastry techniques while honoring classic European traditions.
                </p>
            </div>
        </div>

        {{-- Core Values Section --}}
        {{-- Core Values Header --}}
<div class="text-center mb-10">
    <h2 class="font-serif text-2xl md:text-3xl text-primary font-medium tracking-wide mb-2">
        Core Values
    </h2>
    <div class="w-10 h-0.5 bg-primary/30 mx-auto rounded-full"></div>
</div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-surface p-8 rounded-xl border border-outline-variant/20 text-center hover:border-primary/30 transition-all duration-300">
                <div class="w-14 h-14 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-5">
                    <span class="material-symbols-outlined text-primary text-2xl">workspace_premium</span>
                </div>
                <h4 class="font-headline-sm text-headline-sm text-primary mb-2">Quality</h4>
                <p class="font-body-md text-body-md text-on-surface-variant">Sourcing only the finest ingredients, from Tahitian vanilla to single-origin chocolates.</p>
            </div>

            <div class="bg-surface p-8 rounded-xl border border-outline-variant/20 text-center hover:border-primary/30 transition-all duration-300">
                <div class="w-14 h-14 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-5">
                    <span class="material-symbols-outlined text-primary text-2xl">brush</span>
                </div>
                <h4 class="font-headline-sm text-headline-sm text-primary mb-2">Artistry</h4>
                <p class="font-body-md text-body-md text-on-surface-variant">Meticulous attention to detail. Every creation is designed with an eye for structural beauty.</p>
            </div>

            <div class="bg-surface p-8 rounded-xl border border-outline-variant/20 text-center hover:border-primary/30 transition-all duration-300">
                <div class="w-14 h-14 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-5">
                    <span class="material-symbols-outlined text-primary text-2xl">diversity_3</span>
                </div>
                <h4 class="font-headline-sm text-headline-sm text-primary mb-2">Community</h4>
                <p class="font-body-md text-body-md text-on-surface-variant">Fostering connections through shared joy. We are dedicated to being a sweet part of our neighborhood.</p>
            </div>
        </div>
    </div>
</section>

{{-- Team Section --}}
<section class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop py-20">
    {{-- Meet the Artisans Header --}}
<div class="text-center max-w-2xl mx-auto mb-10">
    <h2 class="font-serif text-2xl md:text-3xl text-primary font-medium tracking-wide mb-2">
        Meet the Artisans
    </h2>
    <div class="w-10 h-0.5 bg-primary/30 mx-auto rounded-full mb-3"></div>
    <p class="text-on-surface-variant text-base md:text-lg leading-relaxed">
        The masterminds behind the magic.
    </p>
</div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-stretch">
        
        {{-- Member 1 --}}
        <div class="bg-surface-container-lowest border border-outline-variant/20 rounded-t-[140px] rounded-b-2xl overflow-hidden shadow-sm flex flex-col justify-between">
            <div class="w-full h-80 bg-cover bg-center shrink-0" style="background-image: url('{{ asset('images/chef1.jpg') }}');"></div>
            <div class="p-6 text-center bg-surface-container-lowest">
                <h3 class="font-headline-sm text-headline-sm text-primary mb-1">Elena Rostova</h3>
                <p class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-widest">Founder &amp; Owner</p>
            </div>
        </div>

        {{-- Member 2 --}}
        <div class="bg-surface-container-lowest border border-outline-variant/20 rounded-t-[140px] rounded-b-2xl overflow-hidden shadow-sm flex flex-col justify-between">
            <div class="w-full h-80 bg-cover bg-center shrink-0" style="background-image: url('{{ asset('images/chef2.jpg') }}');"></div>
            <div class="p-6 text-center bg-surface-container-lowest">
                <h3 class="font-headline-sm text-headline-sm text-primary mb-1">Dmitri Volkov</h3>
                <p class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-widest">Head Pastry Chef</p>
            </div>
        </div>

        {{-- Member 3 --}}
        <div class="bg-surface-container-lowest border border-outline-variant/20 rounded-t-[140px] rounded-b-2xl overflow-hidden shadow-sm flex flex-col justify-between">
            <div class="w-full h-80 bg-cover bg-center shrink-0" style="background-image: url('{{ asset('images/chef3.jpg') }}');"></div>
            <div class="p-6 text-center bg-surface-container-lowest">
                <h3 class="font-headline-sm text-headline-sm text-primary mb-1">Anya Ivanova</h3>
                <p class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-widest">Lead Cake Designer</p>
            </div>
        </div>

    </div>
</section>
@endsection