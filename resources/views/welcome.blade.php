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
        {{--
        <livewire:datatable /> --}}
        {{-- @foreach ($posts as $post)
        <p>title - {{$post->title}}</p>
        <p>body - {{$post->content}}</p>
        <livewire:comments-section :post="$post" />
        <hr>
        @endforeach --}}
        {{--
        <livewire:poll-example /> --}}
        <livewire:create-post />
        @livewireScripts
    </div>
</body>

</html>