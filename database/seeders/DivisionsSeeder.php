<?php

namespace Database\Seeders;
use Illuminate\Support\Str;
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
        $division -> Nombre = "Division de Informatica";
        $division -> Alias = "info";
        $slug = Str::slug("Division de Informatica");
        $division -> slug = $slug;
        $division -> save();

        $division1 = new Division();
        $division1 -> Nombre = "Division de Mecatronica";
        $division1 -> Alias = "mec";
        $slug = Str::slug("Division de Mecatronica");
        $division1 -> slug = $slug;
        $division1 -> save();

        $division2 = new Division();
        $division2 -> Nombre = "Division de Electronica";
        $division2 -> Alias = "elec";
        $slug = Str::slug("Division de Electronica");
        $division2 -> slug = $slug;
        $division2 -> save();

        $division3 = new Division();
        $division3 -> Nombre = "Division de Sistemas";
        $division3 -> Alias = "sis";
        $slug = Str::slug("Division de Sistemas");
        $division3 -> slug = $slug;
        $division3 -> save();
    }
}
