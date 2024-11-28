<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ManageHome extends Model
{

    use HasFactory;
    protected $table = 'manage_homes';

    // Fillable fields for mass assignment
    protected $fillable = [
        'title',
        'video',
        'status',
    ];
}
