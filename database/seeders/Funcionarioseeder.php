<?php

namespace Database\Seeders;

use App\Models\Funcionario;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Funcionarioseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $funcionario = new Funcionario();
        $funcionario -> Nombres = "Jose de Jesus";
        $funcionario -> APaterno = "Muñoz";
        $funcionario -> AMaterno = "Islas";
        $funcionario -> email = "dfghjk@gmail.com";
        $funcionario -> id_g = 1;
        $funcionario -> save();

        $funcionario1 = new Funcionario();
        $funcionario1 -> Nombres = "juan manuela";
        $funcionario1 -> APaterno = "perez";
        $funcionario1 -> AMaterno = "leon";
        $funcionario1 -> email = "cvbnm@gmail.com";
        $funcionario1 -> id_g = 2;
        $funcionario1 -> save();

        $funcionario2 = new Funcionario();
        $funcionario2 -> Nombres = "carlos";
        $funcionario2 -> APaterno = "mancera";
        $funcionario2 -> AMaterno = "mendez";
        $funcionario2 -> email = "rtyui@gmail.com";
        $funcionario2 -> id_g = 3;
        $funcionario2 -> save();

        $funcionario3 = new Funcionario();
        $funcionario3 -> Nombres = "Ricardo";
        $funcionario3 -> APaterno = "ramirez";
        $funcionario3 -> AMaterno = "medina";
        $funcionario3 -> email = "lkjhg@gmail.com";
        $funcionario3 -> id_g = 1;
        $funcionario3 -> save();
    }
}
