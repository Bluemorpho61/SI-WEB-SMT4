@extends('layouts.app')

@section('content')
    {{-- <div class="h-72 w-screen mt-14 bg-for-landing-blue flex ">
    <h1 class="w-fit text-white font-Roboto font-bold text-2xl mx-auto h-fit ml-24 mt-20">Ada * tim developer yang
        siap membantu anda</h1>
    <img src="{{ asset('untuk-landing-removebg-preview.png') }}" alt="foto" class="mr-6 rounded-md">
</div>
</div> --}}
    <div class="bg-blue-500 py-32 max-h-28 container">
        <div class="flex mx-auto border-none ">
            <div class="text-white font-bold max-w-fit text-2xl ml-8 max-h-fit">
                Ada  tim developer yang siap membantu anda
            </div>
            <div class="max-w-fit border-none max-h-fit ml-44">
                <img src="{{ asset('untuk-landing-removebg-preview.png') }}" class="object-cover h-52 w-30" alt="foto">
            </div>
        </div>
        <a href="{{route('autentikasi')}}" class="border-none">
            <button class="mt-5 ml-5 text-center w-44 h-8 bg-green-400 rounded-lg text-white font-bold border-none">
                Registrasi sekarang
            </button>
        </a>
    </div>
    </div>

    <section>
        
    </section>
 
@endsection
