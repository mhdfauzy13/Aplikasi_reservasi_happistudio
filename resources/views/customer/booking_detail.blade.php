<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- @TODO: replace SET_YOUR_CLIENT_KEY_HERE with your client key -->
    <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js"
        data-client-key="{{ config('midtrans.client_key') }}"></script>
    <!-- Note: replace with src="https://app.midtrans.com/snap/snap.js" for Production environment -->
    <link rel="icon" href="assets/image/logofix.png" type="image/png">
    <title>Detail_Booking</title>

    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100">

    <div class="max-w-2xl mx-auto mt-8 p-4 bg-white rounded shadow">

        <h1 class="text-2xl font-bold mb-4">Detail Booking</h1>

        <div>
            {{-- <p>ppppp</p> --}}
            <p class="text-gray-600">Nomor WhatsApp: {{ $booking->no_whatsaap }}</p>
            <p class="text-gray-600">Kategori: {{ $booking->kategori }}</p>
            <p class="text-gray-600">Tambahan Orang: {{ $booking->tambahan_orang }}</p>
            <p class="text-gray-600">Tanggal Booking: {{ $booking->tanggal_booking }}</p>
            <p class="text-gray-600">Jam Booking: {{ $booking->waktu_booking }}</p>
            <p class="text-gray-600">Jumlah Hewan Peliharaan: {{ $booking->jumlah_hewan_peliharaan }}</p>
            <p class="text-gray-600">Warna Backdrop: {{ $booking->warna_backdrop }}</p>
            <p class="text-gray-600">Bersedia Hasil Foto di Upload ke Sosial Media:
                {{-- {{ $booking->upload_sosial_media }} --}}
                @if ($booking->upload_sosial_media)
                    YA
                @else
                    TIDAK
                @endif
            </p>
            <p class="text-gray-600">Total: {{ $booking->pakets->harga + $booking->tambahan_orang * 20000 }}</p>

        </div>
        <button type="submit" class="btn btn-primary" id="pay-button">Bayar</button>
    </div>


</body>

<script type="text/javascript">
    // For example trigger on button clicked, or any time you need
    var payButton = document.getElementById('pay-button');
    payButton.addEventListener('click', function() {
        // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
        window.snap.pay('{{ $snapToken }}', {
            onSuccess: function(result) {
                /* You may add your own implementation here */
                alert("payment success!");
                console.log(result);
            },
            onPending: function(result) {
                /* You may add your own implementation here */
                alert("wating your payment!");
                console.log(result);
            },
            onError: function(result) {
                /* You may add your own implementation here */
                alert("payment failed!");
                console.log(result);
            },
            onClose: function() {
                /* You may add your own implementation here */
                alert('you closed the popup without finishing the payment');
            }
        })
    });
</script>

</html>
