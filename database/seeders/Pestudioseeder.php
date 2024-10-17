<?php

namespace Database\Seeders;

use App\Models\Pestudio;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Pestudioseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pestudios = new Pestudio();
        $pestudios -> Nombre = "plan a";
        $pestudios -> id_d = 1;
        $pestudios -> id_f = 1;
        $pestudios -> save();

        $pestudios = new Pestudio();
        $pestudios -> Nombre = "plan b";
        $pestudios -> id_d = 2;
        $pestudios -> id_f = 2;
        $pestudios -> save();

        $pestudios = new Pestudio();
        $pestudios -> Nombre = "plan c";
        $pestudios -> id_d = 3;
        $pestudios -> id_f = 3;
        $pestudios -> save();

        $pestudios = new Pestudio();
        $pestudios -> Nombre = "plan d";
        $pestudios -> id_d = 4;
        $pestudios -> id_f = 4;
        $pestudios -> save();
    }
}
