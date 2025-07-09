<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\AboutUs;

class AboutUsController extends Controller
{
    public function index()
    {
        $about = AboutUs::first();

        if (!$about) {
            
            $about = AboutUs::create([
                'about_left' => '',
                'about_right' => '',
                'philosophy_left' => '',
                'philosophy_right' => '',
            ]);
        }

        $galeriItems = AboutUs::whereNotNull('galeri')->take(6)->get();

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
   
    public function updateGaleri(Request $request)
    {
        $request->validate([
            'images.*' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $galeriItems = AboutUs::whereNotNull('galeri')->take(6)->get();

        foreach ($request->file('images', []) as $index => $image) {
            if ($image && isset($galeriItems[$index])) {
                $galeri = $galeriItems[$index];

                if ($galeri->galeri) {
                    Storage::delete('public/' . $galeri->galeri);
                }

                $path = $image->store('galeri', 'public');
                $galeri->update(['galeri' => $path]);
            }
        }

        return redirect()->back()->with('success', 'Galeri berhasil diperbarui.');
    }
}
