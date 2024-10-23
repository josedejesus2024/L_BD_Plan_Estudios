<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use App\Models\PlanStudy;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;



class PlanStudiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $planStudy = new PlanStudy();
        $planStudy -> Nombre = "plan a";
        $slug = Str::slug("plan a");
        $planStudy -> slug = $slug;
        $planStudy -> division_id = 1;
        $planStudy -> official_id = 1;
        $planStudy -> save();

        $planStudy1 = new PlanStudy();
        $planStudy1 -> Nombre = "plan b";
        $slug = Str::slug("plan b");
        $planStudy1 -> slug = $slug;
        $planStudy1 -> division_id = 2;
        $planStudy1 -> official_id = 2;
        $planStudy1 -> save();

        $planStudy2 = new PlanStudy();
        $planStudy2 -> Nombre = "plan c";
        $slug = Str::slug("plan c");
        $planStudy2 -> slug = $slug;
        $planStudy2 -> division_id = 3;
        $planStudy2 -> official_id = 3;
        $planStudy2 -> save();

        $planStudy3 = new PlanStudy();
        $planStudy3 -> Nombre = "plan d";
        $slug = Str::slug("plan d");
        $planStudy3 -> slug = $slug;
        $planStudy3 -> division_id = 4;
        $planStudy3 -> official_id = 4;
        $planStudy3 -> save();
    }
}
