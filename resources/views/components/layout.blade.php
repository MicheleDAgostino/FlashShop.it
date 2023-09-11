<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    {{-- CDN LIVEWIRE --}}
    @livewireStyles

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-base-300">

    <x-navbar></x-navbar>

    <div class="min-h-screen pb-16">
        @if (session('message'))
            <div class="alert alert-success">
                <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                <span>{{session('message')}}</span>
            </div>
        @endif
        {{$slot}}
    </div>
    

    <x-footer></x-footer>
    
    {{-- JS LIVEWIRE --}}
    @livewireScripts

</body>
</html>