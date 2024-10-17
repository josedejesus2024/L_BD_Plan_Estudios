<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Division;
use App\Models\Official;


class PlanStudy extends Model
{
    use HasFactory;

    protected $table = "planstudies";

    public function division()
    {
        return $this->belongsTo(Division::class,'division_id','id'); 
    }

    public function official()
    {
        return $this->belongsTo(Official::class,'official_id','id'); 
    }

}
