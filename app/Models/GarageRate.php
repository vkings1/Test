<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GarageRate extends Model
{
    protected $guarded = [];
    use HasFactory;

    public function Garage()
    {
        return $this->hasMany(Garage::class);
    }
}
