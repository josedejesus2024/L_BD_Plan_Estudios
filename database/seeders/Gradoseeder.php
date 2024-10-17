<?php

namespace Database\Seeders;

use App\Models\Grado;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Gradoseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $grado = new Grado();
        $grado -> grado='uno';
        $grado -> save();

        $grado1 = new Grado();
        $grado1 -> grado='dos';
        $grado1 -> save();

        $grado2 = new Grado();
        $grado2 -> grado='tres';
        $grado2 -> save();

        $grado3 = new Grado();
        $grado3 -> grado='cuatro';
        $grado3 -> save();
    }
}
