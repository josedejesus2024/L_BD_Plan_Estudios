<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $User = new User();
        $User -> name = "Jose de Jesus";
        $User -> password = "Munoz";
        $User -> email = "email@gmail.com";
        $User -> save();
        $User -> assignRole('Egresado');

        $User1 = new User();
        $User1 -> name = "miguel angel";
        $User1 -> password = "leyva";
        $User1 -> email = "email2@gmail.com";
        $User1 -> save();
        $User1 -> assignRole('Funcionario');

        $User2 = new User();
        $User2 -> name = "vanesaaa";
        $User2 -> password = "hernandez";
        $User2 -> email = "email3@gmail.com";
        $User2 -> save();
        $User2 -> assignRole('Administrador');
    }
}
