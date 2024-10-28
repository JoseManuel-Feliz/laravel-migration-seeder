<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        /*  $trains = [
            [
                "azienda" => "Trenitalia",
                "stazione_partenza" => "Roma Termini",
                "stazione_arrivo" => "Milano Centrale",
                "orario_partenza" => "2024-10-25 06:30",
                "orario_arrivo" => "2024-10-25 10:45",
                "codice_treno" => "IC001",
                "numero_carrozze" => 12,
                "in_orario" => true,
                "cancellato" => false
            ],
            [
                "azienda" => "Italo",
                "stazione_partenza" => "Napoli Centrale",
                "stazione_arrivo" => "Venezia Santa Lucia",
                "orario_partenza" => "2024-10-25 07:00",
                "orario_arrivo" => "2024-10-25 12:20",
                "codice_treno" => "ITL123",
                "numero_carrozze" => 10,
                "in_orario" => true,
                "cancellato" => false
            ],
            [
                "azienda" => "Trenord",
                "stazione_partenza" => "Bergamo",
                "stazione_arrivo" => "Milano Porta Garibaldi",
                "orario_partenza" => "2024-10-26 08:15",
                "orario_arrivo" => "2024-10-26 09:00",
                "codice_treno" => "TN045",
                "numero_carrozze" => 8,
                "in_orario" => false,
                "cancellato" => false
            ],
            [
                "azienda" => "Trenitalia",
                "stazione_partenza" => "Firenze Santa Maria Novella",
                "stazione_arrivo" => "Bologna Centrale",
                "orario_partenza" => "2024-10-26 09:30",
                "orario_arrivo" => "2024-10-26 10:15",
                "codice_treno" => "IC102",
                "numero_carrozze" => 9,
                "in_orario" => true,
                "cancellato" => false
            ],
            [
                "azienda" => "Italo",
                "stazione_partenza" => "Torino Porta Nuova",
                "stazione_arrivo" => "Roma Termini",
                "orario_partenza" => "2024-10-25 07:45",
                "orario_arrivo" => "2024-10-25 12:10",
                "codice_treno" => "ITL222",
                "numero_carrozze" => 11,
                "in_orario" => false,
                "cancellato" => true
            ],
            [
                "azienda" => "Trenitalia",
                "stazione_partenza" => "Genova Piazza Principe",
                "stazione_arrivo" => "Pisa Centrale",
                "orario_partenza" => "2024-10-25 08:00",
                "orario_arrivo" => "2024-10-25 10:15",
                "codice_treno" => "IC501",
                "numero_carrozze" => 7,
                "in_orario" => true,
                "cancellato" => false
            ],
            [
                "azienda" => "Trenitalia",
                "stazione_partenza" => "Palermo Centrale",
                "stazione_arrivo" => "Catania Centrale",
                "orario_partenza" => "2024-10-26 09:50",
                "orario_arrivo" => "2024-10-26 12:00",
                "codice_treno" => "REG206",
                "numero_carrozze" => 6,
                "in_orario" => true,
                "cancellato" => false
            ],
            [
                "azienda" => "Italo",
                "stazione_partenza" => "Milano Centrale",
                "stazione_arrivo" => "Napoli Centrale",
                "orario_partenza" => "2024-10-25 08:30",
                "orario_arrivo" => "2024-10-25 12:45",
                "codice_treno" => "ITL400",
                "numero_carrozze" => 12,
                "in_orario" => true,
                "cancellato" => false
            ],
            [
                "azienda" => "Trenord",
                "stazione_partenza" => "Como San Giovanni",
                "stazione_arrivo" => "Milano Centrale",
                "orario_partenza" => "2024-10-26 10:00",
                "orario_arrivo" => "2024-10-26 10:40",
                "codice_treno" => "TN333",
                "numero_carrozze" => 5,
                "in_orario" => true,
                "cancellato" => false
            ],
            [
                "azienda" => "Trenitalia",
                "stazione_partenza" => "Roma Termini",
                "stazione_arrivo" => "Firenze Santa Maria Novella",
                "orario_partenza" => "2024-10-25 07:00",
                "orario_arrivo" => "2024-10-25 08:30",
                "codice_treno" => "IC203",
                "numero_carrozze" => 13,
                "in_orario" => false,
                "cancellato" => false
            ],
            [
                "azienda" => "Italo",
                "stazione_partenza" => "Bologna Centrale",
                "stazione_arrivo" => "Firenze Santa Maria Novella",
                "orario_partenza" => "2024-10-25 10:15",
                "orario_arrivo" => "2024-10-25 11:00",
                "codice_treno" => "ITL532",
                "numero_carrozze" => 9,
                "in_orario" => true,
                "cancellato" => false
            ],
            [
                "azienda" => "Trenitalia",
                "stazione_partenza" => "Venezia Mestre",
                "stazione_arrivo" => "Trieste Centrale",
                "orario_partenza" => "2024-10-25 12:00",
                "orario_arrivo" => "2024-10-25 14:30",
                "codice_treno" => "IC704",
                "numero_carrozze" => 8,
                "in_orario" => true,
                "cancellato" => false
            ],
            [
                "azienda" => "Trenitalia",
                "stazione_partenza" => "Napoli Centrale",
                "stazione_arrivo" => "Reggio Calabria",
                "orario_partenza" => "2024-10-26 13:15",
                "orario_arrivo" => "2024-10-26 18:10",
                "codice_treno" => "IC905",
                "numero_carrozze" => 10,
                "in_orario" => false,
                "cancellato" => false
            ],
            [
                "azienda" => "Italo",
                "stazione_partenza" => "Roma Termini",
                "stazione_arrivo" => "Torino Porta Susa",
                "orario_partenza" => "2024-10-25 09:45",
                "orario_arrivo" => "2024-10-25 14:05",
                "codice_treno" => "ITL320",
                "numero_carrozze" => 11,
                "in_orario" => true,
                "cancellato" => false
            ],
            [
                "azienda" => "Trenitalia",
                "stazione_partenza" => "Padova",
                "stazione_arrivo" => "Venezia Santa Lucia",
                "orario_partenza" => "2024-10-25 07:10",
                "orario_arrivo" => "2024-10-25 07:40",
                "codice_treno" => "REG507",
                "numero_carrozze" => 5,
                "in_orario" => true,
                "cancellato" => false
            ],
            [
                "azienda" => "Trenord",
                "stazione_partenza" => "Milano Centrale",
                "stazione_arrivo" => "Bergamo",
                "orario_partenza" => "2024-10-25 15:00",
                "orario_arrivo" => "2024-10-25 15:50",
                "codice_treno" => "TN440",
                "numero_carrozze" => 7,
                "in_orario" => true,
                "cancellato" => false
            ],
            [
                "azienda" => "Trenitalia",
                "stazione_partenza" => "Salerno",
                "stazione_arrivo" => "Roma Termini",
                "orario_partenza" => "2024-10-26 10:20",
                "orario_arrivo" => "2024-10-26 12:50",
                "codice_treno" => "IC604",
                "numero_carrozze" => 12,
                "in_orario" => false,
                "cancellato" => false
            ],
            [
                "azienda" => "Italo",
                "stazione_partenza" => "Torino Porta Nuova",
                "stazione_arrivo" => "Napoli Centrale",
                "orario_partenza" => "2024-10-25 06:00",
                "orario_arrivo" => "2024-10-25 11:15",
                "codice_treno" => "ITL003",
                "numero_carrozze" => 13,
                "in_orario" => true,
                "cancellato" => false
            ],
            [
                "azienda" => "Trenitalia",
                "stazione_partenza" => "Roma Termini",
                "stazione_arrivo" => "Bari Centrale",
                "orario_partenza" => "2024-10-25 16:30",
                "orario_arrivo" => "2024-10-25 22:00",
                "codice_treno" => "IC402",
                "numero_carrozze" => 8,
                "in_orario" => true,
                "cancellato" => false
            ],
            [
                "azienda" => "Trenord",
                "stazione_partenza" => "Lecco",
                "stazione_arrivo" => "Milano Porta Garibaldi",
                "orario_partenza" => "2024-10-26 07:45",
                "orario_arrivo" => "2024-10-26 08:45",
                "codice_treno" => "TN531",
                "numero_carrozze" => 6,
                "in_orario" => false,
                "cancellato" => false
            ]
        ]; */


        /*  
        $newTrain = new Train();
        $newTrain->azienda = $faker['azienda'];
        $newTrain->stazione_partenza = $faker['stazione_partenza'];
        $newTrain->stazione_arrivo = $faker['stazione_arrivo'];
        $newTrain->orario_partenza = $faker['orario_partenza'];
        $newTrain->orario_arrivo = $faker['orario_arrivo'];
            $newTrain->codice_treno = $faker['codice_treno'];
            $newTrain->numero_carrozze = $faker['numero_carrozze'];
            $newTrain->in_orario = $faker['in_orario'];
            $newTrain->cancellato = $faker['cancellato'];
            $newTrain->save(); 
            
            /*  foreach ($fakers as $faker) {
            $newTrain = Train::create($faker); 
        }
            */
        for ($i = 0; $i < 40; $i++) {

            $newTrain = new Train();
            $newTrain->azienda = $faker->company();
            $newTrain->stazione_partenza = $faker->city();
            $newTrain->stazione_arrivo = $faker->city;
            $newTrain->orario_partenza = $faker->dateTime($max = 'now');
            $newTrain->orario_arrivo = $faker->dateTime($max = 'now');
            $newTrain->codice_treno = $faker->unique()->randomNumber(5, true);
            $newTrain->numero_carrozze = $faker->numberBetween(1, 12);
            $newTrain->in_orario = $faker->boolean();
            $newTrain->cancellato = $faker->boolean();
            $newTrain->save();
        }
    }
}
