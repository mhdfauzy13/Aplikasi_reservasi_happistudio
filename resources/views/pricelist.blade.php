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

    <div class="relative w-[1352px] h-[500px] bg-white">
        <div class="flex max-w-2xl bg-white shadow-xl rounded-2xl overflow-hidden mt-10 ml-8">
        <figure class="w-1/3">
            <img src="assets/image/contoh1.png" alt="Movie" class="w-full h-full object-cover">
        </figure>
        <div class="p-8 flex flex-col justify-between">
        <div>
            <h2 class="text-3xl font-semibold mb-4 text-red-500" style="font-family: Boogaloo; ">SELF PHOTO FOR SINGLE</h2>
            <p class="text-gray-600 mb-6">Click the button to watch on Jetflix app.</p>
        </div>
        <div class="flex justify-end">
            <button class="px-6 py-3 bg-black text-white rounded hover:bg-blue-700 focus:outline-none focus:border-white focus:ring focus:ring-white">
                Booking
            </button>
        </div>
        </div>
        </div>
    </div>
     @include('layouts.footer')
</body>
</html>