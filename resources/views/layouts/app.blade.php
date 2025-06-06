<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        @stack('css')

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

            <!-- Fonts awesome icons -->
        <script src="https://kit.fontawesome.com/ecb51cd1eb.js" crossorigin="anonymous"></script>

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        <x-banner />

        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
           <!-- livewire('navigation-menu')-->

           @livewire('navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>

        <div class="mt-16">
            @include('layouts.partials.app.footer')
    </div>
        </div>

        @stack('modals')

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        @livewireScripts

           @stack('js')

    <!-- Condicional con Script para alertas de SWEETALERT -->
    @if (session('swal'))

       <script>
        Swal.fire({!! json_encode(session('swal')) !!});
    </script>
        
    @endif

    <script>
        Livewire.on('swal', data => {
            Swal.fire(data[0])
        });
    </script>
    </body>
</html>
