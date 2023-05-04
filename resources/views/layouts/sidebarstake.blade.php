<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300;400;500;600;700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;1,100;1,300;1,400;1,500&family=Sofia+Sans+Extra+Condensed:ital,wght@0,300;0,400;1,600&family=Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;1,200;1,300;1,400;1,600;1,700&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300;400;500;600;700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;1,100;1,300;1,400;1,500&family=Sofia+Sans+Extra+Condensed:ital,wght@0,300;0,400;1,600&family=Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;1,200;1,300;1,400;1,600;1,700&display=swap"
        rel="stylesheet">
    @vite(['resources/js/app.js', 'resources/css/app.css'])
    <title>DevHunt StakeHolder</title>
</head>

<body class="bg-blue-100">
    <div id="sidebar">
        <div class="flex min-h-screen">
            <div class="w-64 bg-gray-800 text-white">
                <div class="px-4 py-2">
                    <h1 class="text-2xl font-bold text-logo-color flex justify-center">DevHunt_</h1>
                </div>
                <ul class="list-none">
                    <li class="mb-2"><a href="#">Dashboard</a></li>
                    <li class="mb-2"><a href="#">Daftar Proyek</a></li>
                    <li class="mb-2"><a href="#">Kotak Masuk</a></li>
                </ul>
            </div>
            {{-- Main Content --}}
            <main class="flex-1 p-6">
                @yield('content-stake')
            </main>
        </div>
    </div>
</body>

</html>
