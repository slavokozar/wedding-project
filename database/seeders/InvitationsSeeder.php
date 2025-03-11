<?php

namespace Database\Seeders;

use App\Models\Guest;
use App\Models\Invitation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class InvitationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $mainGuests = Guest::whereNull('parent_id')->get();

        $firstName = null;


        foreach ($mainGuests as $mainGuest) {
            var_dump($mainGuest->toJson());
            $label = $mainGuest->name;

            if ($mainGuest->children->count() >= 1) {
//                var_dump($mainGuest->toJson());

                $lastNames = collect($mainGuest->lastName)->concat($mainGuest->children->pluck('lastName'));
                $firstNames = collect($mainGuest->nick !== null ? $mainGuest->nick : $mainGuest->firstName)->concat($mainGuest->children->map(
                    function($guest) { return $guest->nick !== null ? $guest->nick : $guest->firstName; }
                ));

                print_r($firstNames);
                print_r($lastNames);


                $shortestLastName = $lastNames->reduce(function (?string $carry, string $item) {
                    return $carry == null ? $item : (strlen($item) < strlen($carry) ? $item : $carry);
                }, null);

//                echo $shortestLastName;
//                echo PHP_EOL;

                $allLastNamesStartsSame = $lastNames->reduce(function (?bool $carry, string $item) use ($shortestLastName) {
                    return $carry && strpos($item, $shortestLastName) === 0;
                }, true);


                if ($firstNames->count() > 2) {
                    $label = $shortestLastName;
                }
                if ($allLastNamesStartsSame) {
//                    if($firstNames->count() > 2){
                    $popFirstName = $firstNames->pop();
                    $label = $firstNames->join(", ") . " a " . $popFirstName;
//                    }else{
//                        $label = $firstNames->join(" a ") . " " . $shortestLastName;
//                    }
                } else {
//                    $names = collect($mainGuest->name)->concat($mainGuest->children->pluck('name'));

                    $popName = $firstNames->pop();

                    $label = $firstNames->join(", ") . " a " . $popName;
                }





            }



            echo $label;
            echo PHP_EOL;

            echo PHP_EOL;

            do{
                $code = Str::lower(Str::random(6));
            }while(Invitation::whereCode($code)->count() > 0);

            Invitation::create([
                'guest_id' => $mainGuest->id,
                'code' => $code,
                'label' => $label
            ]);
        }


    }
}
