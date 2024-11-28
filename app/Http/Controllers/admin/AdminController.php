<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\ManageHome;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class AdminController extends Controller
{
    public function dashboard() {
        return view('website.admin.dashboard') ;
    }

    public function manageHomePage() {
        $manageHomes = ManageHome::first();
        return view('website.admin.managehome' , compact('manageHomes')) ;
    }

    public function addManageHome(Request $request)
{
    $validatedData = $request->validate([
        'title' => 'required|string|max:255',
        'video' => 'required|file|mimes:mp4,avi,mov|max:20480', // Allow video files only
        'status' => 'required|in:active,inactive',
    ]);

    // Ensure the `uploads` directory exists
    $uploadPath = public_path('uploads');
    if (!File::exists($uploadPath)) {
        File::makeDirectory($uploadPath, 0777, true, true);
    }

    // Store the video in the `uploads` folder
    $videoName = time() . '_' . $request->file('video')->getClientOriginalName();
    $request->file('video')->move($uploadPath, $videoName);

    // Create the new ManageHome entry
    ManageHome::create([
        'title' => $validatedData['title'],
        'video' => 'uploads/' . $videoName,
        'status' => $validatedData['status'],
    ]);

    return redirect()->route('admin.manage-home-page')->with('success', 'Entry added successfully.');
}

// Edit an existing ManageHome entry
public function editManageHome(Request $request, $id)
{
    $validatedData = $request->validate([
        'title' => 'required|string|max:255',
        'video' => 'nullable|file|mimes:mp4,avi,mov|max:20480', 
        'status' => 'required|in:active,inactive',
    ]);

    $manageHome = ManageHome::findOrFail($id);

    // Ensure the `uploads` directory exists
    $uploadPath = public_path('uploads');
    if (!File::exists($uploadPath)) {
        File::makeDirectory($uploadPath, 0777, true, true);
    }

    // Update the video only if a new one is uploaded
    if ($request->hasFile('video')) {
        // Delete the old video
        if ($manageHome->video && File::exists(public_path($manageHome->video))) {
            File::delete(public_path($manageHome->video));
        }

        $videoName = time() . '_' . $request->file('video')->getClientOriginalName();
        $request->file('video')->move($uploadPath, $videoName);
        $validatedData['video'] = 'uploads/' . $videoName;
    } else {
        $validatedData['video'] = $manageHome->video; // Keep the existing video
    }

    $manageHome->update($validatedData);

    return redirect()->route('admin.manage-home-page')->with('success', 'Entry updated successfully.');
}

    // Delete a ManageHome entry
    public function deleteManageHome($id)
{
    $manageHome = ManageHome::findOrFail($id);

    // Check if video exists and delete it
    if ($manageHome->video && File::exists(public_path($manageHome->video))) {
        File::delete(public_path($manageHome->video));
    }

    // Delete the database record
    $manageHome->delete();

    return redirect()->route('admin.manage-home-page')->with('success', 'Entry deleted successfully.');
}
}
