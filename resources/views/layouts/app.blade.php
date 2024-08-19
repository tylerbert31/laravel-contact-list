<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Contact List by Tyler, built with Laravel, Tailwind, and DaisyUI. Manage your contacts easily with a modern and responsive interface.">
    <meta name="keywords" content="Contact List, Laravel, Tailwind, DaisyUI, Tyler, Contacts">
    <meta name="author" content="Tyler">
    <title>Contact List by Tyler | Laravel, Tailwind, DaisyUI</title>

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="Contact List by Tyler">
    <meta property="og:description" content="Contact List by Tyler, built with Laravel, Tailwind, and DaisyUI. Manage your contacts easily with a modern and responsive interface.">
    <meta property="og:image" content="URL_TO_IMAGE"> <!-- Replace with the URL of an image representing your site -->
    <meta property="og:url" content="URL_OF_PAGE"> <!-- Replace with the URL of the page -->
    <meta property="og:type" content="website">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.2/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.11.1/dist/sweetalert2.all.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.11.1/dist/sweetalert2.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.7.2/axios.min.js" integrity="sha512-JSCFHhKDilTRRXe9ak/FJ28dcpOJxzQaCd3Xg8MyF6XFjODhy/YMCM8HW0TFDckNHWUewW+kfvhin43hKtJxAw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body class="font-sans antialiased flex flex-col justify-center items-center">
    @include('layouts.elements.navbar')
    @yield('content')
</body>
</html>
