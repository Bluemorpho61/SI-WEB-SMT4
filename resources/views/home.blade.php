@extends('layouts.sidebarstake')

@section('content-stake')
    <div class="p-4 sm:ml-64">
        <div class="p-4 border-2  border-dashed rounded-lg dark:border-gray-700 mt-14">
            <div class="grid grid-cols-4 gap-4 mb-4 text-white">
                <div class="flex items-center justify-center h-24 rounded">
                    <p class="text-2xl text-black">Selamat Datang! {{Auth::user()->nama}}</p>
                </div>
                <div class="flex items-center justify-center h-24 rounded bg-blue-600 dark:bg-gray-800">
                    Proyek yang diajukan
                </div>
                <div class="flex items-center justify-center h-24 rounded bg-green-600 dark:bg-gray-800">
                    Proyek yang selesai
                </div>
                <div class="flex items-center justify-center h-24 rounded text-black bg-yellow-300 dark:bg-gray-800">
                    Proyek yang menunggu untuk diambil
                </div>
            </div>
            <div class="flex items-center justify-center h-48 mb-4 rounded bg-gray-50 dark:bg-gray-800">
                <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
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
