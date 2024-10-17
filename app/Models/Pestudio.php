<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Division;
use App\Models\Funcionario;


class Pestudio extends Model
{
    use HasFactory;

    protected $table = "aapestudios";

    public function divisiones()
    {
        return $this->belongsTo(Division::class,'id_d','id'); 
    }

    public function funcionarios()
    {
        return $this->belongsTo(Funcionario::class,'id_f','id'); 
    }

}
