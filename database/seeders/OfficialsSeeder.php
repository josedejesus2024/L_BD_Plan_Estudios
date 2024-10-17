<?php

namespace Database\Seeders;

use App\Models\Official;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OfficialsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $official = new Official();
        $official -> Nombres = "Jose de Jesus";
        $official -> APaterno = "Muñoz";
        $official -> AMaterno = "Islas";
        $official -> email = "dfghjk@gmail.com";
        $official -> degree_id = 1;
        $official -> save();

        $official1 = new Official();
        $official1 -> Nombres = "juan manuela";
        $official1 -> APaterno = "perez";
        $official1 -> AMaterno = "leon";
        $official1 -> email = "cvbnm@gmail.com";
        $official1 -> degree_id = 2;
        $official1 -> save();

        $official2 = new Official();
        $official2 -> Nombres = "carlos";
        $official2 -> APaterno = "mancera";
        $official2 -> AMaterno = "mendez";
        $official2 -> email = "rtyui@gmail.com";
        $official2 -> degree_id = 3;
        $official2 -> save();

        $official3 = new Official();
        $official3 -> Nombres = "Ricardo";
        $official3 -> APaterno = "ramirez";
        $official3 -> AMaterno = "medina";
        $official3 -> email = "lkjhg@gmail.com";
        $official3 -> degree_id = 1;
        $official3 -> save();
    }
}
