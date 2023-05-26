@extends('layouts.sidebardev')

@section('content-dev')
    <div class="p-4 sm:ml-64">
        <div class="p-4 border-2 border-dashed rounded-lg border-dashed mt-14">
            <div class="flex flex-row">
                <div class="flex-col text-black h-auto w-fit mb-4 rounded ">
                    <h1 class="text-left font-bold text-2xl px-4 h-fit py-2 ">Nama Proyek</h1>
                    <p class="ml-3 font-thin text-sm">Diposting pada: {{now()}} </p>
                </div>

                <div class="h-fit ml-11 space-x-1 mt-5">

                </div>
            </div>
        </div>
    </div>
@endsection

