@extends('layouts.app')

@section('content')
    <div class="flex flex-row h-screen">
        <div class="w-1/2 bg-fixed" style="background-image: url({{ asset('for-regisdev.png') }})">
            <div class="flex flex-col justify-center items-center h-screen">
                <div class="w-1/2">
                    <div class="flex flex-col justify-center items-left stroke-slate-400">
                        <div class="text-2xl font-bold brightness-200 stroke-black text-logo-color mb-2">DevHunt_</div>
                        <div class="text-sm text-black font-RobotoSlab mb-6">Wujudkan ide digitalisasi anda</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-1/2 bg-blue-800 text-white">
            <div class="flex flex-col justify-center items-center h-screen">
                <div class="w-1/2">
                    <div class="flex flex-col justify-center items-left">
                        <div class="text-2xl font-bold text-white mb-2">Registrasi</div>
                        <div class="text-sm text-white mb-6">Silahkan masukkan e-mail beserta password untuk melakukan
                            pendaftaran </div>
                    </div>
                    <form method="POST" action="/auth/regisdev">
                        @csrf
                        <div class="flex flex-col">
                            <label for="tim" class="mb-1 text-xs sm:text-sm tracking-wide ">Nama Tim Developer</label>
                            <div class="relative">
                                <input id="tim" type="text"
                                    class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded border border-gray-200 focus:outline-none focus:bg-white focus:border-gray-300"
                                    name="tim" value="{{ old('tim') }}" required autofocus>
                            </div>
                        </div>

                        <div class="flex flex-col">
                            <label for="email" class="mb-1 text-xs sm:text-sm tracking-wide ">Email</label>
                            <div class="relative">
                                <input id="email" type="email"
                                    class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded border border-gray-200 focus:outline-none focus:bg-white focus:border-gray-300"
                                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            </div>
                        </div>

                        <div class="flex flex-col">
                            <label for="password"
                                class="mb-1 text-xs sm:text-sm tracking-wide text gray-600">Password</label>
                            <div class="relative">
                                <input id="password" type="text"
                                    class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded border border-gray-200 focus:outline-none focus:bg-white focus:border-gray-300"
                                    name="password" required autocomplete="current-password">
                            </div>
                            <label for="kon_password" class="">Konfirmasi Password</label>
                            <div class="relative">
                                <input type="text" id="kon_password"
                                    class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded border-gray-200 focus:outline-none focus:bg-white focus:border-gray-300 error @error('kon_password') is-invalid @enderror">
                            </div>

                            <div class="flex justify-center mt-4">
                                <button class="bg-green-700 w-32 h-11 rounded-xl text-white font-bold text-xl"
                                    type="submit">Register</button>
                            </div>
                    </form>


                </div>
            </div>
        </div>
    </div>
@endsection
