<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="assets/image/logofix.png" type="image/png">
    <title>Invoice Booking</title>
    @vite('resources/css/app.css')
</head>

<body>
     @include('layouts.aside')

     <div class="max-w-2xl mx-auto mt-8 p-4 bg-white rounded-lg shadow-lg relative">
        <h1 class="text-2xl font-bold mb-4">Invoice Booking</h1>

        <div class="text-gray-600 mb-4">
           <a></a>

            <p class="text-gray-600">Nomor WhatsApp: {{ $booking->no_whatsaap }}</p>
            <p class="text-gray-600">Kategori: {{ $booking->kategori }}</p>
            <p class="text-gray-600">Tambahan Orang:
                @if ($booking->tambahan_orang)
                    {{ $booking->tambahan_orang }}
                @else
                    -
                @endif
            </p>

            <p class="text-gray-600">Tanggal Booking: {{ $booking->tanggal_booking }}</p>
            <p class="text-gray-600">Jam Booking: {{ $booking->waktu_booking }}</p>
            <p class="text-gray-600">Jumlah Hewan Peliharaan: {{ $booking->jumlah_hewan_peliharaan }}</p>
            <p class="text-gray-600">Warna Backdrop: {{ $booking->warna_backdrop}}</p>
            <p class="text-gray-600">Bersedia Hasil Foto di Upload ke Sosial Media:
                {{-- {{ $booking->upload_sosial_media }} --}}
                @if ($booking->upload_sosial_media)
                    YA
                @else
                    TIDAK
                @endif
            </p>
            <p class="text-gray-600">Total: {{ $booking->pakets->harga + $booking->tambahan_orang * 20000 }}</p>
            <p class="text-gray-600">Status Pembayaran : {{ $booking->payment_status }}</p>
        </div>



        <div class="text-gray-600 mb-4">
            <p>NOTE :</br>
                *Jangan Lupa di Screenshot yaa, sebagai bukti ketika di studio
            </p>
        </div>

    </div>

</body>

</html>


