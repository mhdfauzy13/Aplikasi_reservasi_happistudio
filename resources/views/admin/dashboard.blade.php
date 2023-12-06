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

         <div class="bg-white p-8 rounded shadow-md">
            <h2 class="text-xl font-semibold mb-4">Total Pemasukan</h2>
            <p class="text-3xl font-bold text-green-500">10</p>
        </div>

        <!-- Add more boxes for other data -->

    </div>
</div>
</div>
@endsection
