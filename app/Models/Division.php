<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PlanStudy;

class Division extends Model
{
    use HasFactory;
    protected $table = "divisions";

    public function planStudies()
    {
        return $this->hasMany(PlanStudy::class, 'division_id','id');
    }
    
}
