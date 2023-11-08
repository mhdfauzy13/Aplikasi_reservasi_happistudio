<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    @vite('resources/css/app.css')
</head>
<body class="flex bg-white">
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
{{-- <x-guest-layout> --}}
    <div  class=" mt-10 ml-10">
        <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            {{-- <x-input-label for="name" :value="__('Name')" /> --}}
            {{-- <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" /> --}}
            <input id="name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="Name" class="input input-bordered border-2 border-black w-full max-w-xl" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-5">
            {{-- <x-input-label for="email" :value="__('Email')" /> --}}
            {{-- <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" /> --}}
            <input id="email" type="text" name="email" :value="old('email')" required autocomplete="username" placeholder="Email" class="input input-bordered border-2 border-black w-full max-w-xl" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-5">
            {{-- <x-input-label for="password" :value="__('Password')" /> --}}
            <input id="password" placeholder="Password" class="input input-bordered border-2 border-black w-full max-w-xl"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-5">
            {{-- <x-input-label for="password_confirmation" :value="__('Confirm Password')" /> --}}

            <input id="password_confirmation" placeholder="Confirm Password" class="input input-bordered border-2 border-black w-full max-w-xl"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex flex-col mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-danger-button class="text-center btn btn-danger mt-5 font-bold" style="font-size:15px;">
                {{ __('Register') }}
            </x-danger-button>
        </div>
    </form>
    </div>
{{-- </x-guest-layout> --}}

</body>
</html>



