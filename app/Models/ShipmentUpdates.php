<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShipmentUpdates extends Model
{
    use HasFactory;
    protected $fillable = ['tracking_number', 'status', 'description', 'location'];
}
