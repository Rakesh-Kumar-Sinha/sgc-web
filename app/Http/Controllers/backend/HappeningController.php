<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Happening;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HappeningController extends Controller
{
     // Display the form for adding a new happening
     public function create()
     {
         return view('backend.add-hapenings');
     }
 
     // Store a newly created happening in the database
     public function store(Request $request)
     {
         // Validate the incoming request
         $request->validate([
             'title' => 'required|string|max:255',
             'banner_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
             'images' => 'nullable|array',
             'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
             'short_description' => 'nullable|string|max:255',
             'description' => 'nullable|string',
         ]);
 
         // Handle file uploads
         $bannerImage = $request->file('banner_image')->store('happenings/banners','public');
         $bannerImageUrl = Storage::url($bannerImage);
 
         $images = [];
         if ($request->hasFile('images')) {
             foreach ($request->file('images') as $image) {
                 $images[] = Storage::url($image->store('happenings/images','public'));
             }
         }
 
         // Create a new Happening record
         Happening::create([
             'title' => $request->title,
             'banner_image' => $bannerImageUrl,
             'images' => $images,
             'short_description' => $request->short_description,
             'description' => $request->description,
         ]);
 
         return redirect()->route('happenings.create')->with('success', 'Lab Happenings added successfully.');
     }
 
     // Display a listing of the happenings (optional)
    //  public function index()
    //  {
    //      $happenings = Happening::all();
    //      return view('backend.add-hapenings', compact('happenings'));
    //  }
}
