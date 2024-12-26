<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController  extends Controller
{


    public function createPage() {
        
    }

    public function managePage(Page $page)
    {
        return view('admin.dashboard.pages.manage', ['page' =>$page]);
    }

    public function updatePage(Request $request, Page $page)
    {
        // Validate the incoming request
        $request->validate([
            'sections' => 'required|array', // Sections must be an array
        ]);

        // Prepare the data for the `content` field
        $content = [
            'sections' => $request->input('sections')
        ];

        // Update the page with the new data
        $page->update([
            'page_name' => $page->page_name,
            'slug' => $page->slug,
            'page_title' => $page->page_title,
            'page_subtitle' => $page->page_subtitle,
            'content' => $content,
        ]);

        // Redirect with a success message
        return redirect()->route('admin.pages.manage',$page)->with('message', 'Page updated successfully!');
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
