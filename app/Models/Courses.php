<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Courses extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'image_path',
        'slots',
        'start_date',
        'end_date',
        'batch',
        'status'
    ];

    // If you need to define the reverse relationship
    public function teachers(): HasMany
    {
        return $this->hasMany(Teacher::class, 'subject'); // Adjust 'course_id' to your actual foreign key
    }

}
