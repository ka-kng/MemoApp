<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-black text-white">
    <header class="bg-gray-800">

        <div class="flex justify-between p-7 max-w-screen-2xl m-auto">
            <h2 class="">
                <a href="/" class="text-3xl">メモアプリ</a>
            </h2>
            <nav>
                <ul class="flex gap-10 text-xl">
                    <li>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button class="cursor-pointer" type="submit">ログアウト</button>
                        </form>
                    </li>
                </ul>
            </nav>
        </div>

    </header>


    @yield('content')
</body>

</html>
