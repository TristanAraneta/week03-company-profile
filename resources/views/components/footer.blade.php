<footer class="bg-surface-container-highest border-t border-outline-variant/30 py-12 mt-auto">
    <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop grid grid-cols-1 md:grid-cols-3 gap-8">
        <div>
            <h3 class="font-headline-sm text-tertiary text-xl font-bold mb-3">The Finest Moscow Cakery</h3>
            <p class="font-body-md text-on-surface-variant text-sm leading-relaxed">
                Crafting artisanal cakes, delicate pastries, and unforgettable dessert experiences in the heart of the city.
            </p>
        </div>
        <div>
            <h4 class="font-label-sm uppercase tracking-wider text-on-surface text-sm font-semibold mb-3">Quick Links</h4>
            <ul class="space-y-2 font-body-md text-sm text-on-surface-variant">
                <li><a href="{{ route('home') }}" class="hover:text-tertiary transition-colors">Home</a></li>
                <li><a href="{{ route('about') }}" class="hover:text-tertiary transition-colors">About Us</a></li>
                <li><a href="{{ route('services') }}" class="hover:text-tertiary transition-colors">Our Services</a></li>
                <li><a href="{{ route('contact') }}" class="hover:text-tertiary transition-colors">Contact & Orders</a></li>
            </ul>
        </div>
        <div>
            <h4 class="font-label-sm uppercase tracking-wider text-on-surface text-sm font-semibold mb-3">Visit Us</h4>
            <p class="font-body-md text-on-surface-variant text-sm leading-relaxed">
                123 Bakery Lane, Moscow<br>
                Open Daily: 8:00 AM – 8:00 PM<br>
                <span class="text-tertiary font-semibold">contact@moscowcakery.com</span>
            </p>
        </div>
    </div>
    <div class="text-center font-body-md text-xs text-on-surface-variant/70 mt-10 pt-6 border-t border-outline-variant/20">
        &copy; {{ date('Y') }} The Finest Moscow Cakery. All rights reserved.
    </div>
</footer>