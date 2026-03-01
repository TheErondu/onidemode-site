<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $settings = Setting::all();
        return view('admin.dashboard.settings.manage',compact('settings'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Setting $setting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Setting $setting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $imageKeys = ['site_logo', 'site_favicon', 'og_image'];

        // Save all non-image text settings
        $data = $request->input('settings', []);
        foreach ($data as $key => $value) {
            Setting::where('key', $key)->update(['value' => $value]);
        }

        // Handle image uploads
        foreach ($imageKeys as $key) {
            if ($request->hasFile("images.{$key}") && $request->file("images.{$key}")->isValid()) {
                $file = $request->file("images.{$key}");
                $filename = $key . '.' . $file->getClientOriginalExtension();

                if (!file_exists(public_path('uploads/settings'))) {
                    mkdir(public_path('uploads/settings'), 0775, true);
                }

                $file->move(public_path('uploads/settings'), $filename);
                Setting::where('key', $key)->update(['value' => 'uploads/settings/' . $filename]);
            }
        }

        Artisan::call('config:clear');

        return redirect()->back()->with('message', 'Settings updated successfully.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Setting $setting)
    {
        //
    }
}
