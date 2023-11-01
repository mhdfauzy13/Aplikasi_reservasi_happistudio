<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="relative w-[1500x] h-[75px] bg-red-600 shadow-xl mt-7">

        <div class="flex flex-warp">
            <img src="assets/image/logo_happistudio 3.png" alt=""
                class="w-[130px] ml-20 absolute top-0 shadow-lg ">
            <div class="flex items-center justify-center flex-1 space-x-10">
                <a href="/" class="text-white font-bold hover:text-black mt-5">BERANDA</a>
                <a href="#about" class="text-white font-bold hover:text-black mt-5">ABOUT</a>
                <a href="/pricelist" class="flex items-center text-white font-bold hover:text-black mt-5">
                    PRICELIST
                </a>
            </div>
            <div class="flex justify-end mr-5">
                <a href="/login">
                    <p class="mt-5 font-bold text-white hover:text-black">Login</p>
                </a>
                <p class="mt-5 font-bold text-white">|</p>
                <a href="/register">
                    <p class="mt-5 font-bold text-white hover:text-black">Daftar</p>
                </a>
            </div>
        </div>
    </div>
    <div>
        <img src="assets/image/bg.png">
    </div>


    <div id="about" class="relative h-[600px] bg-white mx-auto">
        <img src="assets/image/logo_happistudio 4.png" alt="" class="w-[350px] ml-20 mt-10 absolute top-0">
        <h1 class="flex justify-center text-xl font-bold mt-10 mr-30"> ABOUT US</h1>
    </div>
    <div class=" h-[800px] bg-gradient-to-b from-white to-red-700 mx-auto ">
        <div class="flex justify-center">
            <div class="card w-80 bg-base-100 shadow-xl mt-10 ml-10">
                <figure class="px-5 pt-5">
                    <img src="assets/image/contoh1.png" alt="" class="rounded-lg w-[250px]" />
                </figure>
                <div class="card-body items-center text-center mt-7">
                    <h2 class="card-title text-red-500" style="font-family: Boogaloo;  font-size:15px;">SELF PHOTO FOR SINGLE</h2>
                        <button class=" btn btn-neutral">Lihat detail</button>
                </div>
            </div>
            <div class="card w-80 bg-base-100 shadow-xl mt-10 ml-10">
                <figure class="px-5 pt-5">
                    <img src="assets/image/contoh2.jpg" alt="" class="rounded-lg w-[250px]" />
                </figure>
                <div class="card-body items-center text-center mt-5">
                    <h2 class="card-title text-red-500" style="font-family: Boogaloo;  font-size:15px; ">SELF PHOTO FOR DOUBLE</h2>
                    <div class="card-actions">
                        <button class=" btn btn-neutral">Lihat detail</button>
                    </div>
                </div>
            </div>
            <div class="card w-80 bg-base-100 shadow-xl mt-10 ml-10">
                <figure class="px-5 pt-5">
                    <img src="assets/image/contoh3.png" alt="" class="rounded-lg w-[250px]" />
                </figure>
                <div class="card-body items-center text-center">
                    <h2 class="card-title text-red-500" style="font-family: Boogaloo; font-size:15px;">SELF PHOTO FOR GROUP</h2>
                    <div class="card-actions">
                        <button class=" btn btn-neutral">Lihat detail</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.footer')
</body>

</html>
