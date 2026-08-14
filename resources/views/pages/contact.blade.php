@extends('layouts.app')

@section('content')
{{-- Header --}}
{{-- Get in Touch Header --}}
<div class="text-center max-w-2xl mx-auto mb-12">
    <h2 class="font-serif text-3xl md:text-4xl text-primary font-medium tracking-wide mb-2">
        Get in Touch
    </h2>
    <div class="w-10 h-0.5 bg-primary/30 mx-auto rounded-full mb-4"></div>
    <p class="text-on-surface-variant text-base leading-relaxed">
        Whether you're planning a grand celebration or simply craving a moment of sweet perfection, we're here to craft something extraordinary for you.
    </p>
</div>

{{-- Two Column Layout --}}
<div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop grid grid-cols-1 md:grid-cols-2 gap-12 md:gap-24">

    {{-- Left: Contact Form --}}
    <div class="bg-surface-container-lowest p-8 md:p-12 rounded-xl border border-outline-variant/30">
        <h2 class="font-headline-md text-headline-md text-on-surface mb-8">Send a Message</h2>
        <form class="space-y-8">
            <div class="relative">
                <label for="name" class="block font-body-md text-body-md text-on-surface-variant/70 mb-1">Your Name</label>
                <input type="text" id="name" name="name" required
                       class="w-full border-0 border-b border-outline-variant bg-transparent font-body-md text-body-md text-on-surface py-2 focus:outline-none focus:ring-0 focus:border-tertiary transition-colors">
            </div>
            <div class="relative">
                <label for="email" class="block font-body-md text-body-md text-on-surface-variant/70 mb-1">Email Address</label>
                <input type="email" id="email" name="email" required
                       class="w-full border-0 border-b border-outline-variant bg-transparent font-body-md text-body-md text-on-surface py-2 focus:outline-none focus:ring-0 focus:border-tertiary transition-colors">
            </div>
            <div class="relative">
                <label for="message" class="block font-body-md text-body-md text-on-surface-variant/70 mb-1">Your Message</label>
                <textarea id="message" name="message" rows="4" required
                          class="w-full border-0 border-b border-outline-variant bg-transparent font-body-md text-body-md text-on-surface py-2 resize-none focus:outline-none focus:ring-0 focus:border-tertiary transition-colors"></textarea>
            </div>
            <button type="submit"
                    class="w-full bg-transparent border border-tertiary text-tertiary font-body-md text-label-sm uppercase tracking-widest py-4 hover:bg-tertiary hover:text-on-tertiary transition-all duration-300">
                Send Message
            </button>
        </form>
    </div>

    {{-- Right: Contact Details --}}
    <div class="flex flex-col space-y-12">
        <div>
            <h2 class="font-headline-sm text-headline-sm text-on-surface mb-6">Visit Our Cakery</h2>
            <div class="space-y-6">
                <div class="flex items-start space-x-4">
                    <span class="material-symbols-outlined text-tertiary mt-1">location_on</span>
                    <div>
                        <h3 class="font-body-md text-label-sm uppercase tracking-widest text-on-surface-variant mb-1">Address</h3>
                        <p class="font-body-md text-body-md text-on-surface">123 Artisan Way, Bakery Town</p>
                    </div>
                </div>
                <div class="flex items-start space-x-4">
                    <span class="material-symbols-outlined text-tertiary mt-1">schedule</span>
                    <div>
                        <h3 class="font-body-md text-label-sm uppercase tracking-widest text-on-surface-variant mb-1">Hours</h3>
                        <p class="font-body-md text-body-md text-on-surface">Mon - Sun: 7:00 AM – 7:00 PM</p>
                    </div>
                </div>
                <div class="flex items-start space-x-4">
                    <span class="material-symbols-outlined text-tertiary mt-1">mail</span>
                    <div>
                        <h3 class="font-body-md text-label-sm uppercase tracking-widest text-on-surface-variant mb-1">Email</h3>
                        <a href="mailto:contact@moscowcakery.com" class="font-body-md text-body-md text-on-surface hover:text-tertiary transition-colors">contact@moscowcakery.com</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="gold-divider h-px opacity-30" style="background: linear-gradient(90deg, rgba(212,175,55,0) 0%, rgba(212,175,55,1) 50%, rgba(212,175,55,0) 100%);"></div>

        {{-- Storefront Image --}}
        <div class="flex-grow min-h-[200px] rounded-xl overflow-hidden relative">
            <img src="{{ asset('images/contactstorefront.jpg') }}" alt="Bakery Storefront" class="w-full h-full object-cover absolute inset-0">
        </div>
    </div>
</div>
@endsection
