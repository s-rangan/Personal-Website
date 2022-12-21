<!DOCTYPE html>
<html 
    lang="{{ str_replace('_', '-', app()->getLocale()) }}"
    x-data="{ darkMode: false }"
    x-init="
        darkMode = JSON.parse(localStorage.getItem('darkMode'));
        $watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))"
>
    <div :class="{ 'dark': darkMode === true }">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">

            <title>Sriram Rangan</title>

            <meta name="csrf-token" content="{{ csrf_token() }}"></meta>

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
    </div>
</html>
