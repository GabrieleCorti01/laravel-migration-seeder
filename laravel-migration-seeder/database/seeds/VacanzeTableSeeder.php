<?php

use Illuminate\Database\Seeder;
use App\Models\Vacanza;

use Faker\Generator as Faker;

class VacanzeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
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

        for ($i = 0; $i < 12; $i++){
            $newVacanza = new Vacanza();
            $newVacanza->title = $faker->name();
            $newVacanza->location = $faker->name();
            $newVacanza->persone = $faker->randomNumber(1, 6);
            $newVacanza->date = $faker->dateTime();

            $newVacanza->save();

        }
    }
    
}
