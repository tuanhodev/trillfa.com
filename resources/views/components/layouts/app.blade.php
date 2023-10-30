<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="msapplication-TileColor" content="#7bc916">

    <title>{{ $pageTitle ?? config('app.name')}}</title>

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

    @livewireStyles

    @stack('styles')

    <!-- Scripts -->

    @vite(['resources/css/theme/theme.css', 'resources/css/styles.css', 'resources/js/app.js'])

    @stack('atd-scripts')

</head>

<body id="app" class="surface">

    <div class="relative min-h-screen">

        <!-- Navigation Bar -->

        @livewire('partials.nav-bar')

        <div class="padding-navbar"></div>

        <!-- Page Heading -->

        @if (isset($header))

        <header"> {{ $header }} </header>

        @endif

        <!-- Page Content -->

        <main> {{ $slot }} </main>

        <!-- Page footer -->

        <x-partials.footer />

    </div>

    @stack('modals')

    @livewireScripts

</body>

</html>
