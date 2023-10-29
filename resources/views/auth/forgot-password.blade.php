<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>reset_password</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="flex justify-center">
        {{-- <x-guest-layout> --}}
    <div class="flex flex-col w-[490px] h-[380px] bg-white rounded-2xl shadow-2xl mt-20">
    <div>
        <p class="text-center font-bold text-red-500" style="font-family:Inter; font-size: 30px;">Lupa Password</p>
        <p class="text-lg font-berge text-black text-center mt-4">Masukan email anda </p>
        <p class="text-lg font-berge text-black text-center">untuk mereset password anda </p>
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div class="flex justify-center mt-10">
            {{-- <x-input-label for="email" :value="__('Email')" /> --}}
            <input id="email" placeholder="Email" class="input input-bordered border-2 border-black w-full max-w-sm shadow-xl" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex justify-center mt-7">
        <x-danger-button>
            {{ __('Email Password Reset Link') }}
        </x-danger-button>
        </div>
    </form>
    </div>
    
{{-- </x-guest-layout> --}}

    </div>
</body>
</html>


