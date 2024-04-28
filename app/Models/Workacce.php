<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workacce extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'workspace_id',
        'access_start_time',
        'access_end_time',
        'password',
    ];

    public function Booking()
    {
        return $this->hasMany(Booking::class);
    }

    public function Workacce()
    {
        return $this->hasMany(Workacce::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    
    }

    public function workspace()
    {
        return $this->belongsTo(Workspace::class);
    }
}
