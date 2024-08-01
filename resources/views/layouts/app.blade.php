<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <title> @yield('title')</title>
    <meta description="Job application recorder">
</head>
<body>
    @include('partials.header')

    <main>
        @yield('content')
    </main>

    @vite('resources/js/app.js')
</body>
</html>