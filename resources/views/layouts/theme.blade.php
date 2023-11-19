<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>admin</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    @vite('resources/js/app.js')
    @vite('resources/css/app.css')
</head>

<body>
    <div>
        @include('components.sidebar1')
    </div>
    <div>
        @include('components.header')
    </div>
    <div class="flex justify-center">
        <div class="container">
            @yield('content')
        </div>
    </div>
</body>

</html>
