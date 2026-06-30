<header class="site-header">
    <div class="container-x pad">
        <div class="nav-shell">
            <a href="index.html" class="flex items-center gap-3 group">
                <div class="relative w-10 h-10 flex items-center justify-center bg-primary text-primary-foreground"
                    style="border-radius: var(--radius)">
                    <span class="font-display text-xl leading-none">O</span>
                    <span class="absolute -bottom-0.5 -right-0.5 w-2 h-2 bg-gold-gradient"
                        style="border-radius: var(--radius)"></span>
                </div>
                <div class="leading-tight hidden sm:block">
                    <div class="font-display text-lg text-foreground">Oxford Advocates</div>
                    <div class="text-[10px] uppercase tracking-[0.20em] text-muted-foreground">Counsel · Integrity ·
                        Justice</div>
                </div>
            </a>

            <nav class="hidden lg:flex items-center gap-8">
                <a href="{{ route('home') }}" data-nav-link class="nav-link link-underline">Home</a>
                <a href="{{ route('about') }}" data-nav-link class="nav-link link-underline">About</a>
                <a href="{{ route('services') }}" data-nav-link class="nav-link link-underline">Services</a>
                <a href="{{ route('team') }}" data-nav-link class="nav-link link-underline">Team</a>
                <a href="{{ route('portfolio') }}" data-nav-link class="nav-link link-underline">Portfolio</a>
                <a href="{{ route('contact') }}" data-nav-link class="nav-link link-underline">Contact</a>
            </nav>

            <a href="{{ route('contact') }}" class="hidden lg:inline-flex btn-primary group">
                <span>Book a Consultation</span>
                <span class="icon-wrap"><x-lucide-arrow-right class="icon-3-5" /></span>
            </a>

            <button data-menu-toggle class="lg:hidden w-10 h-10 inline-flex items-center justify-center text-foreground"
                aria-label="Toggle menu">
                <x-lucide-menu data-icon-open class="icon-5" />
                <x-lucide-x data-icon-close class="icon-5" style="display:none" />
            </button>
        </div>

        <div data-mobile-menu class="mobile-menu lg:hidden">
            <div class="mobile-menu-inner">
                <a href="{{ route('home') }}" data-nav-link class="row">Home</a>
                <a href="{{ route('about') }}" data-nav-link class="row">About</a>
                <a href="{{ route('services') }}" data-nav-link class="row">Services</a>
                <a href="{{ route('team') }}" data-nav-link class="row">Team</a>
                <a href="{{ route('portfolio') }}" data-nav-link class="row">Portfolio</a>
                <a href="{{ route('contact') }}" data-nav-link class="row">Contact</a>
                <a href="{{ route('contact') }}"
                    class="mt-4 inline-flex items-center justify-center bg-primary text-primary-foreground px-5 py-3 text-xs uppercase tracking-[0.18em] font-semibold"
                    style="border-radius: var(--radius)">
                    Book a Consultation
                </a>
            </div>
        </div>
    </div>
</header>
