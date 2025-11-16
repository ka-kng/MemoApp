<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-black h-screen text-white py-10 max-w-screen-md m-auto">
    <h1 class="font-bold text-4xl flex justify-center">@yield('h1')</h1>
    <div class="w-full mt-10">
        @yield('content')
    </div>
</body>

</html>
