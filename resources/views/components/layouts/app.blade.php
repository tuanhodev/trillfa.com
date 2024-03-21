<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="msapplication-TileColor" content="#7bc916">

    <x-meta :description="$metaDes ?? config('settings.description')" :title="$pageTitle ?? config('app.name')"
        :image="$metaImg ?? asset('/favicon.svg')" :card="$metaImg ?? asset('/favicon.svg')" />

    <!-- Favicon -->
    <link rel="manifest" href="{{ asset('manifest.json') }}">
    <link rel="icon" type="image/svg+xml" sizes="any" href="{{ asset('/favicon.svg') }}">
    <link rel="icon" type="image/svg+xml" sizes="64x64" href="{{ asset('/favicon.svg') }}">
    <link rel="icon" type="image/svg+xml" sizes="32x32" href="{{ asset('/favicon.svg') }}">
    <link rel="icon" type="image/svg+xml" sizes="16x16" href="{{ asset('/favicon.svg') }}">

    <!-- Favicon apply-touch -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/favicon.svg') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/favicon.svg') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/favicon.svg') }}">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#7bc916">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @stack('styles')
    @vite(['resources/css/theme/theme.css', 'resources/css/styles.css', 'resources/js/app.js'])

    <!-- Scripts -->
    @stack('atd-scripts')

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-D8DDC4W3M8"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-D8DDC4W3M8');
    </script>

</head>

<body class="surface">

    <div 
        x-data="{ showOnScroll: false }" 
        x-on:scroll.window="showOnScroll = window.pageYOffset >= 1000"
        id="app" class=" min-h-screen">

        <!-- Navigation Bar -->
        <x-partials.navbar></x-partials.navbar>

        <div class="padding-navbar"></div>

        {{-- @if (request()->routeIs('home')) --}}
        {{-- <x-main-menu /> --}}
        {{-- @endif --}}

        <!-- Page Heading -->
        @if (isset($header))
        <header> {{ $header }} </header>
        @endif

        <!-- Page Content -->
        <main> {{ $slot }} </main>

        <!-- Page footer -->
        <x-partials.footer />

        <button 
            x-on:click="window.scrollTo({top: 0, behavior: 'smooth'})"
            x-cloak x-show="showOnScroll"
            x-transition.origin.bottom.duration.500ms 
            class="back-to-top">
            <x-orchid-icon path="bs.arrow-up" width="1.5rem" height="1.5rem" />
        </button>

    </div>

    @stack('modals')

</body>

</html>
