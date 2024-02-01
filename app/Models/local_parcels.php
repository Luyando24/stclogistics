<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class local_parcels extends Model
{
    use HasFactory;
    protected $fillable = ['trackingNumber', 'status', 'status_description', 'status_location'];
}
