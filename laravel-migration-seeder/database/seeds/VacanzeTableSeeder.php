<?php

use Illuminate\Database\Seeder;
use App\Models\Vacanza;

class VacanzeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $vacanze = [
            [
                "title" => "Vacanze sulla neve",
                "location" => "Cortina",
                "persone" => 2,
                "date" => "23/12/2021",
            ],
            [
                "title" => "Vacanze sulla spiaggia",
                "location" => "Cuba",
                "persone" => 2,
                "date" => "19/12/2021",
            ],
            [
                "title" => "Vacanze degustative",
                "location" => "Trentino Alto Adige",
                "persone" => 4,
                "date" => "22/12/2021",
            ],
        ];

        foreach ($vacanze as $vacanza){

            $newVacanza = new Vacanza();

            $newVacanza->fill($vacanza);

            $newVacanza->save();  
        }
    }
}
