<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Lab;
use Illuminate\Http\Request;

class LabController extends Controller
{
    public function create()
    {
        return view('backend.add-labs');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'banner_image' => 'required|image|mimes:jpeg,png,jpg,gif',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif',
            'description' => 'required|string',
            'short_description' => 'required|string|max:255'
        ]);

        // Upload banner image
        $bannerPath = $request->file('banner_image')->store('labs/banners', 'public');

        // Upload multiple lab images
        $images = [];
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $images[] = $image->store('labs/images', 'public');
            }
        }

        // Store data in the database
        Lab::create([
            'title' => $request->title,
            'banner_image' => $bannerPath,
            'images' => $images,
            'description' => $request->description,
            'short_description' => $request->short_description,
        ]);

        return redirect()->route('labs.create')->with('success', 'Lab added successfully!');
    }
}
