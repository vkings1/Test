<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Garage extends Model
{
    protected $guarded = [];
    use HasFactory;

    public function GaragePhoto()
    {
        return $this->belongsTo(GaragePhoto::class);
    }
    public function GarageRate()
    {
        return $this->belongsTo(GarageRate::class);
    }
    public function Transaction()
    {
        return $this->belongsTo(Transactions::class);
    }
    public function User()
    {
        return $this->belongsTo(User::class);
    }
}
