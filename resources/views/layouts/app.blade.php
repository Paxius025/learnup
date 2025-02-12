<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Learn Up')</title>
    @vite('resources/css/app.css')

    <style>
        /* ป้องกัน Scroll Bar ที่ไม่จำเป็น */
        html,
        body {
            overflow-x: hidden;
        }
    </style>
</head>

<body>

    <div class="container mx-auto mt-6">
        @yield('content')
    </div>

</body>

</html>
