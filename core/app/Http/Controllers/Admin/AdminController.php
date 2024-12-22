<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController  extends Controller
{


    public function createPage() {}

    public function managePage(Page $page)
    {
        return view('admin.dashboard.pages.manage', ['page' => $page]);
    }

    public function updatePage(Request $request, Page $page)
    {
        // Validate the incoming request
        $request->validate([
            'page_name' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255',
            'page_title' => 'required|string|max:255',
            'page_subtitle' => 'required|string|max:255',
            'sections' => 'required|array', // Sections must be an array
        ]);

        // Prepare the data for the `content` field
        $content = [
            'sections' => $request->input('sections')
        ];

        // Update the page with the new data
        $page->update([
            'page_name' => $request->input('page_name'),
            'slug' => $request->input('slug'),
            'page_title' => $request->input('page_title'),
            'page_subtitle' => $request->input('page_subtitle'),
            'content' => json_encode($content, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT),
        ]);

        // Redirect with a success message
        return redirect()->route('admin.pages.manage')->with('message', 'Page updated successfully!');
    }


    public function uploadFile(Request $request)
    {
        // Validate the file input
        $request->validate([
            'file' => 'required|file|mimes:jpg,jpeg,png,gif,svg|max:2048', // Modify file types and size as needed
        ]);

        try {
            // Retrieve the uploaded file
            $file = $request->file('file');

            // Get the original file name
            $originalFileName = $file->getClientOriginalName();

            // Save the file with the original name, overwriting if it already exists
            $filePath = $file->storeAs('uploads', $originalFileName, 'public');

            // Return the file path in the response
            return response()->json([
                'success' => true,
                'filePath' => Storage::url($filePath), // URL to access the file
            ]);
        } catch (\Exception $e) {
            // Handle any errors during the upload process
            return response()->json([
                'success' => false,
                'message' => 'File upload failed. Please try again.',
            ], 500);
        }
    }

}
