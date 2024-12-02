<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\TourCategory;
use Illuminate\Http\Request;
use App\Services\FileUploadService ;

class TourCategoryController extends Controller
{
    // Display all categories
    public function index()
    {
        $categories = TourCategory::all();
        return view('website.admin.tour.index', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:tour_categories|max:255',
            'description' => 'required',
            'banner_images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'banner_videos.*' => 'nullable|mimes:mp4,mov,avi|max:20480',
        ]);

        $data = $request->only('name', 'description', 'location');

        // Handle file uploads for images
        if ($request->hasFile('banner_images')) {
            $data['banner_images'] = json_encode(
                array_map(function ($file) {
                    return app(FileUploadService::class)->uploadSingleImage($file);
                }, $request->file('banner_images'))
            );
        }

        // Handle file uploads for videos
        if ($request->hasFile('banner_videos')) {
            $data['banner_videos'] = json_encode(
                array_map(function ($file) {
                    return app(FileUploadService::class)->uploadSingleVideo($file);
                }, $request->file('banner_videos'))
            );
        }

        TourCategory::create($data);

        return redirect()->route('admin.tour-category.index')->with('success', 'Category added successfully.');
    }

    // Update an existing category
    public function update(Request $request, $id)
    {
        $category = TourCategory::findOrFail($id);

        $request->validate([
            'name' => 'required|unique:tour_categories,name,' . $id . '|max:255',
            'description' => 'required',
            'banner_images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'banner_videos.*' => 'nullable|mimes:mp4,mov,avi|max:20480',
        ]);

        $data = $request->only('name', 'description', 'location');

        // Handle file uploads for images
        if ($request->hasFile('banner_images')) {
            $data['banner_images'] = json_encode(
                array_map(function ($file) {
                    return app(FileUploadService::class)->uploadSingleImage($file);
                }, $request->file('banner_images'))
            );
        }

        // Handle file uploads for videos
        if ($request->hasFile('banner_videos')) {
            $data['banner_videos'] = json_encode(
                array_map(function ($file) {
                    return app(FileUploadService::class)->uploadSingleVideo($file);
                }, $request->file('banner_videos'))
            );
        }

        $category->update($data);

        return redirect()->route('admin.tour-category.index')->with('success', 'Category updated successfully.');
    }

    // Delete a category
    public function destroy($id)
    {
        $category = TourCategory::findOrFail($id);

        // Optionally, delete related files (images/videos)
        if ($category->banner_images) {
            foreach (json_decode($category->banner_images) as $image) {
                @unlink(public_path($image));
            }
        }
        if ($category->banner_videos) {
            foreach (json_decode($category->banner_videos) as $video) {
                @unlink(public_path($video));
            }
        }

        $category->delete();

        return redirect()->route('admin.tour-category.index')->with('success', 'Category deleted successfully.');
    }
}
