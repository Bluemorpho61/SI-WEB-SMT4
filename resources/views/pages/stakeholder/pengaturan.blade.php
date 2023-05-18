<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Stakeholder Profile Setting</title>
    @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>
<!-- component -->
<body class="bg-gray-300 antialiased">
<div class="container mx-auto my-60">
    <div>
        <div class="bg-white relative shadow rounded-lg w-5/6 md:w-5/6  lg:w-4/6 xl:w-3/6 mx-auto">
            <div class="flex justify-center">
                <img src="{{asset('profile.png')}}" alt="foto" class="rounded-full mx-auto absolute -top-20 w-32 h-32 shadow-md border-4 border-white transition duration-200 transform hover:scale-110">
            </div>

            <div class="mt-16">
                @if($user->nama ==null)
                <h1 class="font-bold text-center text-3xl text-gray-900">Nama Kosong</h1>
                @else
                    <h1 class="font-bold text-center text-3xl text-gray-900">{{$user->nama}}</h1>
                @endif

                <div class="my-5 font-light text-center px-6">
                    <p>Alamat E-mail: <b>{{$user->email}}</b></p>
                    @if($user->no_hp)
                        <p></p>
                    @else
                        <p>No. Ponsel: <b>{{$user->email}}</b></p>
                    @endif
                    <p></p>
                </div>

                <div class="w-full">
                    <h3 class="font-light text-gray-900 text-2xl text-left px-6">Ganti Nama</h3>
                    <div class="mt-5 w-full flex flex-col items-start overflow-hidden text-sm">
                        <input type="text"  class=" bg-gray-50 max-w-[300px] border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Nama Baru">
                    </div>
                    <h3 class="font-light text-gray-900 text-2xl text-left px-6">Ganti Password</h3>
                    <div class="mt-5 w-full flex flex-col items-start overflow-hidden text-sm">
                        <input type="text"  class=" bg-gray-50 max-w-[300px] border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Password Baru">
                    </div>
                    <h3 class="font-light text-gray-900 text-2xl text-left px-6">Ubah No.Telepon</h3>
                    <div class="mt-5 w-full flex flex-col items-start overflow-hidden text-sm">
                        <input type="text"  class=" bg-gray-50 max-w-[300px] border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="No. Telepon Baru">
                    </div>
                    <div class="mt-6">
                        <button type="button"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Konfirmasi Edit
                        </button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
</body>
</html>
</html>
