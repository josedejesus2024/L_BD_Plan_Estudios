<?php

namespace Database\Seeders;

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
        $planStudy -> division_id = 1;
        $planStudy -> official_id = 1;
        $planStudy -> save();

        $planStudy1 = new PlanStudy();
        $planStudy1 -> Nombre = "plan b";
        $planStudy1 -> division_id = 2;
        $planStudy1 -> official_id = 2;
        $planStudy1 -> save();

        $planStudy2 = new PlanStudy();
        $planStudy2 -> Nombre = "plan c";
        $planStudy2 -> division_id = 3;
        $planStudy2 -> official_id = 3;
        $planStudy2 -> save();

        $planStudy3 = new PlanStudy();
        $planStudy3 -> Nombre = "plan d";
        $planStudy3 -> division_id = 4;
        $planStudy3 -> official_id = 4;
        $planStudy3 -> save();
    }
}
