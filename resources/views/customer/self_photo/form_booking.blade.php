<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="../assets/image/logofix.png" type="image/png">
    <title>Booking | HAPPI STUDIO</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
</head>

<body>
      @include('layouts.aside')
    <div>
        <div class="flex justify-center">
            <P class=" text-red-500 font-bold mt-10" style="font-family: Boogaloo; font-size: 40px;">FORM BOOKING</P>
        </div>

        <form action={{ route('bookings.store') }} method="POST" enctype="multipart/form-data">
            @csrf
        {{-- <form action={{ route('bookings.store') }} method="POST">
            @csrf
            @method('post') --}}
            <input type="hidden" name="paket_id" value="{{ $paket->id }}">
            <div class="flex justify-center mt-8">
                <div class="max-w-[500px] w-full">
                    {{-- <div class="w-full">
                    <label for="" class="font-semibold text-lg">Nama lengkap</label>
                    <input type="text" placeholder="Nama lengkap" class="input input-bordered w-full relative" />
                </div> --}}
                    <div class="max-w-[500px] w-full mt-4">
                        <label for="no_whatsaap" class="font-semibold text-lg">No whatsapp</label>
                        <input type="text" placeholder="No whatsapp" name="no_whatsaap"
                            class="input input-bordered w-full relative" />
                    </div>
                    {{-- <div class="max-w-[500px] w-full mt-4">
                    <label for=""class="font-semibold text-lg">Email</label>
                    <input type="text" placeholder="Email" class="input input-bordered w-full relative" />
                </div> --}}
                    <div class="mt-4">
                        <p class="font-semibold text-lg mb-4">Kategori</p>
                        <select id="kategori_paket" name="kategori" class="select select-bordered w-full">
                            <option disabled selected>-- Pilih kategori --</option>
                            <option value="Single">Single</option>
                            <option value="Double">Double</option>
                            <option value="Group">Group</option>
                        </select>
                    </div>


                    <div id="tambahan_orang" class="max-w-[500px] w-full mt-4" style="display: none;">
                        <label for="tambahan_orang" class="font-semibold text-lg">Tambahan Orang</label>
                        <input name="tambahan_orang" type="number" placeholder="Tambahan Orang"
                            class="iborder rounded-lg text-gray-700 input input-bordered w-full relative" min="0"
                            max="10" />
                    </div>



                    <script>
                        var kategori = document.getElementById("kategori_paket");
                        var tambahan_orang = document.getElementById("tambahan_orang");

                        kategori.addEventListener("change", function() {
                            if (kategori.value === 'Group') {
                                tambahan_orang.style.display = "block";
                            } else {
                                tambahan_orang.style.display = "none";
                            }
                        });
                    </script>




                    <div>
                        <label for="tanggal_booking" class="mt-4 font-semibold text-lg">Tanggal booking</label>
                        <input type="hidden" name="tanggal_booking" id="tanggalBooking">
                        <input type="hidden" name="waktu_booking" id="waktuBooking">
                        <div class="flex flex-wrap" id="tanggalContainer">
                            @foreach ($date7hari as $item)
                                <div id="tanggal{{ $item->hari }}"
                                    onclick="clickTanggal('{{ $item->hari }}', '{{ $item->bulan }}', '{{ $item->tanggal }}', '{{ $item->datenow }}')"
                                    class="w-[97px] h-[60px] p-2 rounded-lg border border-gray-500 hover:bg-gray-300 mt-4 ml-3 tanggal-item">
                                    <p class="text-xs text-center">{{ $item->tanggal }} {{ $item->bulan }}</p>
                                    <p class="font-semibold text-center">{{ $item->hari }}</p>
                                    {{-- <p>{{ $item->datenow }}</p> --}}
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div style="display:none;" id="waktuContainer">
                        <label for="waktu_booking" class="mt-4 font-semibold text-lg">Waktu booking</label>
                        <div class="flex flex-wrap">
                            @foreach ($waktu as $item)
                                <div id="waktu{{ $loop->index }}" onclick="clickWaktu('{{ $item->waktu }}', this)"
                                    class="w-[70px] h-[50px] p-3 rounded-lg border border-gray-500 hover:bg-gray-300 mt-4 ml-3 waktu-item">
                                    <p class="font-semibold text-center">{{ $item->waktu }}</p>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <script>
                        const tanggalBooking = document.getElementById('tanggalBooking');
                        const waktuBooking = document.getElementById('waktuBooking');
                        const waktuContainer = document.getElementById('waktuContainer');

                        // Objek untuk menyimpan waktu yang sudah di-booking untuk setiap hari
                        const bookedTimes = {};

                        function clickTanggal(hari, bulan, tanggal, datenow) {
                            // Set tanggalBooking sesuai dengan hari, bulan, dan tanggal yang diklik
                            tanggalBooking.value = datenow;

                            // Reset style warna background pada semua elemen tanggal-item
                            document.querySelectorAll('.tanggal-item').forEach(function(item) {
                                item.style.backgroundColor = 'white';
                            });

                            // Ubah warna background pada elemen yang diklik menjadi abu-abu
                            document.getElementById('tanggal' + hari).style.backgroundColor = 'grey';

                            // Tampilkan waktu booking
                            waktuContainer.style.display = 'flex';
                        }

                        function clickWaktu(waktu, element) {
                            // Cek apakah waktu sudah di-booking untuk hari yang dipilih
                            const selectedDate = tanggalBooking.value.split(' ')[0];
                            if (bookedTimes[selectedDate] && bookedTimes[selectedDate].includes(waktu)) {
                                // Waktu sudah di-booking, tidak lakukan apa-apa
                                return;
                            }

                            // Set waktuBooking sesuai dengan waktu yang diklik
                            waktuBooking.value = waktu;

                            // Reset style warna background pada semua elemen waktu-item
                            document.querySelectorAll('.waktu-item').forEach(function(item) {
                                item.style.backgroundColor = 'white';
                            });

                            // Ubah warna background pada elemen yang diklik menjadi abu-abu
                            element.style.backgroundColor = 'green';

                            // Simpan waktu yang sudah di-booking untuk hari yang dipilih
                            if (!bookedTimes[selectedDate]) {
                                bookedTimes[selectedDate] = [];
                            }
                            bookedTimes[selectedDate].push(waktu);
                        }
                    </script>




                    <div class="flex flex-col max-w-[500px] w-full mt-4">
                        <label for="jumlah_hewan_peliharaan" class="font-semibold text-lg">Jumlah hewan peliharaan (opsional)
                        </label>
                        <input type="number" name="jumlah_hewan_peliharaan"
                            class="border rounded-lg text-gray-700 input input-bordered w-full relative"
                            placeholder="Jumlah hewan peliharaan" min="0">
                    </div>

                    <div class="mt-4">
                        <label for="warna" class="font-semibold text-lg">Warna backdrop</label>
                        <select name="warna_backdrop" class="select select-bordered w-full max-w-xs">
                            <option value="Gray" disabled selected>Warna backdrop</option>
                            <option value="Gray">Gray</option>
                            <option value="White">White</option>
                            <option value="Pink">Pink</option>
                        </select>
                    </div>

                    <!-- Bagian Upload Sosial Media -->

                    <div class="mt-4">
                        <label for="upload_sosial_media" class="font-semibold text-lg mb-4">Apakah bersedia hasil foto
                            diupload ke Sosial media happistudio?</label>
                        <input type="radio" name="upload_sosial_media" value="1" class="radio" /> Ya
                        <input type="radio" name="upload_sosial_media" value="0" class="radio ml-3" /> Tidak
                    </div>

                    <!-- Tombol Submit -->
                    <div class="flex justify-end mt-8">
                        {{-- <a href="{{ route('booking_detail.create') }}"> --}}
                        <button type="submit" class="btn btn-primary bg-black text-white rounded hover:bg-orange-700">
                            Booking
                        </button>
                    </div>
                </div>

            </div>
        </form>
        <div class="last-content"></div>
    </div>

    @include('layouts.footer')
</body>

</html>

<style>
    /* Pilihan 1: Menambahkan margin-bottom pada konten terakhir */
    .last-content {
        margin-bottom: 100px; /* Atur nilai sesuai dengan kebutuhan Anda */
    }
</style>
