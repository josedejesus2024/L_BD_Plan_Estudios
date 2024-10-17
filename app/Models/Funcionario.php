<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Grado;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Pestudio;


class Funcionario extends Model
{
    use HasFactory;

    protected $table = "aafuncionarios";



    public function grados()
    {
        return $this->belongsTo(Grado::class,'id_g','id'); 
    }

    public function pestudiosf()
    {
        return $this->hasMany(Pestudio::class, 'id_f','id');
    }


}
