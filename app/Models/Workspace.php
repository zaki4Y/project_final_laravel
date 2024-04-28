<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workspace extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'image',
        'ameneties',
        'price'
    ];

    public function booking()
    {
        return $this->hasMany(Booking::class);
    }

    // Define the one-to-many relationship with the WorkspaceAccess model
    public function workacce()
    {
        return $this->hasMany(Workacce::class);
    }
}
