<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pestudio;

class Division extends Model
{
    use HasFactory;
    protected $table = "aadivisiones";

    public function pestudios()
    {
        return $this->hasMany(Pestudio::class, 'id_d','id');
    }
    
}
