<section class="relative pt-32 pb-20 md:pt-44 md:pb-28 overflow-hidden bg-primary-deep text-primary-foreground">
    <div class="absolute inset-0">
        <img src="{{ asset($image) }}" alt="" class="w-full h-full object-cover" style="opacity:.30" />
        <div class="absolute inset-0 bg-overlay-gradient"></div>
    </div>

    <div class="container-x relative">
        <div class="reveal" style="max-width:48rem">

            <div class="flex items-center gap-3 mb-6">
                <span class="gold-line"></span>
                <span class="text-[11px] uppercase tracking-[0.28em] font-semibold text-gold">
                    {{ $tag }}
                </span>
            </div>

            <h1 class="font-display text-5xl md:text-7xl text-balance" style="line-height:1.02">
                {!! $title !!}
            </h1>

            <p class="mt-6 text-lg md:text-xl text-primary-foreground/80 text-pretty" style="max-width:42rem">
                {{ $subtitle }}
            </p>

            <div class="mt-9 text-xs uppercase tracking-[0.22em] text-primary-foreground/70 flex items-center gap-3">
                <a href="{{ $homeUrl }}" class="hover:text-gold" style="transition:color .2s">
                    {{ $homeLabel }}
                </a>

                <span style="opacity:.5">/</span>

                <span class="text-gold">
                    {{ $current }}
                </span>
            </div>

        </div>
    </div>
</section>