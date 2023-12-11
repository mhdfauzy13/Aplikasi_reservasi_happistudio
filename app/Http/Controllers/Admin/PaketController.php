<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Paket;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PaketController extends Controller
{
    /**
     * index
     */
    public function index(): View
    {
        //get posts
        $pakets = Paket::latest()->paginate(5);
        // dd($pakets);

        //render view with posts
        return view('Admin.data_pricelist.data_pricelist', compact('pakets'));
    }

    public function create(): View
    {
        return view('Admin.data_pricelist.create');
    }

    public function store(Request $request): RedirectResponse
    {
        //validate form
        $this->validate($request, [
            'nama_paket' => 'required|min:5|unique:pakets,nama_paket',
            'deskripsi' => 'required|min:10',
            'gambar' => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'harga' => 'required|max:10',
        ]);

        //upload image
        $image = $request->file('gambar');
        $image->storeAs('public/pakets', $image->hashName());

        //create post
        Paket::create([
            'nama_paket' => $request->nama_paket,
            'deskripsi' => $request->deskripsi,
            'gambar' => $image->hashName(),
            'harga' => $request->harga,
        ]);

        //redirect to index
        return redirect()
            ->route('pakets.index')
            ->with(['success' => 'Data Berhasil Disimpan!']);
    }
    public function edit($paket){
        $paketModel = Paket::find($paket);

        // dd($paketModel);
        if (!$paketModel) {

            return redirect()
                ->route('pakets.index')
                ->with(['error' => 'Data tidak ditemukan!']);

        }
        return view('Admin.data_pricelist.edit', compact('paketModel', 'paket'));

    }
    public function update(Request $request, $paket): RedirectResponse
    {
        $paketModel = Paket::find($paket);

        // dd($paketModel);
        if (!$paketModel) {

            return redirect()
                ->route('pakets.index')
                ->with(['error' => 'Data tidak ditemukan!']);

        }

        //validate form
        $this->validate($request, [
            'nama_paket' => 'required|min:5',
            'deskripsi' => 'required|min:10',
            // 'gambar' => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'harga' => 'required|max:10',
        ]);


        //upload image
        $imagename = '';
        if($request->hasFile('gambar')){
            Storage::delete('public/pakets/' . $paketModel->gambar);
            $image = $request->file('gambar');
            $image->storeAs('public/pakets', $image->hashName());
            $imagename =  $image->hashName();
        $paketModel->gambar = $imagename;

        }


        $paketModel->nama_paket = $request->nama_paket;
        $paketModel->deskripsi = $request->deskripsi;
        $paketModel->harga = $request->harga;
        $paketModel->update();

        //create post
        // Paket::create([
        //     'nama_paket' => $request->nama_paket,
        //     'deskripsi' => $request->deskripsi,
        //     'gambar' => $image->hashName(),
        //     'harga' => $request->harga,
        // ]);


        //redirect to index
        return redirect()
            ->route('pakets.index')
            ->with(['success' => 'Data Berhasil Disimpan!']);
    }



    public function destroy($paket)
    {
        $paketModel = Paket::find($paket);

        if (!$paketModel) {
            return redirect()
                ->route('pakets.index')
                ->with(['error' => 'Data tidak ditemukan!']);
        }

        // Hapus gambar jika ada
        if ($paketModel->gambar) {
            Storage::delete('public/pakets/' . $paketModel->gambar);
        }

        $paketModel->delete();

        return redirect()
            ->route('pakets.index')
            ->with(['success' => 'Data berhasil dihapus!']);
    }
}
