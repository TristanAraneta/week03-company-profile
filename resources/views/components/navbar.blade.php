<nav class="fixed top-0 w-full z-50 bg-surface/80 backdrop-blur-md border-b border-outline-variant/30 shadow-sm transition-all duration-300">
    <div class="flex justify-between items-center px-margin-mobile md:px-margin-desktop py-4 max-w-container-max mx-auto">
        <a class="font-headline-sm text-tertiary text-2xl font-bold tracking-tight" href="{{ route('home') }}">
            The Finest Moscow Cakery
        </a>
        <div class="hidden md:flex items-center space-x-8 font-label-sm text-sm uppercase tracking-widest">
            <a class="{{ request()->routeIs('home') ? 'text-tertiary border-b-2 border-tertiary pb-1' : 'text-on-surface-variant hover:text-tertiary' }} transition-colors" href="{{ route('home') }}">Home</a>
            <a class="{{ request()->routeIs('about') ? 'text-tertiary border-b-2 border-tertiary pb-1' : 'text-on-surface-variant hover:text-tertiary' }} transition-colors" href="{{ route('about') }}">About</a>
            <a class="{{ request()->routeIs('services') ? 'text-tertiary border-b-2 border-tertiary pb-1' : 'text-on-surface-variant hover:text-tertiary' }} transition-colors" href="{{ route('services') }}">Services</a>
            <a class="{{ request()->routeIs('contact') ? 'text-tertiary border-b-2 border-tertiary pb-1' : 'text-on-surface-variant hover:text-tertiary' }} transition-colors" href="{{ route('contact') }}">Contact</a>
        </div>
        <div class="hidden md:block">
            <a class="inline-flex items-center justify-center px-6 py-2.5 bg-tertiary text-on-tertiary font-label-sm text-xs uppercase tracking-widest rounded transition-transform duration-300 hover:scale-[1.02]" href="{{ route('contact') }}">
                Order Now
            </a>
        </div>
    </div>
</nav>