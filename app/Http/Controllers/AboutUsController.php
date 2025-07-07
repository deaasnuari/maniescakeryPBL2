<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AboutUs;

class AboutUsController extends Controller
{
    public function index()
    {
        $about = AboutUs::first();

        if (!$about) {
            // Buat record kosong pertama kali jika belum ada
            $about = AboutUs::create([
                'section_left' => '',
                'section_right' => '',
            ]);
        }

        return view('pages.about_us', compact('about'));
    }
    public function updateAbout(Request $request, $id)
    {
        $about = AboutUs::findOrFail($id);

        $about->update([
            'section_left' => $request->section_left,
            'section_right' => $request->section_right,
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
    public function updateImages(Request $request, $id)
    {
        $about = AboutUs::findOrFail($id);

        $fields = ['image_1', 'image_2', 'image_3', 'image_4', 'image_5', 'image_6'];

        foreach ($fields as $field) {
            if ($request->hasFile($field)) {
                $path = $request->file($field)->store('about_images', 'public');
                $about->$field = $path;
            }
        }

        $about->save();

        return redirect()->back()->with('success', 'Images updated successfully.');
    }
}

//     public function destroyText($id, $section)
//     {
//         $about = AboutUs::findOrFail($id);
//         $about->$section = null; // kosongkan hanya field tertentu
//         $about->save();

//         return redirect()->back()->with('success', ucfirst($section).' Deleted');
//     }
// }
