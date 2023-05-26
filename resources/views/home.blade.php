@php use Illuminate\Support\Facades\Auth; @endphp
@extends('layouts.sidebarstake')

@section('content-stake')
    <div class="p-4 sm:ml-64">
        <div class="p-4 border-2  border-dashed rounded-lg dark:border-gray-700 mt-14">
            <div class="grid grid-cols-4 gap-4 mb-4 text-white">
                <div class="flex items-center justify-center h-24 rounded">
                    @if(!Auth::user()->nama)
                        <p class="text-2xl text-black">Selamat Datang!</p>
                    @else
                    <p class="text-2xl text-black">Selamat Datang! {{ Auth::user()->nama }}</p>
                    @endif
                </div>
                <div class="flex-col items-center justify-center h-24 rounded bg-blue-600 dark:bg-gray-800">
                    <h1 class="font-bold text-center mt-5">Proyek yang diajukan</h1>
                    <p class="text-center">{{ $proyekYangAd }}</p>
                </div>
                <div class="flex-col items-center justify-center h-24 rounded bg-green-600 dark:bg-gray-800">
                    <h1 class="font-bold text-center mt-5">Proyek yang selesai</h1>
                    <p class="text-center">{{$proyekYangSel}}</p>
                </div>
                <div
                    class="flex-col items-center justify-center h-24 rounded text-black bg-yellow-300 dark:bg-gray-800">
                    <h1 class="font-bold text-center text-sm mt-4">Proyek yang menunggu untuk diambil</h1>
                    <p class="text-center">{{$proyekYangMen}}</p>
                </div>
            </div>
            <div class="flex items-center justify-center py-3 h-auto mb-4 rounded bg-blue-500 dark:bg-gray-800">

                @if(Auth::user()->nama ==null)
                    <div
                        class="object-cover max-w-sm p-6 bg-blue-900 border text-white border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <img src="{{asset('/assets/warning.png')}}" alt="warning" class="w-10 h-10 mb-2">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-semibold tracking-tight">Identitas
                                anda masih kosong</h5>
                        </a>
                        <p class="mb-3 font-normal">Silahkan klik link berikut, dan
                            lengkapi identitas anda</p>
                        <a href="/stake/pengaturan/{{Auth::id()}}" class="inline-flex items-center text-blue-600 hover:underline">
                            Klik Disini
                        </a>
                    </div>
                @else
                    Nama sudah diisi
                @endif


            </div>
            <div class="grid grid-cols-2 gap-4 mb-4">
                <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
                    <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
                </div>
                <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
                    <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
                </div>
                <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
                    <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
                </div>
                <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
                    <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
                </div>
            </div>
            <div class="flex items-center justify-center h-48 mb-4 rounded bg-gray-50 dark:bg-gray-800">
                <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
            </div>
            <div class="grid grid-cols-2 gap-4">
                <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
                    <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
                </div>
                <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
                    <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
                </div>
                <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
                    <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
                </div>
                <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
                    <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="container"> --}}
    {{--    <div class="row justify-content-center"> --}}
    {{--        <div class="col-md-8"> --}}
    {{--            <div class="card"> --}}
    {{--                <div class="card-header">{{ __('Dashboard') }}</div> --}}

    {{--                <div class="card-body"> --}}
    {{--                    @if (session('status')) --}}
    {{--                        <div class="alert alert-success" role="alert"> --}}
    {{--                            {{ session('status') }} --}}
    {{--                        </div> --}}
    {{--                    @endif --}}
    {{--                    Anda adalah Stakeholder! --}}
    {{--                </div> --}}
    {{--            </div> --}}
    {{--        </div> --}}
    {{--    </div> --}}
    {{-- </div> --}}
@endsection
