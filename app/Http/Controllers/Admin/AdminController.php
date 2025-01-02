<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\GenericEmail;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class AdminController  extends Controller
{


    public function createPage() {}

    public function managePage(Page $page)
    {
        return view('admin.dashboard.pages.' . $page->slug . '.manage', ['page' => $page]);
    }

    public function updatePage(Request $request, Page $page)
    {
        $user = Auth::user();
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

        $details = [
            'title' => 'Page Updated',
            'body' => 'The page ' . $page->page_name . ' has been modified by' . $user->name . '.',
            'user' => $user,
            'cta_link ' => route('admin.pages.manage', $page),
        ];

        Mail::to($user->email)->queue(new GenericEmail($details));

        // Redirect with a success message
        return redirect()->route('admin.pages.manage', $page)->with('message', 'Page updated successfully!');
    }


    public function uploadFile(Request $request)
    {
        // Validate the file input
        $request->validate([
            'file' => 'required|file|mimes:jpg,jpeg,png,gif,webp,webm,svg|max:50000', // Modify file types and size as needed
        ]);

        try {
            // Retrieve the uploaded file
            $file = $request->file('file');

            // Get the original file name
            $originalFileName = $file->getClientOriginalName();

            // Define the target path in the root/uploads folder
            $targetPath = base_path('uploads'); // This points to the "uploads" folder in the root

            // Ensure the directory exists
            if (!File::exists($targetPath)) {
                File::makeDirectory($targetPath, 0755, true); // Create the directory if it doesn't exist
            }

            // Move the file to the uploads folder
            $file->move($targetPath, $originalFileName);

            // Return the relative file path in the response
            return response()->json([
                'success' => true,
                'filePath' => 'uploads/' . $originalFileName, // Relative file path
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
