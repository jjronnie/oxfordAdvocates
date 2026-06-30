<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Oxford Advocates — A Ugandan Law Firm in Mengo, Kampala</title>
    <meta name="description"
        content="Principled counsel and careful advocacy from Mengo, Kampala. Commercial, civil, land, family and criminal law across Uganda." />
    <meta property="og:title" content="Oxford Advocates — A Ugandan Law Firm" />
    <meta property="og:description"
        content="Counsel. Integrity. Justice. From our chambers in Mengo, opposite Sir Apollo Kaggwa Road." />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;1,500&family=Inter:wght@300;400;500;600;700&family=JetBrains+Mono:wght@400;500&display=swap"
        rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    <!-- ============== NAV ============== -->
    @include('frontend.partials.nav')


    <!-- ============== HERO ============== -->
    @include('frontend.partials.hero')


    <!-- ============== MARQUEE ============== -->
    <section class="bg-primary-deep border-y border-primary-foreground/15 py-5 overflow-hidden">
        <div class="marquee">
            <span>Commercial Law</span><span>·</span><span>Civil Litigation</span><span>·</span><span>Land &amp;
                Conveyancing</span><span>·</span><span>Family &amp; Succession</span><span>·</span><span>Criminal
                Defence</span><span>·</span><span>Notarial Services</span><span>·</span>
            <span>Commercial Law</span><span>·</span><span>Civil Litigation</span><span>·</span><span>Land &amp;
                Conveyancing</span><span>·</span><span>Family &amp; Succession</span><span>·</span><span>Criminal
                Defence</span><span>·</span><span>Notarial Services</span><span>·</span>
        </div>
    </section>

    <!-- ============== INTRODUCTION ============== -->
    <section class="py-24 md:py-36">
        <div class="container-x grid lg:grid-cols-12 gap-14 items-center">
            <div class="lg:col-span-5 relative reveal reveal-x-left">
                <div class="overflow-hidden shadow-elegant aspect-3-4" style="border-radius: var(--radius)">
                    <img src="assets/lawyer-writing.jpg" alt="Lawyer signing documents"
                        class="w-full h-full object-cover" style="filter:grayscale(100%)" loading="lazy" />
                </div>
                <div class="absolute -bottom-6 -right-6 hidden md:block bg-gold-gradient text-primary-deep p-6 shadow-gold"
                    style="max-width:220px">
                    <div class="font-display text-3xl">Est.<br />Uganda</div>
                    <div class="text-[10px] uppercase tracking-[0.22em] mt-2 font-semibold">Mengo Chambers</div>
                </div>
            </div>

            <div class="lg:col-span-7 lg:pl-10 reveal">
                <div class="flex items-center gap-3 mb-5">
                    <span class="gold-line"></span>
                    <span class="text-[11px] uppercase tracking-[0.28em] font-semibold text-primary">Who we are</span>
                </div>
                <h2 class="font-display text-4xl md:text-5xl lg:text-6xl text-balance text-foreground">
                    A small firm with <em class="text-primary not-italic">large</em> conviction.
                </h2>
                <p class="mt-5 text-lg leading-relaxed text-pretty text-muted-foreground">
                    Oxford Advocates is a Ugandan law practice built around one belief: that careful preparation,
                    honest counsel and quiet courage outperform noise. We work closely with our clients — fewer
                    matters, deeper attention.
                </p>
                <div class="mt-10 grid grid-cols-2 gap-8">
                    <div class="border-l-2 border-gold pl-5">
                        <div class="font-display text-4xl md:text-5xl text-primary">20+</div>
                        <div class="text-xs uppercase tracking-[0.18em] text-muted-foreground mt-1">Years combined
                            experience</div>
                    </div>
                    <div class="border-l-2 border-gold pl-5">
                        <div class="font-display text-4xl md:text-5xl text-primary">500+</div>
                        <div class="text-xs uppercase tracking-[0.18em] text-muted-foreground mt-1">Matters handled
                        </div>
                    </div>
                    <div class="border-l-2 border-gold pl-5">
                        <div class="font-display text-4xl md:text-5xl text-primary">98%</div>
                        <div class="text-xs uppercase tracking-[0.18em] text-muted-foreground mt-1">Client retention
                        </div>
                    </div>
                    <div class="border-l-2 border-gold pl-5">
                        <div class="font-display text-4xl md:text-5xl text-primary">12</div>
                        <div class="text-xs uppercase tracking-[0.18em] text-muted-foreground mt-1">Areas of practice
                        </div>
                    </div>
                </div>
                <a href="about.html"
                    class="mt-10 inline-flex items-center gap-2 text-sm font-semibold uppercase tracking-[0.20em] text-primary link-underline">
                    Read our story
                    <x-lucide-arrow-right class="icon-4" />

                </a>
            </div>
        </div>
    </section>

    <!-- ============== PRACTICE AREAS ============== -->
    <section class="py-24 md:py-32 bg-parchment noise-overlay">
        <div class="container-x">
            <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-8 mb-16">
                <div class="reveal">
                    <div class="flex items-center gap-3 mb-5">
                        <span class="gold-line"></span>
                        <span class="text-[11px] uppercase tracking-[0.28em] font-semibold text-primary">Practice</span>
                    </div>
                    <h2 class="font-display text-4xl md:text-5xl lg:text-6xl text-balance text-foreground">Where we <em
                            class="text-primary not-italic">stand</em> for clients.</h2>
                </div>
                <a href="services.html"
                    class="inline-flex items-center gap-2 text-sm font-semibold uppercase tracking-[0.20em] text-primary link-underline self-start md:self-auto">
                    All services
                    <x-lucide-arrow-right class="icon-4" />
                </a>
            </div>

            <div class="practice-grid">
                <!-- Card template -->
                <div class="practice-card group reveal">
                    <x-lucide-building-2 class="icon-9 pi-icon text-primary" />
                    <h3 class="mt-6 font-display text-2xl">Commercial &amp; Corporate</h3>
                    <p class="mt-3 text-sm leading-relaxed" style="opacity:.8">Company formation, contracts, mergers,
                        regulatory compliance and transactional counsel.</p>
                    <div class="pi-cta mt-6 flex items-center gap-2 text-[11px] uppercase tracking-[0.22em] font-semibold"
                        style="opacity:.7"><span>Learn more</span><x-lucide-arrow-up-right class="icon-3-5" /></div>
                </div>
                <div class="practice-card group reveal" data-delay="50">
                    <x-lucide-gavel class="icon-9 pi-icon text-primary" />
                    <h3 class="mt-6 font-display text-2xl">Civil Litigation</h3>
                    <p class="mt-3 text-sm leading-relaxed" style="opacity:.8">Strategic, well-prepared advocacy in
                        trial and appellate courts across Uganda.</p>
                    <div class="pi-cta mt-6 flex items-center gap-2 text-[11px] uppercase tracking-[0.22em] font-semibold"
                        style="opacity:.7"><span>Learn more</span><x-lucide-arrow-up-right class="icon-3-5" /></div>
                </div>
                <div class="practice-card group reveal" data-delay="100">
                    <x-lucide-landmark class="icon-9 pi-icon text-primary" />
                    <h3 class="mt-6 font-display text-2xl">Land &amp; Conveyancing</h3>
                    <p class="mt-3 text-sm leading-relaxed" style="opacity:.8">Title due diligence, sale agreements,
                        succession of land and dispute resolution.</p>
                    <div class="pi-cta mt-6 flex items-center gap-2 text-[11px] uppercase tracking-[0.22em] font-semibold"
                        style="opacity:.7"><span>Learn more</span><x-lucide-arrow-up-right class="icon-3-5" /></div>
                </div>
                <div class="practice-card group reveal" data-delay="150">
                    <x-lucide-users class="icon-9 pi-icon text-primary" />
                    <h3 class="mt-6 font-display text-2xl">Family &amp; Succession</h3>
                    <p class="mt-3 text-sm leading-relaxed" style="opacity:.8">Marriage, divorce, custody, wills,
                        probate and estate administration.</p>
                    <div class="pi-cta mt-6 flex items-center gap-2 text-[11px] uppercase tracking-[0.22em] font-semibold"
                        style="opacity:.7"><span>Learn more</span><x-lucide-arrow-up-right class="icon-3-5" /></div>
                </div>
                <div class="practice-card group reveal" data-delay="200">
                    <x-lucide-shield class="icon-9 pi-icon text-primary" />
                    <h3 class="mt-6 font-display text-2xl">Criminal Defence</h3>
                    <p class="mt-3 text-sm leading-relaxed" style="opacity:.8">Composed, principled defence at every
                        stage — from station to Supreme Court.</p>
                    <div class="pi-cta mt-6 flex items-center gap-2 text-[11px] uppercase tracking-[0.22em] font-semibold"
                        style="opacity:.7"><span>Learn more</span><x-lucide-arrow-up-right class="icon-3-5" /></div>
                </div>
                <div class="practice-card group reveal" data-delay="250">
                    <x-lucide-scale class="icon-9 pi-icon text-primary" />
                    <h3 class="mt-6 font-display text-2xl">Advisory &amp; Opinions</h3>
                    <p class="mt-3 text-sm leading-relaxed" style="opacity:.8">Considered legal opinions for
                        businesses, NGOs and private clients.</p>
                    <div class="pi-cta mt-6 flex items-center gap-2 text-[11px] uppercase tracking-[0.22em] font-semibold"
                        style="opacity:.7"><span>Learn more</span><x-lucide-arrow-up-right class="icon-3-5" /></div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============== APPROACH ============== -->
    <section class="py-24 md:py-36 bg-primary-deep text-primary-foreground noise-overlay relative overflow-hidden">
        <div class="absolute inset-0"
            style="background-image:url('assets/gavel-justice.jpg'); background-size:cover; background-position:center; opacity:.20;">
        </div>
        <div class="absolute inset-0"
            style="background:linear-gradient(to right, var(--primary-deep), oklch(0.18 0.07 260 /.85), transparent);">
        </div>
        <div class="container-x relative grid lg:grid-cols-12 gap-12">
            <div class="lg:col-span-5 reveal">
                <div class="flex items-center gap-3 mb-5">
                    <span class="gold-line"></span>
                    <span class="text-[11px] uppercase tracking-[0.28em] font-semibold text-gold">Our approach</span>
                </div>
                <h2 class="font-display text-4xl md:text-5xl lg:text-6xl text-balance text-primary-foreground">Three
                    principles<br />we never <em class="text-gold not-italic">trade.</em></h2>
                <p class="mt-5 text-lg leading-relaxed text-pretty text-primary-foreground/75">They sound simple. They
                    take a career to live by. They are why our clients come back, and why they send us their families.
                </p>
            </div>
            <div class="lg:col-span-7 lg:pl-12">
                <div class="reveal grid grid-cols-[80px_1fr] gap-6 py-8 border-b border-primary-foreground/15">
                    <div class="font-display text-3xl text-gold">01</div>
                    <div>
                        <h4 class="font-display text-2xl md:text-3xl">Listen first</h4>
                        <p class="mt-2 text-primary-foreground/75 text-pretty">Before we open a file we open our ears.
                            The facts you give us — and the facts you don't yet know — are the case.</p>
                    </div>
                </div>
                <div class="reveal grid grid-cols-[80px_1fr] gap-6 py-8 border-b border-primary-foreground/15"
                    data-delay="100">
                    <div class="font-display text-3xl text-gold">02</div>
                    <div>
                        <h4 class="font-display text-2xl md:text-3xl">Prepare relentlessly</h4>
                        <p class="mt-2 text-primary-foreground/75 text-pretty">Our briefs are written before they're
                            argued. We know our judges, our adversaries, and our record cold.</p>
                    </div>
                </div>
                <div class="reveal grid grid-cols-[80px_1fr] gap-6 py-8" data-delay="200">
                    <div class="font-display text-3xl text-gold">03</div>
                    <div>
                        <h4 class="font-display text-2xl md:text-3xl">Speak plainly</h4>
                        <p class="mt-2 text-primary-foreground/75 text-pretty">We tell you what the law says, what we
                            think, and what it will cost. No theatrics, no surprises.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============== TESTIMONIAL ============== -->
    <section class="py-24 md:py-32">
        <div class="container-x" style="max-width:56rem; text-align:center; margin:0 auto;">
            <x-lucide-quote class="icon-12 text-gold mx-auto" style="margin-bottom:2rem; display:inline-block;" />
            <blockquote class="reveal font-display text-2xl md:text-4xl text-balance leading-snug text-foreground">
                &ldquo;They prepared a matter we thought was lost. They argued it as if it were simple. They won.
                The way they kept us informed mattered almost as much as the result.&rdquo;
            </blockquote>
            <div class="mt-10 flex items-center justify-center gap-4 text-sm">
                <div style="width:2.5rem;height:1px;background:var(--gold)"></div>
                <div>
                    <div class="font-semibold tracking-wide">Rebecca N.</div>
                    <div class="text-xs uppercase tracking-[0.20em] text-muted-foreground mt-1">Managing Director,
                        Kampala</div>
                </div>
                <div style="width:2.5rem;height:1px;background:var(--gold)"></div>
            </div>
        </div>
    </section>

    <!-- ============== CTA ============== -->
    <section class="pb-24 md:pb-32">
        <div class="container-x">
            <div class="relative overflow-hidden bg-primary text-primary-foreground p-10 md:p-20">
                <div class="absolute -right-24 -top-24 w-80 h-80 bg-gold-gradient rounded-full"
                    style="filter:blur(48px); opacity:.3;"></div>
                <div class="relative grid md:grid-cols-2 gap-10 items-center">
                    <h3 class="font-display text-4xl md:text-5xl text-balance">Bring us the matter. We&rsquo;ll bring
                        the <em class="text-gold not-italic">discipline.</em></h3>
                    <div class="md:text-right">
                        <p class="text-primary-foreground/80 mb-7" style="max-width:28rem; margin-left:auto;">Tell us
                            what you need. Initial consultations are confidential and unhurried.</p>
                        <a href="contact.html"
                            class="inline-flex items-center gap-3 bg-gold-gradient text-primary-deep px-8 py-4 font-semibold uppercase tracking-[0.20em] text-xs hover:shadow-gold transition-shadow">
                            Get in touch <x-lucide-arrow-up-right class="icon-4" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============== FOOTER ============== -->
    @include('frontend.partials.footer')

</body>

</html>
