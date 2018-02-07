<?php
use App\Model\Workshop;

use Illuminate\Database\Seeder;

class WorkshopTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Workshop::create(["name"=>"Oficina de dança", "minister"=>"Edilson Novak", "vacancies"=>60]);
        Workshop::create(["name"=>"Oficina gastronomica", "minister"=>"Josete Holocheski", "vacancies"=>60]);
        Workshop::create(["name"=>"Oficina de canto", "minister"=>"Irmã Celina Sloboda", "vacancies"=>40]);
    }
}
