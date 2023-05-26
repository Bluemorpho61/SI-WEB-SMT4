@php use App\Enums\RoleList; @endphp
    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DevHunt Admin</title>
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300;400;500;600;700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;1,100;1,300;1,400;1,500&family=Sofia+Sans+Extra+Condensed:ital,wght@0,300;0,400;1,600&family=Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;1,200;1,300;1,400;1,600;1,700&display=swap"
        rel="stylesheet">

    <style>
        * {
            border: 1px red solid;
        }
    </style>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300;400;500;600;700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;1,100;1,300;1,400;1,500&family=Sofia+Sans+Extra+Condensed:ital,wght@0,300;0,400;1,600&family=Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;1,200;1,300;1,400;1,600;1,700&display=swap"
        rel="stylesheet">
    @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>

<body class="h-screen overflow-hidden flex items-center justify-center" style="background: #edf2f7">
<link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css"/>
<link rel="stylesheet"
      href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css"/>

<main class="profile-page">
    <section class="relative block h-500-px">
        <div class="absolute top-0 w-full h-full bg-center bg-cover"
             style="
            background-image: url('https://images.unsplash.com/photo-1499336315816-097655dcfbda?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=2710&amp;q=80');
          ">
            <span id="blackOverlay" class="w-full h-full absolute opacity-50 bg-black"></span>
        </div>
        <div class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden h-70-px"
             style="transform: translateZ(0px)">
            <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg"
                 preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                <polygon class="text-blueGray-200 fill-current" points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
    </section>
    <section class="relative py-16 bg-blueGray-200">
        <div class="container mx-auto px-4">
            <div
                class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-xl rounded-lg -mt-64">
                <div class="px-6">
                    <div class="flex flex-wrap justify-center">
                        <div class="w-full lg:w-3/12 px-4 lg:order-2 flex justify-center">
                            <div class="relative">
                                <img alt="..."
                                     src="{{asset('profile.png')}}"
                                     class="shadow-xl rounded-full h-auto align-middle border-none absolute -m-16 -ml-20 lg:-ml-16 max-w-150-px"/>
                            </div>
                        </div>

                        <div class="w-full lg:w-4/12 px-4 lg:order-1">

                        </div>
                    </div>
                    <div class="text-center mt-12">
                        <h3 class="text-4xl font-semibold leading-normal mb-2 text-blueGray-700 mb-2">
                            {{$user->nama}}
                        </h3>

                        <div class="mb-2 text-blueGray-600 mt-10">
                            <p>Tanggal terdaftar: {{$user->created_at}}</p>
                        </div>
                        <div class="mb-2 text-blueGray-600">
                            @if($user->tipe_user==0)
                                <p>Tipe User: Stakeholder</p>
                            @elseif($user->tipe_user==2)
                                <p>Tipe User: Developer</p>
                            @elseif($user->tipe_user==1)
                                <p>Tipe User: Admin</p>
                            @endif
                        </div>
                    </div>
                    <div class="mt-10 py-10 border-t border-blueGray-200 text-center">
                        <div class="flex flex-wrap justify-center">
                            <div class="w-full lg:w-9/12 px-4">
                                <p class="mb-4 text-lg leading-relaxed text-blueGray-700">
                                    An artist of considerable range, Jenna the name taken by
                                    Melbourne-raised, Brooklyn-based Nick Murphy writes,
                                    performs and records all of his own music, giving it a
                                    warm, intimate feel with a solid groove structure. An
                                    artist of considerable range.
                                </p>
                                <a href="#pablo" class="font-normal text-pink-500">Show more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="relative bg-blueGray-200 pt-8 pb-6 mt-8">
            <div class="container mx-auto px-4">
                <div class="flex flex-wrap items-center md:justify-between justify-center">
                    <div class="w-full md:w-6/12 px-4 mx-auto text-center">
                        <div class="text-sm text-blueGray-500 font-semibold py-1">
                            Made with
                            <a href="https://www.creative-tim.com/product/notus-js"
                               class="text-blueGray-500 hover:text-gray-800" target="_blank">Notus JS</a>
                            by
                            <a href="https://www.creative-tim.com" class="text-blueGray-500 hover:text-blueGray-800"
                               target="_blank">
                                Creative Tim</a>.
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </section>
</main>
</body>

</html>
