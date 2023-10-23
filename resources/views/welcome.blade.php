<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    @vite('resources/css/app.css')
</head>
<body>
    @include('layouts.aside')
    <div> 
        <img src="assets/image/bg.png" alt="" class="shadow-xl">
    </div>
    
    
    <div id="about" class="relative w-[1352px] h-[400px] bg-white" >
        <img src="assets/image/logo_happistudio 4.png" alt="" class="w-[350px] ml-20 mt-10 absolute top-0">
        <p class="flex justify-center text-xl font-bold mt-10"> ABOUT US</p>
        
    </div>
    <div class=" w-[1352px] h-[600px] bg-gradient-to-b from-white to-red-700">
        <div class="flex justify-center">
            <div class="card w-80 bg-base-100 shadow-xl mt-10 ml-10">
                <figure class="px-5 pt-5">
                    <img src="assets/image/contoh1.png" alt="Shoes" class="rounded-lg w-[250px]" />
                </figure>
            <div class="card-body items-center text-center mt-7" >
                <h2 class="card-title text-red-500" style="font-family: Boogaloo;  font-size:15px;">SELF PHOTO FOR SINGLE</h2>
            <div class="card-actions">
                <button class=" btn btn-neutral">Lihat detail</button>
            </div>
            </div>
            </div>
            <div class="card w-80 bg-base-100 shadow-xl mt-10 ml-10">
                <figure class="px-5 pt-5">
                    <img src="assets/image/contoh2.jpg" alt="Shoes" class="rounded-lg w-[250px]" />
                </figure>
            <div class="card-body items-center text-center mt-5" >
                <h2 class="card-title text-red-500" style="font-family: Boogaloo;  font-size:15px; ">SELF PHOTO FOR DOUBLE</h2>
            <div class="card-actions">
                <button class=" btn btn-neutral">Lihat detail</button>
            </div>
            </div>
            </div>
            <div class="card w-80 bg-base-100 shadow-xl mt-10 ml-10">
                <figure class="px-5 pt-5">
                    <img src="assets/image/contoh3.png" alt="Shoes" class="rounded-lg w-[250px]" />
                </figure>
            <div class="card-body items-center text-center" >
                <h2 class="card-title text-red-500" style="font-family: Boogaloo; font-size:15px;">SELF PHOTO FOR GROUP</h2>
            <div class="card-actions">
                <button class=" btn btn-neutral">Lihat detail</button>
            </div>
            </div>
            </div>
        </div>
    </div>
    <div class="relative w-[1352px] h-[500px] bg-white">

    </div>
    @include('layouts.footer')
</body>
</html>