@extends('layouts.theme')
@section('content')
    <div class=" lg:ml-[15%] ">
        <!-- Table Section -->
        <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
            <!-- Card -->
            <div class="flex flex-col">
                <div class="-m-1.5 overflow-x-auto">
                    <div class="p-1.5 min-w-full inline-block align-middle">
                        <div
                            class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden dark:bg-slate-900 dark:border-gray-700">
                            <!-- Header -->
                            <div
                                class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-b border-gray-200 dark:border-gray-700">
                                <div class="flex justify-between items-center w-full">
                                    <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-200">
                                        Data Pricelist
                                    </h2>
                                    <div>

                                        <a href={{ route('pakets.create') }}>
                                            <button type="button"
                                                class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                                                tambah
                                            </button>
                                        </a>
                                    </div>
                                </div>


                            </div>
                            <!-- End Header -->

                            <!-- Table -->
                            <div class="flex flex-col">
                                <div class="-m-1.5 overflow-x-auto">
                                    <div class="p-1.5 min-w-full inline-block align-middle">
                                        <div
                                            class="border rounded-lg divide-y divide-gray-200 dark:border-gray-700 dark:divide-gray-700">
                                            <div class="py-3 px-4">

                                            </div>
                                            <div class="overflow-hidden">
                                                <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                                                    <thead class="bg-gray-50 dark:bg-gray-700">
                                                        <tr>
                                                            <th scope="col"
                                                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">
                                                                Name paket</th>
                                                            <th scope="col"
                                                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">
                                                                Deskripsi
                                                            </th>
                                                            <th scope="col"
                                                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">
                                                                Gambar
                                                            </th>
                                                            <th scope="col"
                                                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">
                                                                Harga
                                                            </th>
                                                            {{-- <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Address</th> --}}
                                                            <th scope="col"
                                                                class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase">
                                                                AKSI
                                                            </th>


                                                        </tr>
                                                    </thead>
                                                    <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                                                        @foreach ($pakets as $item)
                                                            <tr>
                                                                <td
                                                                    class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">
                                                                    {{ $item->nama_paket }}

                                                                </td>
                                                                <td
                                                                    class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                                    {{ \Illuminate\Support\Str::limit($item->deskripsi, $limit = 20, $end = '...') }}

                                                                </td>
                                                                <td
                                                                    class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                                    {{-- @error('gambar') --}}
                                                                    {{-- <div class="alert alert-danger mt-2"> --}}
                                                                    <div class="w-[65px]">
                                                                        <img src=" {{ asset('storage/pakets/' . $item->gambar) }}"
                                                                            alt="">
                                                                    </div>
                                                                    {{-- </div> --}}
                                                                    {{-- @enderror --}}
                                                                </td>
                                                                <td
                                                                    class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                                    {{ $item->harga }}

                                                                </td>

                                                                <td
                                                                    class="flex justify-end px-6 py-4 mt-5 whitespace-nowrap text-right text-sm font-medium">
                                                                    <a
                                                                        href="{{ route('pakets.edit', ['paket' => $item->id]) }}">
                                                                        <button type="button"
                                                                            class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-yellow-500 text-white hover:bg-yellow-600 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                                                                            edit
                                                                        </button>
                                                                    </a>
                                                                    <form method="post"
                                                                        action="{{ route('pakets.destroy', ['paket' => $item->id]) }}"
                                                                        onsubmit="return confirmSwal(event)">
                                                                        @csrf
                                                                        @method('delete')
                                                                        <button type="submit"
                                                                            class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-red-500 text-white hover:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                                                                            hapus
                                                                        </button>
                                                                    </form>

                                                                    <script>
                                                                        function confirmSwal(event) {
                                                                            event.preventDefault();

                                                                            Swal.fire({
                                                                                title: "Are you sure?",
                                                                                text: "You won't be able to revert this!",
                                                                                icon: "warning",
                                                                                showCancelButton: true,
                                                                                confirmButtonColor: "#3085d6",
                                                                                cancelButtonColor: "#d33",
                                                                                confirmButtonText: "Yes, delete it!"
                                                                            }).then((result) => {
                                                                                if (result.isConfirmed) {
                                                                                    // Jika pengguna mengonfirmasi penghapusan
                                                                                    Swal.fire({
                                                                                        title: "Deleted!",
                                                                                        text: "Your file has been deleted.",
                                                                                        icon: "success"
                                                                                    });
                                                                                    event.target.submit();
                                                                                }
                                                                            });

                                                                            return false;
                                                                        }
                                                                    </script>


                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Table -->

                            <!-- Footer -->
                            <!-- End Footer -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Card -->
        </div>
        <!-- End Table Section -->
    </div>
@endsection
