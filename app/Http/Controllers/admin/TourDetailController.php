<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\TourCategory;
use App\Models\TourDetail;
use Illuminate\Http\Request;

class TourDetailController extends Controller
{
    public function index()
    {
        $tours  = TourDetail::with('category', 'user')->get();
        $tourcategory = TourCategory::all() ;
        return view('website.admin.tour_detail.index', compact('tours' ,'tourcategory'));
    }

    // Store function
    public function store(Request $request)
    {
        // Placeholder for store logic
    }

    // Edit function
    public function edit($id)
    {
        // Placeholder for edit logic
    }

    // Update function
    public function update(Request $request, $id)
    {
        // Placeholder for update logic
    }

    // Destroy function
    public function destroy($id)
    {
        // Placeholder for delete logic
    }

}
