<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Upload extends Controller
{
    public function showUploadForm()
    {
        return view('upload');
    }

    public function Upload(Request $request)
    {
        $request->validate([
            'file' => 'required|file|max:10240',
        ]);

        $file = $request->file('file');

        // Original filename
        $filename = $file->getClientOriginalName();

        // Save to:
        // storage/app/college_application/student_upload
        $file->storeAs(
            'college_application/student_upload',
            $filename
        );

        return redirect('/upload')
            ->with('success', 'File uploaded successfully.')
            ->with('filename', $filename);
    }

    /*
     * Actual file response
     */
    public function viewFile($filename)
    {
        $path = 'college_application/student_upload/' . $filename;

        if (!Storage::exists($path)) {
            abort(404, 'File not found.');
        }

        $fullPath = Storage::path($path);

        $mimeType = mime_content_type($fullPath);

        return response()->file($fullPath, [
            'Content-Type' => $mimeType,
            'Content-Disposition' => 'inline; filename="' . basename($filename) . '"',
            'X-Content-Type-Options' => 'nosniff',
            'Cache-Control' => 'no-cache, no-store, must-revalidate',
        ]);
    }

    /*
     * Browser viewer page
     */
    public function viewer($filename)
    {
        $path = 'college_application/student_upload/' . $filename;

        if (!Storage::exists($path)) {
            abort(404, 'File not found.');
        }

        return view('file-viewer', [
            'filename' => $filename
        ]);
    }
}