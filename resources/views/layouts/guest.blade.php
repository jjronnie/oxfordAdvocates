<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>
    @if(request()->route()?->getName())
        {{ ucfirst(request()->route()->getName()) }}
    @endif -

    {{ config('app.name', 'Oxford Advocates') }}

</title>

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


    <main>
        {{ $slot }}


    </main>



    <!-- ============== FOOTER ============== -->
    @include('frontend.partials.footer')

</body>

</html>
