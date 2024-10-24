<?php

namespace Database\Seeders;

use App\Models\Degree;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DegreesSeeder extends Seeder
{
    public function run(): void
    {
        $degree = new Degree();
        $degree -> grado='uno';
        $degree -> save();

        $degree1 = new Degree();
        $degree1 -> grado='dos';
        $degree1 -> save();

        $degree2 = new Degree();
        $degree2 -> grado='tres';
        $degree2 -> save();

        $degree3 = new Degree();
        $degree3 -> grado='cuatro';
        $degree3 -> save();
    }
}
