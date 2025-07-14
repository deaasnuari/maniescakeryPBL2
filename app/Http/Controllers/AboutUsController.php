<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\AboutUs;

class AboutUsController extends Controller
{
    // public function index()
    // {
    //     $about = AboutUs::first();

    //     if (!$about) {
            
    //         $about = AboutUs::create([
    //             'about_left' => '',
    //             'about_right' => '',
    //             'philosophy_left' => '',
    //             'philosophy_right' => '',
    //         ]);
    //     }

    //     $galeriItems = AboutUs::whereNotNull('galeri')->take(6)->get();

    //     return view('pages.about_us', compact('about', 'galeriItems'));    
    // }

    public function index()
    {
        // baris teks (about/philosophy) – tetap pakai first()
        $about = AboutUs::first() ?: AboutUs::create([
            'about_left'       => '',
            'about_right'      => '',
            'philosophy_left'  => '',
            'philosophy_right' => '',
        ]);

        // ambil SEMUA baris galeri (maks. 6) yg masih ada file
        $galeriItems = AboutUs::whereNotNull('galeri')
                            ->orderBy('id')
                            ->take(6)
                            ->get();

        // tambahkan placeholder sampai berjumlah 6
        while ($galeriItems->count() < 6) {
            $galeriItems->push((object)['galeri' => null]);   // objek anon dengan properti galeri
        }

        return view('pages.about_us', compact('about', 'galeriItems'));
    }

    public function updateAbout(Request $request, $id)
    {
        $about = AboutUs::findOrFail($id);

        $about->update([
            'about_left' => $request->about_left,
            'about_right' => $request->about_right,
        ]);

        return redirect()->back()->with('success', 'About Us updated successfully.');
    }

    public function updatePhilosophy(Request $request, $id)
    {
        $about = AboutUs::findOrFail($id);

        $about->update([
            'philosophy_left' => $request->philosophy_left,
            'philosophy_right' => $request->philosophy_right,
        ]);

        return redirect()->back()->with('success', 'Philosophy updated successfully.');
    }
   
    // public function updateGaleri(Request $request)
    // {
    //     $request->validate([
    //         'images.*' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
    //     ]);

    //     $galeriItems = AboutUs::whereNotNull('galeri')->take(6)->get();

    //     foreach ($request->file('images', []) as $index => $image) {
    //         if ($image && isset($galeriItems[$index])) {
    //             $galeri = $galeriItems[$index];

    //             if ($galeri->galeri) {
    //                 Storage::delete('public/' . $galeri->galeri);
    //             }

    //             $path = $image->store('galeri', 'public');
    //             $galeri->update(['galeri' => $path]);
    //         }
    //     }

    //     return redirect()->back()->with('success', 'Galeri berhasil diperbarui.');
    // }

    public function updateGaleri(Request $request)
    {
        $request->validate([
            'images.*' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        // koleksi baris galeri (maks. 6) yang MASIH ada (bisa < 6)
        $existing = AboutUs::whereNotNull('galeri')
                        ->orderBy('id')
                        ->take(6)
                        ->get();

        foreach ($request->file('images', []) as $index => $image) {
            if (!$image) continue;                     // slot tidak diisi

            $path = $image->store('galeri', 'public'); // upload dulu

            if (isset($existing[$index])) {
                /* ---------- slot SUDAH punya baris ---------- */
                $row = $existing[$index];

                if ($row->galeri) {                   // hapus file lama, kalau ada
                    Storage::disk('public')->delete($row->galeri);
                }
                $row->update(['galeri' => $path]);

            } else {
                /* ---------- slot KOSONG: buat baris baru ---------- */
                AboutUs::create(['galeri' => $path]);
            }
        }

        return back()->with('success', 'Galeri berhasil diperbarui.');
    }

}
