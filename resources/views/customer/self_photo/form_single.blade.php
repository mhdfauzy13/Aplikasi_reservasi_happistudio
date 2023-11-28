<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="assets/image/logofix.png" type="image/png">
    <title>booking</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div>
        <div class="flex justify-center">
            <P class=" text-red-500 font-bold mt-10" style="font-family: Boogaloo; font-size: 40px;">FORM BOOKING</P>
        </div>

        <form action="{{ route('store.booking') }} " method="POST">
            @csrf
            @method('post')
        <div class="flex justify-center mt-8">
            <div class="max-w-[500px] w-full">
                {{-- <div class="w-full">
                    <label for="" class="font-semibold text-lg">Nama lengkap</label>
                    <input type="text" placeholder="Nama lengkap" class="input input-bordered w-full relative" />
                </div> --}}
                <div class="max-w-[500px] w-full mt-4">
                    <label for=""class="font-semibold text-lg">No whatsapp</label>
                    <input type="text" placeholder="No whatsapp" name="no_whatsaap" class="input input-bordered w-full relative" />
                </div>
                {{-- <div class="max-w-[500px] w-full mt-4">
                    <label for=""class="font-semibold text-lg">Email</label>
                    <input type="text" placeholder="Email" class="input input-bordered w-full relative" />
                </div> --}}
                <div class="mt-4">
    <p class="font-semibold text-lg mb-4">Kategori</p>
    <select id="kategori_paket" name="kategori" class="select select-bordered w-full">
        <option disabled selected>-- Pilih kategori --</option>
        <option value="single">Single</option>
        <option value="double">Double</option>
        <option value="group">Group</option>
    </select>
</div>

<div id="tambahan_orang" class="max-w-[500px] w-full mt-4" style="display: none;">
    <label for="" class="font-semibold text-lg">Tambahan Orang</label>
    <input name="tambahan_orang" type="number" placeholder="Tambahan Orang" class="iborder rounded-lg text-gray-700 input input-bordered w-full relative"
    min="5" max="10" />
</div>



<script>
    var kategori = document.getElementById("kategori_paket");
    var tambahan_orang = document.getElementById("tambahan_orang");

    kategori.addEventListener("change", function() {
        if (kategori.value === 'group') {
            tambahan_orang.style.display = "block";
        } else {
            tambahan_orang.style.display = "none";
        }
    });
</script>

<div>
    <p class="mt-4 font-semibold text-lg">Tanggal booking</p>
    <input type="hidden" name="tanggal_booking" id="tanggalBooking">
    <div class="flex flex-wrap" id="tanggalContainer">
        @foreach ($date7hari as $item)
            <div id="tanggal{{$item->hari}}" onclick="clickTanggal('{{ $item->tanggal }}', '{{ $item->bulan }}')" class="w-[97px] h-[60px] p-2 rounded-lg border border-gray-500 hover:bg-gray-300 mt-4 ml-3 tanggal-item">
                <p class="text-xs text-center">{{ $item->tanggal }} {{ $item->bulan }}</p>
                <p class="font-semibold text-center">{{ $item->hari }}</p>
            </div>
        @endforeach
    </div>
</div>

<script>
    const tanggalBooking = document.getElementById('tanggalBooking');

    function clickTanggal(hari, bulan) {
        // Set tanggalBooking sesuai dengan hari dan bulan yang diklik
        tanggalBooking.value = hari + ' ' + bulan;

        // Reset style warna background pada semua elemen tanggal-item
        document.querySelectorAll('.tanggal-item').forEach(function (item) {
            item.style.backgroundColor = 'white';
        });

        // Ubah warna background pada elemen yang diklik menjadi abu-abu
        document.getElementById('tanggal' + hari).style.backgroundColor = 'grey';
    }
</script>



<div>
    <p class="mt-4 font-semibold text-lg">Waktu booking</p>
    <input type="hidden" name="waktu_booking" id="waktuBooking">
    <div class="flex flex-wrap" id="waktuContainer">
        @foreach ($waktu as $item)
            <div id="waktu{{$loop->index}}" onclick="clickWaktu('{{ $item->waktu }}')" class="w-[70px] h-[50px] p-3 rounded-lg border border-gray-500 hover:bg-gray-300 mt-4 ml-3 waktu-item">
                <p class="font-semibold text-center">{{ $item->waktu }}</p>
            </div>
        @endforeach
    </div>
</div>

<script>
    const waktuBooking = document.getElementById('waktuBooking');

    function clickWaktu(waktu) {
        // Set waktuBooking sesuai dengan waktu yang diklik
        waktuBooking.value = waktu;

        // Reset style warna background pada semua elemen waktu-item
        document.querySelectorAll('.waktu-item').forEach(function (item) {
            item.style.backgroundColor = 'white';
        });

        // Ubah warna background pada elemen yang diklik menjadi abu-abu
        document.getElementById('waktu' + waktu).style.backgroundColor = 'grey';
    }
</script>




                <div class="flex flex-col max-w-[500px] w-full mt-4">
                    <label for="" class="font-semibold text-lg">Jumlah hewan peliharaan </label>
                    <input type="number"
                    name="jumlah hewan" class="border rounded-lg text-gray-700 input input-bordered w-full relative"
                        placeholder="Jumlah hewan peliharaan" min="0">
                </div>
                <div class="mt-4">
                    <select name="warna" class="select select-bordered w-full max-w-xs">
                    <option value="" disabled selected>Warna backdrop</option>
                    <option>Gray</option>
                    <option>White</option>
                    <option>Pink</option>
                </select>
                </div>
                <div class="mt-4">
                    <p class="font-semibold text-lg mb-4">Apakah bersedia hasil foto di upload ke Sosial media
                        happistudio?</p>
                        {{-- <select name="upload_sosmed" id=""> --}}
                            <input type="radio" name="upload_sosmed" value="1" class="radio "/> Ya
                            <input type="radio" name="upload_sosmed" value="0" class="radio ml-3" /> Tidak
                        {{-- </select> --}}
                    {{-- <input type="radio"  class="radio " checked /> Ya
                    <input type="radio"  class="radio ml-3" /> Tidak --}}
                </div>
                <div class="flex justify-end mt-8">
                    <button type ="submit" class="btn btn-primary bg-black text-white rounded hover:bg-orange-700">
                        Booking
                    </button>
                </div>
            </div>

        </div>
        </form>
    </div>
</body>

</html>
