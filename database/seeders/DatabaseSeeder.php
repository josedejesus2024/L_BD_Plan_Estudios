<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Grado;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //User::factory(10)->create();
        //Grado::factory(3)->create();
       $this->call(Gradoseeder::class);
       $this->call(Funcionarioseeder::class);
       $this->call(Divisioneseeder::class);
       $this->call(Pestudioseeder::class);
       
    }
}
