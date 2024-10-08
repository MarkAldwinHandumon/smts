<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'street',
        'barangay',
        'district',
        'city',
        'province',
        'region',
    ];

    public function addressable()
    {
        return $this->morphTo();
    }
}
