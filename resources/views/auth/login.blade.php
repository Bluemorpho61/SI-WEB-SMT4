@extends('layouts.app')

@section('content')
    <div class="flex flex-row">
        <div class="w-1/2 " style="background-image: url({{ asset('untuk-landing.jpeg') }})">
            <div class="flex flex-col justify-center items-center h-screen">
                <div class="w-1/2">
                    <div class="flex flex-col justify-center stroke-slate-300 items-left">
                        <div class="text-2xl font-bold brightness-200 text-logo-color mb-2">DevHunt_</div>
                        <div class="text-sm text-white mb-6">Wujudkan Ide Digitalisasi Anda</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-1/2">
            <div class="flex flex-col justify-center items-center h-screen">
                <div class="w-1/2">
                    <div class="flex flex-col justify-center items-center">
                        <div class="text-2xl font-bold text-gray-700 mb-2">Masuk</div>
                        <div class="text-sm text-gray-500 mb-6">Silahkan masukkan E-Mail beserta password yang telah
                            anda
                            daftarkan sebelumnya
                        </div>
                    </div>
                    <form action="/login" method="POST">
                        @csrf
                        <div class="flex flex-col mb-6">
                            <div class="relative">
                                <input id="email" type="email" placeholder="E-Mail"
                                       class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded border border-gray-200 focus:outline-none focus:bg-white focus:border-gray-300 @error('email') @enderror"
                                       name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                <span class="font-bold" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <div class="absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                    <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                                         viewBox="0 0 20 20">
                                        <path
                                            d="M10 12a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 1a4 4 0 1 1 0-8 4 4 0 0 1 0 8z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col mb-6">
                            <div class="relative">
                                <input id="password" type="password" placeholder="Password"
                                       class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded border border-gray-200 focus:outline-none focus:bg-white focus:border-gray-300 @error('password') is-invalid @enderror"
                                       name="password" required autocomplete="current-password">
                                @if ($errors->has('password'))
                                    <span class="text-red-600">{{$errors->first('password')}}</span>
                                @endif
                                <div class="absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                    <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                                         viewBox="0 0 20 20">
                                        <path
                                            d="M10 12a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 1a4 4 0 1 1 0-8 4 4 0 0 1 0 8z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>


                        <div class="mt-4">
                            <a href="{{ route('password.request') }}"
                               class="text-sm text-gray-600 hover:text-gray-900">Forgot
                                Your Password?</a>
                        </div>
                        <div class="flex space-x-14">
                            <button class="bg-blue-700 w-32 h-11 rounded-xl text-white font-bold text-xl" name="login"
                                    type="submit">Masuk
                            </button>
                    </form>

                    <button class="bg-green-600 w-32 h-11 rounded-xl text-white font-bold text-xl"
                            onclick="window.location='{{ url('/auth/register') }}'">Registrasi
                    </button>
                </div>
                <div class="mt-4 flex justify-center">
                    <a class="bg-blue-500 w-60 rounded-xl h-11 text-white text-lg font-bold flex justify-center"
                       href="{{ route('regisdev') }}">
                        <p class="w-fit h-fit mt-1">
                            Daftar Sebagai
                            Developer
                        </p>
                    </a>
                </div>
            </div>
        </div>

    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>


    {{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
