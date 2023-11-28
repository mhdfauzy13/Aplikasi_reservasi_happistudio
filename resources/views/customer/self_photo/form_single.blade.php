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
                    <input type="text" placeholder="No whatsapp" class="input input-bordered w-full relative" />
                </div>
                {{-- <div class="max-w-[500px] w-full mt-4">
                    <label for=""class="font-semibold text-lg">Email</label>
                    <input type="text" placeholder="Email" class="input input-bordered w-full relative" />
                </div> --}}
                <div class="mt-4">
    <p class="font-semibold text-lg mb-4">Kategori</p>
    <select id="kategori_paket" class="select select-bordered w-full">
        <option disabled selected>-- Pilih kategori --</option>
        <option value="single">Single</option>
        <option value="double">Double</option>
        <option value="group">Group</option>
    </select>
</div>

<div id="tambahan_orang" class="max-w-[500px] w-full mt-4" style="display: none;">
    <label for="" class="font-semibold text-lg">Tambahan Orang</label>
    <input name="tambahan_orang" type="text" placeholder="Tambahan Orang" class="input input-bordered w-full relative" />
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
                    <p class="mt-4 font-semibold text-lg ">Tanggal booking</p>
                    <div class="flex flex-wrap">
                        @foreach ($date7hari as $item)
                            <div
                                class="w-[97px] h-[60px] p-2 rounded-lg border border-gray-500 hover:bg-gray-300 mt-4 ml-3 ">
                                <p class="text-xs text-center">{{ $item->tanggal }} {{ $item->bulan }}</p>
                                <p class="font-semibold text-center ">{{ $item->hari }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div>
                    <p class="mt-4 font-semibold text-lg">Jam booking</p>
                    <div class="flex flex-wrap">
                        @foreach ($waktu as $item)
                            <div
                                class="w-[70px] h-[50px] p-3 rounded-lg border border-gray-500 hover:bg-gray-300 mt-4 ml-3 ">
                                <p class="font-semibold text-center">{{ $item->waktu }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="max-w-[500px] w-full mt-4">
                    <label for=""class="font-semibold text-lg">Jumlah hewan peliharaan (opsional)</label>
                    <input type="text" placeholder="Jumlah hewan peliharaan"
                        class="input input-bordered w-full relative" />
                </div>
                <div class="mt-4">
                    <p class="font-semibold text-lg mb-4">Warna backdrop</p>
                    <input type="radio" name="radio-1" class="radio " checked /> Gray
                    <input type="radio" name="radio-2" class="radio ml-3" /> White
                    <input type="radio" name="radio-3" class="radio ml-3" /> Pink
                </div>
                <div class="mt-4">
                    <p class="font-semibold text-lg mb-4">Apakah bersedia hasil foto di upload ke Sosial media
                        happistudio?</p>
                    <input type="radio" name="radio-1" class="radio " checked /> Ya
                    <input type="radio" name="radio-2" class="radio ml-3" /> Tidak
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
