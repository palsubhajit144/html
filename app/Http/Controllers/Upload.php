<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Upload extends Controller
{
    //
    public function Upload(Request $request){

        $request->validate([ 'file' => 'required|file|max:10240', // 10 MB 
        ]);
        $file = $request->file('file');

        // Original filename 
        $filename = $file->getClientOriginalName();

        // Upload to: 
        // storage/app/college_application/student_upload
        $path = $file->storeAs( 'college_application/student_upload', $filename );
       
        return redirect('/upload')
            ->with('success', 'File uploaded successfully.')
            ->with('filename', $filename);

        // return response()->json([ 
        //     'message' => 'File uploaded successfully.',
        //      'filename' => $filename,
        //       'path' => $path,
        //       'view_url' => url('/uploaded-file/' . rawurlencode($filename)), ]);
        // dd($file);
    }

    // public function viewFile($filename) { 
    //     $path = 'college_application/student_upload/' . $filename;
    //     if (!Storage::exists($path)) { 
    //         abort(404, 'File not found.'); 
    //         } 
        
    //     $fullPath = Storage::path($path);

    //     return response()->file($fullPath, [
    //         'Content-Type' => Storage::mimeType($path),
    //         'Content-Disposition' => 'inline; filename="' . $filename . '"', 
    //         ]);
    // }

    public function viewFile($filename)
    {
        $path = 'college_application/student_upload/' . $filename;

        if (!Storage::exists($path)) {
            abort(404, 'File not found.');
        }

        $fullPath = Storage::path($path);

        // Get the actual MIME type from the file
        $mimeType = mime_content_type($fullPath);

        return response()->file($fullPath, [
            'Content-Type' => $mimeType,
            'Content-Disposition' => 'inline; filename="' . basename($filename) . '"',
            'X-Content-Type-Options' => 'nosniff',
        ]);
    }
}