<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DevHunt StakeHolder</title>
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300;400;500;600;700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;1,100;1,300;1,400;1,500&family=Sofia+Sans+Extra+Condensed:ital,wght@0,300;0,400;1,600&family=Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;1,200;1,300;1,400;1,600;1,700&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300;400;500;600;700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;1,100;1,300;1,400;1,500&family=Sofia+Sans+Extra+Condensed:ital,wght@0,300;0,400;1,600&family=Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;1,200;1,300;1,400;1,600;1,700&display=swap"
        rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/datepicker.min.js"></script>
    @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>

<body>
    <div class="relative min-h-screen flex items-center justify-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8 bg-gray-500 bg-no-repeat bg-cover"
        style="background-image: {{ asset('assets/for-pengajuan.png') }}">
        <div class="absolute bg-black opacity-60 inset-0 z-0"></div>
        <div class="sm:max-w-lg w-full p-10 bg-white rounded-xl z-10">
            <div class="text-center">
                <h2 class="mt-5 text-3xl font-bold text-gray-900">
                    Pasang Proyek
                </h2>
                <p class="mt-2 text-sm text-gray-400">Deskripsikan proyek aplikasi yang ingin anda kembangkan</p>
            </div>
            <form class="mt-8 space-y-3" action="#" method="POST">
                @csrf
                <div class="grid grid-cols-1 space-y-2">
                    <label class="text-sm font-bold text-gray-500 tracking-wide">Nama Proyek</label>
                    <input
                        class="text-base p-2 border border-gray-300 rounded-lg focus:outline-none focus:border-indigo-500"
                        name="nama_proyek" id="nama_proyek" value="{{old('nama_proyek')}}" type="text" required>
                </div>
                <div class="grid grid-cols-1 space-y-2">
                    <label for="message"
                        class="block mb-2 text-sm font-bold text-gray-500 dark:text-white">Deskripsikan Proyek
                        anda</label>
                    <textarea id="deskripsi" rows="4" name="deskripsi"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" aria-valuetext="{{old('deskripsi')}}"></textarea>
                </div>
                <div class="grid grid-cols-1 space-y-2">
                    <label for="message" class="block mb-2 text-sm font-bold text-gray-500 dark:text-white">Tentukan
                        perkiraan deadline anda</label>
                    <div class="relative max-w-fit">
                        <input type="date" id="jangka_deadline" name="jangka_deadline" value="{{old('jangka_deadline')}}">
                    </div>

                </div>

                <div class="grid grid-cols-1 space-y-2">
                    <label class="block mb-2 text-sm font-bold text-gray-500 dark:text-white"
                        for="multiple_files">Silahkan mengunggah beberapa lampiran pendukung mengenai proyek anda (boleh
                        lebih dari 1)</label>
                    <input
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        id="multiple_files" type="file" multiple>
                    <div class="grid-flow-col" hidden="true">
                        <div class="flex">
                            <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">Nama file yang
                                diunggah akan muncul disini</p>
                            <a href="" class="ml-3 text-sm text-red-600">Hapus</a>
                        </div>
                    </div>

                    <div>
                        <button type="submit"
                            class="my-5 w-full flex justify-center bg-blue-500 text-gray-100 p-4  rounded-full tracking-wide
                                    font-semibold  focus:outline-none focus:shadow-outline hover:bg-blue-600 shadow-lg cursor-pointer transition ease-in duration-300">
                            Upload Rencana Proyek
                        </button>
                    </div>
            </form>
        </div>
    </div>

    <style>
        .has-mask {
            position: absolute;
            clip: rect(10px, 150px, 130px, 10px);
        }
    </style>

</body>

</html>
