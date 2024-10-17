<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Official;

class Degree extends Model
{
    use HasFactory;

    protected $table = "degrees";

    public function officials()
    {
        return $this->hasMany(Official::class, 'degree_id','id');
    }

}
