<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dieren extends Model
{
    protected $table = "dieren";

    public $timestamps = false;

    public function alledieren(){
        return $this->hasMany("\App\Models\Huisdieren", "kind", "kind");
    }
}
