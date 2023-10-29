<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pricelist | HAPPI STUDIO</title>
    @vite('resources/css/app.css')
</head>
<body>
    @include('layouts.aside')

    <div class="relative w-[1352px] h-[1200px] bg-white">
        <div class="flex max-w-2xl bg-white shadow-2xl rounded-2xl overflow-hidden mt-10 ml-8">
        <figure class="w-1/3">
            <img src="assets/image/contoh1.png" alt="Movie" class="w-full h-full object-cover transform rotate-3">
        </figure>
        <div class="p-8 flex flex-col justify-between">
        <div>
            <h2 class="text-3xl font-semibold mb-4 text-red-500" style="font-family:Boogaloo; ">SELF PHOTO FOR SINGLE</h2>
            <p class="text-red-500 mb-6">
                15 minutes photo session<br>
                10 minutes photo selection (including printing)<br>
                1 printed photo<br>
                all digital soft copy
            </p>
        </div>
        <div>
            <p class="font-bold">IDR 40.000</p>
        </div>
        <div class="flex justify-end">
            <a href="{{ route('singleSelfPhoto.createbooking') }}">
                <button type ="button" class="btn btn-primary mb-px-6 py-3 bg-black text-white rounded hover:bg-orange-700 focus:outline-none focus:border-white focus:ring focus:ring-white" data-target="#form_booking">
                Booking
            </button>
            </a>
        </div>
        </div>
        </div>
        <div class="flex max-w-2xl bg-white shadow-2xl rounded-2xl overflow-hidden mt-10 ml-8">
        <figure class="w-1/3">
            <img src="assets/image/contoh2.jpg" alt="Movie" class="w-full h-full object-cover transform rotate-3">
        </figure>
        <div class="p-8 flex flex-col justify-between">
        <div>
            <h2 class="text-3xl font-semibold mb-4 text-red-500" style="font-family:Boogaloo; ">SELF PHOTO FOR DOUBLE</h2>
            <p class="text-red-500 mb-6">
                15 minutes photo session<br>
                10 minutes photo selection (including printing)<br>
                1 printed photo<br>
                all digital soft copy
            </p>
        </div>
        <div>
            <p class="font-bold">IDR 40.000</p>
        </div>
        <div class="flex justify-end">
            <button type ="button" class="btn btn-primary mb-px-6 py-3 bg-black text-white rounded hover:bg-orange-700 focus:outline-none focus:border-white focus:ring focus:ring-white" data-target="#form_booking">
                Booking
            </button>
        </div>
        </div>
        </div>
        <div class="flex max-w-2xl bg-white shadow-2xl rounded-2xl overflow-hidden mt-10 ml-8">
        <figure class="w-1/3">
            <img src="assets/image/contoh3.png" alt="Movie" class="w-full h-full object-cover transform rotate-3">
        </figure>
        <div class="p-8 flex flex-col justify-between">
        <div>
            <h2 class="text-3xl font-semibold mb-4 text-red-500" style="font-family:Boogaloo; ">SELF PHOTO FOR GROUP</h2>
            <p class="text-red-500 mb-6">
                15 minutes photo session<br>
                10 minutes photo selection (including printing)<br>
                1 printed photo<br>
                all digital soft copy
            </p>
        </div>
        <div>
            <p class="font-bold">IDR 40.000</p>
        </div>
        <div class="flex justify-end">
            <button type ="button" class="btn btn-primary mb-px-6 py-3 bg-black text-white rounded hover:bg-orange-700 focus:outline-none focus:border-white focus:ring focus:ring-white" data-target="#form_booking">
                Booking
            </button>
        </div>
        </div>
        </div>
    </div>
    @include('layouts.footer')
</body>
</html>