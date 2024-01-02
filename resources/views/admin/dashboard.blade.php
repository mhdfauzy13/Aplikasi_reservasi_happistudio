@extends('layouts.theme')

@section('content')
    <div class="lg:ml-[250px] ">
        <div class="flex justify-center mt-5">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-screen-lg mx-auto">
        <div class="bg-white p-8 rounded shadow-md">
            <h2 class="text-xl font-semibold mb-4">Total Customer</h2>
            <p class="text-3xl font-bold text-indigo-500">{{ $totalRegisteredUsers }}</p>
        </div>

        <div class="bg-white p-8 rounded shadow-md">
            <h2 class="text-xl font-semibold mb-4">Total Pricelist</h2>
            <p class="text-3xl font-bold text-yellow-500">{{ $totalPackages }}</p>
        </div>

                <div class="bg-red-500 p-8 rounded shadow-lg flex items-center">
                    <div class="mr-7 w-[70px]">
                        <img src="../assets/icon/pemasukan.png" alt="" style="filter: invert(100%);">
                    </div>
                    <div class="flex flex-col justify-end text-white">
                        <p class="flex justify-end text-lg font-semibold mb-2">Pemasukan</p>
                        <p class="flex justify-end text-xl font-bold">Rp.2.000.000</p>
                    </div>
                </div>



            </div>
        </div>
    </div>
@endsection
