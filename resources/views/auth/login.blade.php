<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    @vite('resources/css/app.css')
</head>

<body class="flex w-[1352px] h-[600px] bg-white">
    <div class="relative">
        <img src="assets/image/bg 2.png" alt="" class="w-[810px] h-[688px] object-cover grayscale">
        <img src="assets/image/efek.png" alt="" class="w-[810px] h-[688px] absolute top-0 left-0">
        <img src="assets/image/logofix.png" alt="" class="w-[270px] absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 ">
    </div>

    <div class="flex flex-col mt-10">
        <div class="flex font-bold ml-10" style="font-size:50px;">
        <a class="text-black hover:text-red-500" href="/login">LOGIN</a>
        |
        <a class="text-black hover:text-red-500" href="/register">DAFTAR</a>
    </div>
    <div class=" mt-10 ml-10">
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}" class="mt-4">
            @csrf
            <!-- Email Address -->
            <div class="mt-2" style="font-family: Inter;">
                <input id="email" type="email" name="email":value="old('email')" required autofocus autocomplete="email" placeholder="Email" class="input input-bordered border-2 border-black w-full max-w-xl" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div  class="mt-5" style="font-family: Inter;">
                <input id="password" type="password"name="password" required autocomplete="current-password" placeholder="Password" class="input input-bordered border-2 border-black w-full max-w-xl"/>
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Remember Me -->
            <div  class="mt-5">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex flex-col mt-5">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
                <x-danger-button class="text-center btn btn-danger mt-5 font-bold" style="font-size:15px;">
                {{ __('Log in') }}
                </x-danger-button>
            </div>
        </form>
    </div>
    </div>
</body>
</html>
