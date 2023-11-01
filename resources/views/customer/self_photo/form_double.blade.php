<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>booking</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div>
        <div class="flex justify-center">
            <P class=" text-red-500 font-bold mt-10" style="font-family: Boogaloo; font-size: 40px;">FORM BOOKING</P>
        </div>

        <div class="flex justify-center mt-8">
            <div class="max-w-[500px] w-full">
                <div class="w-full">
                    <label for="" class="font-semibold text-lg">Nama lengkap</label>
                    <input type="text" placeholder="Nama lengkap" class="input input-bordered w-full relative" />
                </div>
                <div class="max-w-[500px] w-full mt-4">
                    <label for=""class="font-semibold text-lg">No whatsapp</label>
                    <input type="text" placeholder="No whatsapp" class="input input-bordered w-full relative" />
                </div>
                <div class="max-w-[500px] w-full mt-4">
                    <label for=""class="font-semibold text-lg">Email</label>
                    <input type="text" placeholder="Email" class="input input-bordered w-full relative" />
                </div>
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
                            <div class="w-[70px] h-[50px] p-3 rounded-lg border border-gray-500 mt-4 ml-3 ">
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
                    <button type ="button" class="btn btn-primary bg-black text-white rounded hover:bg-orange-700">
                        Booking
                    </button>
                </div>
            </div>

        </div>

    </div>
</body>

</html>
