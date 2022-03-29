<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Huisdieren extends Model
{
    protected $table = "huisdieren";
    public $timestamps = false;

    public function kindModel(){
        return $this->belongsTo("\App\Models\Dieren", "kind", "kind");
    }
}
