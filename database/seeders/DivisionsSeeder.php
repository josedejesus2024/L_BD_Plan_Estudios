<?php

namespace Database\Seeders;

use App\Models\Division;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DivisionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $division = new Division();
        $division -> Nombre = "Informatica";
        $division -> Alias = "info";
        $division -> save();

        $division1 = new Division();
        $division1 -> Nombre = "Mecatronica";
        $division1 -> Alias = "mec";
        $division1 -> save();

        $division2 = new Division();
        $division2 -> Nombre = "electronica";
        $division2 -> Alias = "elec";
        $division2 -> save();

        $division3 = new Division();
        $division3 -> Nombre = "sistemas";
        $division3 -> Alias = "sis";
        $division3 -> save();
    }
}
