<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TourDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'tour_category_id',
        'name',
        'banner_images',
        'location',
        'duration',
        'description',
        'includes',
        'excludes',
        'tour_plans',
        'price',
        'intake',
        'status',
        'created_by',
    ];

    protected $casts = [
        'banner_images' => 'array', // Automatically cast JSON to array
        'includes' => 'array',
        'excludes' => 'array',
        'tour_plans' => 'array',
    ];

    // Relationships
    public function category()
    {
        return $this->belongsTo(TourCategory::class, 'tour_category_id');
    }

    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}
