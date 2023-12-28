<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../assets/image/logofix.png" type="image/png">
    <title>Edit Form</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-200 p-8">

    <div class="max-w-2xl mx-auto bg-white p-6 rounded-md shadow-md">

        <h1 class="text-2xl font-bold mb-4">Edit Form</h1>

        <form id="editForm" action="{{ route('pakets.update', ['paket' => $paket]) }}" method="POST"
            enctype="multipart/form-data">

            @csrf

            @method('PUT')
            <!-- Nama Paket -->
            <div class="mb-4">
                <label for="nama_paket" class="block text-sm font-medium text-gray-600">Nama Paket</label>
                <input type="text" name="nama_paket" id="nama_paket" value="{{ $paketModel->nama_paket }}"
                    class="mt-1 p-2 w-full border rounded-md">
            </div>

            <!-- Deskripsi -->
            <div class="mb-4">
                <label for="deskripsi" class="block text-sm font-medium text-gray-600">Deskripsi</label>
                <textarea name="deskripsi" id="deskripsi" rows="4"
                    class="mt-1 p-2 w-full border rounded-md">{{ $paketModel->deskripsi }}</textarea>

            </div>

            <!-- Gambar -->
            <div class="mb-4">
                <label for="gambar" class="block text-sm font-medium text-gray-600">Gambar</label>
                <div class="w-[75px]">
                    <img src=" {{ asset('storage/pakets/' . $paketModel->gambar) }}" alt="">
                </div>
                <input type="file" name="gambar" id="gambar" accept="image/*" value="{{ $paketModel->gambar }}"
                    class="mt-1 p-2 w-full border rounded-md">
            </div>

            <!-- Harga -->
            <div class="mb-4">
                <label for="harga" class="block text-sm font-medium text-gray-600">Harga</label>
                <input type="text" name="harga" id="harga" value="{{ $paketModel->harga }}"
                    class="mt-1 p-2 w-full border rounded-md">
            </div>

            <!-- Tombol Submit -->
            <div class="flex justify-end">
                <button type="button" id="btnSimpan"
                    class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:border-blue-300">
                    Simpan
                </button>
            </div>
        </form>

        <script>
            document.addEventListener('DOMContentLoaded', function () {
                document.getElementById('btnSimpan').addEventListener('click', function () {
                    Swal.fire({
                        title: "Do you want to save the changes?",
                        showDenyButton: true,
                        showCancelButton: true,
                        confirmButtonText: "Save",
                        denyButtonText: `Don't save`
                    }).then((result) => {
                        if (result.isConfirmed) {
                            // Lakukan submit formulir setelah konfirmasi simpan
                            document.getElementById('editForm').submit();
                            Swal.fire("Saved!", "", "success");
                        } else if (result.isDenied) {
                            Swal.fire("Changes are not saved", "", "info");
                        }
                    });
                });
            });
        </script>

    </div>

</body>

</html>
