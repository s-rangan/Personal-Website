<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        @vite('resources/css/app.css')
    </head>
    <body class="antialiased text-slate-800 dark:text-slate-200">
        <div class="min-h-screen bg-slate-100 dark:bg-slate-900 pt-24">
            <x-layout.navbar></x-layout.navbar>
            {{$slot}}
            <x-layout.footer></x-layout.footer>
        </div>
        <script src="//unpkg.com/alpinejs" defer></script>
    </body> 
</html>
