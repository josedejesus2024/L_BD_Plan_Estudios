<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Degree;
//use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\PlanStudy;


class Official extends Model
{
    use HasFactory;

    protected $table = "officials";



    public function degree()
    {
        return $this->belongsTo(Degree::class,'degree_id','id'); 
    }

    public function planStudies()
    {
        return $this->hasMany(PlanStudy::class, 'official_id','id');
    }


}
