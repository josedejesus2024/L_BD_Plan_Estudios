<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Funcionario;

class Grado extends Model
{
    use HasFactory;

    protected $table = "aagrados";

    public function funcionarios()
    {
        return $this->hasMany(Funcionario::class, 'id_g','id');
    }

}
