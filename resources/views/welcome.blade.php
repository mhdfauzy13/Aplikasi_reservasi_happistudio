<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="assets/image/logofix.png" type="image/png">
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

    <div class="carousel carousel-end h-[400px]">
  <div class="carousel-item">
    <img src="assets/image/bg.png" alt="Drink" />
  </div> 
  <div class="carousel-item">
    <img src="assets/image/1.jpg" alt="Drink" />
  </div> 
  <div class="carousel-item">
    <img src="assets/image/2.jpeg" alt="Drink" />
  </div> 
</div>

    <div id="about" class="hero min-h-screen">
  <div class="hero-content flex-col lg:flex-row-reverse">
    <img src="assets/image/logo_happistudio 4.png" class="max-w-sm rounded-lg" />
    <div>
      <h1 class="text-5xl font-bold">ABOUT US</h1>
      <p class="py-6">
            HappiStudio adalah destinasi utama Anda untuk merayakan keindahan dalam bentuk gambar. <br>
            Didirikan pada tahun 2023, kami adalah studio fotografi yang penuh semangat,<br>
            berkomitmen untuk menangkap momen berharga Anda dalam bentuk gambar yang tak terlupakan.<br>
            Kami memahami bahwa setiap momen memiliki cerita sendiri, dan melalui lensa kami,<br>
            kami bertujuan untuk merangkum cerita unik Anda dengan keindahan dan keautentikan.<br>
      </p>
    </div>
  </div>
</div>

    <div class=" h-[800px] bg-gradient-to-b from-white to-red-700 mx-auto ">
        <div class="flex justify-center">
            <div class="card w-80 bg-base-100 shadow-xl mt-10 ml-10">
                <figure class="px-5 pt-5">
                    <img src="assets/image/contoh1.png" alt="" class="rounded-lg w-[250px]" />
                </figure>
                <div class="card-body items-center text-center mt-7">
                    <h2 class="card-title text-red-500" style="font-family: Boogaloo;  font-size:15px;">SELF PHOTO FOR SINGLE</h2>
                    <label for="my_modal_7" class="btn">Lihat detail</label>
                    <input type="checkbox" id="my_modal_7" class="modal-toggle" />
                    <div class="modal">
                        <div class="modal-box">
                            <h3 class="text-lg font-bold">SELF PHOTO FOR SINGLE</h3>
                            <p class="py-4"> 15 minutes photo session<br>
                                10 minutes photo selection (including printing)<br>
                                1 printed photo<br>
                                all digital soft copy
                            </p>
                        </div>
                        <label class="modal-backdrop" for="my_modal_7">Close</label>
                    </div>
                </div>
            </div>
            <div class="card w-80 bg-base-100 shadow-xl mt-10 ml-10">
                <figure class="px-5 pt-5">
                    <img src="assets/image/contoh2.jpg" alt="" class="rounded-lg w-[250px]" />
                </figure>
                <div class="card-body items-center text-center mt-5">
                    <h2 class="card-title text-red-500" style="font-family: Boogaloo;  font-size:15px; ">SELF PHOTO FOR DOUBLE</h2>
                    <label for="my_modal_6" class="btn">Lihat detail</label>
                    <input type="checkbox" id="my_modal_6" class="modal-toggle" />
                    <div class="modal">
                        <div class="modal-box">
                            <h3 class="text-lg font-bold">SELF PHOTO FOR DOUBLE</h3>
                            <p class="text-red-500 mb-6">
                                15 minutes photo session<br>
                                10 minutes photo selection (including printing)<br>
                                2 printed photo<br>
                                all digital soft copy
                            </p>
                        </div>
                        <label class="modal-backdrop" for="my_modal_6">Close</label>
                    </div>
                </div>
            </div>
            <div class="card w-80 bg-base-100 shadow-xl mt-10 ml-10">
                <figure class="px-5 pt-5">
                    <img src="assets/image/contoh3.png" alt="" class="rounded-lg w-[250px]" />
                </figure>
                <div class="card-body items-center text-center">
                    <h2 class="card-title text-red-500" style="font-family: Boogaloo; font-size:15px;">SELF PHOTO FOR GROUP</h2>
                    <label for="my_modal_5" class="btn">Lihat detail</label>
                    <input type="checkbox" id="my_modal_5" class="modal-toggle" />
                    <div class="modal">
                        <div class="modal-box">
                            <h3 class="text-lg font-bold">SELF PHOTO FOR GROUP</h3>
                            <p class="text-red-500 mb-6">
                                For 5 person<br>
                                15 minutes photo session<br>
                                10 minutes photo selection (including printing)<br>
                                5 printed photo<br>
                                all digital soft copy
                            </p>
                        </div>
                        <label class="modal-backdrop" for="my_modal_5">Close</label>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.footer')
</body>

</html>


