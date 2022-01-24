<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @livewireStyles
</head>

<body>
    <div class="container">
        {{--
        <livewire:counter /> --}}
        {{--
        <livewire:contact-form /> --}}
        {{--
        <livewire:search-dropdown /> --}}
        {{--
        <livewire:pagination /> --}}
        <livewire:datatable />
        @livewireScripts
    </div>
</body>

</html>