<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Train extends Model
{
    use HasFactory;

    protected $fillable = [
        'company',
        'departure_station',
        'arrival_station',
        'departure_time',
        'arrival_time',
        'train_code',
        'number_of_cars',
        'is_on_time',
        'is_cancelled'
    ];

    protected $dates = [
        'departure_time',
        'arrival_time',
        'created_at',
        'updated_at'
    ];

    public function scopeDepartureToday($query)
    {
        $today = Carbon::now()->startOfDay();
        return $query->where('departure_time', '>=', $today);
    }
}

