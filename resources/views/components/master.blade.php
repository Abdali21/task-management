@props(['title'])
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo | {{$title ?? ""}}</title>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
</head>
<body>
    @include('partials.navbar')
    <x-alert />
    <main class="px-4 m-4 h-screen">
        {{$slot}}
    </main>
    @include('partials.footer')
    <script src="js/popup.js"></script>
</body>
</html>