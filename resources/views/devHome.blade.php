@php use Illuminate\Support\Facades\Auth; @endphp
@extends('layouts.sidebardev')

@section('content-dev')
    <div class="p-4 sm:ml-64">
        <div class="p-4 border-2  border-dashed rounded-lg dark:border-gray-700 mt-14">
            <div class="grid grid-cols-3 gap-4 mb-4">
                <div class="flex items-center justify-center h-24 rounded ">
                    <p class="text-2xl text-black">Selamat Datang Tim {{Auth::user()->nama}}</p>
                </div>
                <div class="flex items-center justify-center h-24 rounded bg-yellow-300 dark:bg-gray-800">
                    <p></p>
                </div>
                <div class="flex items-center justify-center h-24 rounded bg-green-600 ">
                    <p class="text-2xl text-gray-400 dark:text-gray-500">Proyek yang berjalam</p>
                </div>
            </div>
            <div class="flex items-center justify-center h-48 mb-4 rounded bg-gray-50 dark:bg-gray-800">
                <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
            </div>


        </div>
    </div>
@endsection
