<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $fillable = [
        "user_id", "title", "description", "name", "date", "latitude", "longitude"
    ];

    public function media(){
        return $this->hasMany(LocationMedia::class);
    }
}
