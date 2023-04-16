<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{config('app.name')}} - Wujudkan Ide Digitalisasi Anda</title>
    @vite('resources/css/app.css')
    <style>
        *{
            border: 1px red solid;
        }
    </style>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300;400;500;600;700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;1,100;1,300;1,400;1,500&family=Sofia+Sans+Extra+Condensed:ital,wght@0,300;0,400;1,600&family=Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;1,200;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">
</head>
<body class="bg-blue-100">
    <nav>
        <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
          <div class="relative flex items-center justify-between h-16">
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
              <!-- Mobile menu button -->
              <button type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <!-- Icon when menu is closed. -->
                <!--
                  Heroicon name: menu
      
                  Menu open: "hidden", Menu closed: "block"
                -->
                <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
                <!-- Icon when menu is open. -->
                <!--
                  Heroicon name: x
      
                  Menu open: "block", Menu closed: "hidden"
                -->
                <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
              </button>
            </div>
            <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
              <div class="flex-shrink-0">
                <h1 class="font-bold text-xl text-logo-color">
                   DevHunt_ 
                </h1>
              </div>
              <div class="hidden sm:block sm:ml-6">
                <div class="flex space-x-6">
                  <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                  <a href="{{route('carker')}}" class="text-black hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Cara Kerja</a> 
                  <a href="#" class="text-black hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Tentang Kami</a>                  

                  <a href="{{route('auth')}}" class="ml-72 w-32 bg-blue-500 rounded-xl hover:bg-blue-400 active:ring-blue-600 ">
                    <h1 class="mx-auto text-white h-fit w-fit mt-1 font-sans">
                      Registrasi/Masuk
                    </h1>
                  </a> 
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="h-72 w-screen mt-14 bg-for-landing-blue flex ">
            <h1 class="w-fit text-white font-Roboto font-bold text-2xl mx-auto h-fit ml-24 mt-20">Ada * tim developer yang siap membantu anda</h1>
            <img src="{{asset('untuk-landing-removebg-preview.png')}}" alt="foto" class="mr-6 rounded-md">
           </div>
        </div>
        

        <div>
          
        </div>
    </nav>
    
</body>
</html>