<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\TourCategory;
use Illuminate\Http\Request;
use App\Services\FileUploadService;
use Illuminate\Support\Facades\Log;

class TourCategoryController extends Controller
{
    // Display all categories
    public function index()
    {
        $categories = TourCategory::all();

        // Log success for retrieving categories
        //  Log::info('Categories fetched successfully.', ['categories' => $categories]);

        return view('website.admin.tour.index', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:tour_categories|max:255',
            'description' => 'required',
            'banner_images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
            'banner_videos.*' => 'nullable|mimes:mp4,mov,avi',
        ]);

        $data = $request->only('name', 'description', 'location');

        try {
            // Log the initial request data before processing
            Log::info('Processing new category creation.', ['request_data' => $request->only('name', 'description', 'location')]);

            // Handle file uploads for images
            if ($request->hasFile('banner_images')) {
                $data['banner_images'] = json_encode(
                    array_map(function ($file) {
                        try {
                            $uploadedImagePath = app(FileUploadService::class)->uploadSingleImage($file);
                            // Log successful image upload
                            return $uploadedImagePath;
                        } catch (\Exception $e) {
                            // Log error during image upload
                            Log::error('Error uploading image.', ['file' => $file->getClientOriginalName(), 'error' => $e->getMessage()]);
                        }
                    }, $request->file('banner_images'))
                );
            }

            // Handle file uploads for videos
            if ($request->hasFile('banner_videos')) {
                $data['banner_videos'] = json_encode(
                    array_map(function ($file) {
                        try {
                            $uploadedVideoPath = app(FileUploadService::class)->uploadSingleVideo($file);
                            // Log successful video upload
                            return $uploadedVideoPath;
                        } catch (\Exception $e) {
                            // Log error during video upload
                            Log::error('Error uploading video.', ['file' => $file->getClientOriginalName(), 'error' => $e->getMessage()]);
                        }
                    }, $request->file('banner_videos'))
                );
            }

            // Create the new category
            TourCategory::create($data);

            // Log success message for category creation
            Log::info('New category created successfully.', ['category_data' => $data]);

            return redirect()->route('admin.tour-category.index')->with('success', 'Category added successfully.');
        } catch (\Exception $e) {
            // Log error during category creation
            Log::error('Error while creating category.', [
                'error' => $e->getMessage(),
                'request_data' => $request->all(),
            ]);

            return redirect()->route('admin.tour-category.index')->with('error', 'Failed to add category.');
        }
    }

    public function update(Request $request, $id)
    {
        $category = TourCategory::findOrFail($id);
    
        $request->validate([
            'name' => 'required|unique:tour_categories,name,' . $id . '|max:255',
            'description' => 'required',
            'banner_images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
            'banner_videos.*' => 'nullable|mimes:mp4,mov,avi',
        ]);
    
        $data = $request->only('name', 'description', 'location');
    
        try {
            // Handle file uploads for images
            if ($request->hasFile('banner_images')) {
                // Delete old banner images if they exist
                if ($category->banner_images) {
                    foreach (json_decode($category->banner_images) as $oldImage) {
                        $imagePath = public_path($oldImage);
                        if (file_exists($imagePath)) {
                            @unlink($imagePath);  // Delete the old image
                        }
                    }
                }
    
                $data['banner_images'] = json_encode(
                    array_map(function ($file) {
                        try {
                            $uploadedImagePath = app(FileUploadService::class)->uploadSingleImage($file);
                            // Return the uploaded image path if upload is successful
                            return $uploadedImagePath;
                        } catch (\Exception $e) {
                            // Log error during image upload
                            Log::error('Error uploading image.', ['file' => $file->getClientOriginalName(), 'error' => $e->getMessage()]);
                            return null;  // Handle the case where the upload failed
                        }
                    }, $request->file('banner_images'))
                );
            }
    
            // Handle file uploads for videos
            if ($request->hasFile('banner_videos')) {
                // Delete old banner videos if they exist
                if ($category->banner_videos) {
                    foreach (json_decode($category->banner_videos) as $oldVideo) {
                        $videoPath = public_path($oldVideo);
                        if (file_exists($videoPath)) {
                            @unlink($videoPath);  // Delete the old video
                        }
                    }
                }
    
                $data['banner_videos'] = json_encode(
                    array_map(function ($file) {
                        try {
                            $uploadedVideoPath = app(FileUploadService::class)->uploadSingleVideo($file);
                            // Return the uploaded video path if upload is successful
                            return $uploadedVideoPath;
                        } catch (\Exception $e) {
                            // Log error during video upload
                            Log::error('Error uploading video.', ['file' => $file->getClientOriginalName(), 'error' => $e->getMessage()]);
                            return null;  // Handle the case where the upload failed
                        }
                    }, $request->file('banner_videos'))
                );
            }
    
            // Update the category with new data
            $category->update($data);
    
            // Log success message
            Log::info('Category updated successfully.', ['category_id' => $id, 'updated_data' => $data]);
    
            return redirect()->route('admin.tour-category.index')->with('success', 'Category updated successfully.');
        } catch (\Exception $e) {
            // Log error during update
            Log::error('Error while updating category.', [
                'category_id' => $id,
                'error' => $e->getMessage(),
                'request_data' => $request->all(),
            ]);
    
            return redirect()->route('admin.tour-category.index')->with('error', 'Failed to update category.');
        }
    }
    


    // Delete a category
    public function destroy($id)
    {
        $category = TourCategory::findOrFail($id);

        try {
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

            // Delete the category
            $category->delete();

            // Log success message
            Log::info('Category deleted successfully.', ['category_id' => $id]);

            return redirect()->route('admin.tour-category.index')->with('success', 'Category deleted successfully.');
        } catch (\Exception $e) {
            // Log error
            Log::error('Error while deleting category.', [
                'category_id' => $id,
                'error' => $e->getMessage(),
            ]);

            return redirect()->route('admin.tour-category.index')->with('error', 'Failed to delete category.');
        }
    }
}
