<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300;400;500;600;700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;1,100;1,300;1,400;1,500&family=Sofia+Sans+Extra+Condensed:ital,wght@0,300;0,400;1,600&family=Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;1,200;1,300;1,400;1,600;1,700&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300;400;500;600;700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;1,100;1,300;1,400;1,500&family=Sofia+Sans+Extra+Condensed:ital,wght@0,300;0,400;1,600&family=Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;1,200;1,300;1,400;1,600;1,700&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <title>Developer Create Developer Profile</title>
    @vite(['resources/js/app.js','resources/css/app.css'])
</head>
<body class="items-center justify-center py-12 px-4 bg-blue-900">
<div class="relative min-h-screen flex items-center justify-center py-12 px-4">
    <form action="{{route('add-dev')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="sm:max-w-lg w-full p-10 text-white bg-blue-700 rounded-xl z-10 ">
            <div class="text-center mb-3">
                <h2 class="mt-5 text-3xl font-bold">Buat Profil Tim Developer anda</h2>
            </div>

            <div class="flex justify-center items-center h-auto flex-col">
                <img class="rounded-full p-1 h-32 w-32" id="preview"
                                                                               src="{{asset('profile.png')}}"
                                                                               alt="image description">


                <label class="mt-1">Silahkan tambahkan ikon untuk profile anda </label>
                <input
                    class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                    aria-describedby="file_input_help" id="image" name="image" type="file" accept="image/jpeg, image/png, image/jpg" onchange="readUrl(this)">

            </div>

            <div class="grid grid-cols-1 space-x-2">
                <label>Nama Tim Developer</label>
                <input
                    class="bg-blue-900 text-base p-2 border border-gray-300 rounded-lg focus:outline-none focus:border-indigo-500"
                    name="nama_developer" value="" type="text" required>
            </div>
            <div class="grid grid-cols-1 space-x-2">
                <label>Alamat Developer</label>
                <textarea id="deskripsi" rows="4" name="alamat"
                          class="block  p-2.5 w-full text-sm  bg-blue-900 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                          aria-valuetext=""></textarea>
            </div>
            <div class="grid grid-cols-1 space-x-2">
                <label>Laman Web (jika ada)</label>
                <input
                    class="bg-blue-900 text-base p-2 border border-gray-300 rounded-lg focus:outline-none focus:border-indigo-500"
                    name="laman_web" id="nama_proyek" value="" type="text" >
            </div>
            <div class="grid grid-cols-1 space-x-2">
                <label>Email (kontak tim developer)</label>
                <input
                    class="bg-blue-900 text-base p-2 border border-gray-300 rounded-lg focus:outline-none focus:border-indigo-500"
                    name="email" id="nama_proyek" value="" type="text" required>
            </div>
            <div>
                <button type="submit"
                        class="my-5 w-full flex justify-center bg-blue-500 text-gray-100 p-4  rounded-full tracking-wide
                                                  font-semibold  focus:outline-none focus:shadow-outline hover:bg-blue-600 shadow-lg cursor-pointer transition ease-in duration-300">
                    Konfirmasi Data
                </button>
            </div>
        </div>
    </form>
</div>

<script>
    let profilePreview = document.getElementById('preview');
    let inputFile = document.getElementById('image');
    inputFile.onchange=function (){
        profilePreview.src =URL.createObjectURL(inputFile.files[0]);
    }
</script>
</body>
</html>
