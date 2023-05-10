<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TourismImage extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function touristattraction()
    {
        return $this->belongsTo(TouristAttraction::class);
    }
}
