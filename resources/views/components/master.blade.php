@props(['title'])
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo | {{$title ?? ""}}</title>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
</head>
<body>
    @include('partials.navbar')
    <x-alert/>
    <main class="px-4 m-4 h-screen">
        {{$slot}}
    </main>
    @include('partials.footer')
</body>
</html>