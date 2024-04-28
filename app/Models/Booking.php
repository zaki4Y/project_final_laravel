<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'workspace_id',
        'booking_type',
        'start_time',
        'end_time',
        'status ',
    ];

    public function user()
    {
        // Define the many-to-one relationship with the Users model
        return $this->belongsTo(User::class);
    }

    // Define the many-to-one relationship with the Workspaces model
    public function workspace()
    {
        return $this->belongsTo(Workspace::class);
    }
}
