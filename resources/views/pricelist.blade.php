<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="assets/image/logofix.png" type="image/png">
    <title>Pricelist | HAPPI STUDIO</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>

<body>
    @include('layouts.aside')

    <div class="bg-white">
        <div class="flex justify-center ">
            <div class="flex flex-col">
                @foreach ($paket as $item)

                <div class="flex max-w-2xl bg-white shadow-2xl rounded-2xl overflow-hidden mt-10 ml-8">
                    <figure class="w-1/3">
                        <img src="{{ asset('storage/pakets/' . $item->gambar) }}" alt="Movie" class="w-full h-full object-cover transform rotate-3">

                    </figure>
                    <div class="p-8 flex flex-col justify-between">
                        <div>
                            <h2 class="text-3xl font-semibold mb-4 text-red-500" style="font-family:Boogaloo; ">
                                {{ $item->nama_paket }}</h2>
                            <p class="text-red-500 mb-6">
                                {{ $item->deskripsi }}
                            </p>
                        </div>
                        <div>
                            <p class="font-bold">RP. {{ $item->harga}}</p>
                        </div>
                        <div class="flex justify-end">
                            <a href="{{ route('singleSelfPhoto.createbooking',['id' => $item->id]) }}">
                                <button type ="button"
                                    class="btn btn-primary mb-px-6 py-3 bg-black text-white rounded hover:bg-orange-700 focus:outline-none focus:border-white focus:ring focus:ring-white"
                                    data-target="#form_booking">
                                    Booking
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="last-content"></div>

    @include('layouts.footer')
</body>

</html>

<style>
    /* Pilihan 1: Menambahkan margin-bottom pada konten terakhir */
    .last-content {
        margin-bottom: 100px; /* Atur nilai sesuai dengan kebutuhan Anda */
    }
</style>

