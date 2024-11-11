<?php

namespace App\Http\Controllers;

use Illuminate\Container\Attributes\Storage;
use Illuminate\Http\Request;

class ImageUploadController extends Controller
{
    public function upload(Request $request)
    {
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $path = $file->store('uploads', 'public');
            $url = asset('storage/' . $path); // Alternative URL generation

            return response()->json(['location' => $url]);
        }

        return response()->json(['error' => 'File upload failed'], 400);
    }
}
