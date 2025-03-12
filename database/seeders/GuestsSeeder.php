<?php

namespace Database\Seeders;

use App\Models\Guest;
use App\Models\Invitation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

use File;

class GuestsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get("guests.json");
        $guests = json_decode($json);

        $parentGuest = null;

        foreach ($guests as $guestData) {
            $guestCreateData = (array) $guestData;
            unset($guestCreateData['main']);

            print_r($guestCreateData);

//            $guest = Guest::create();
//            if (intval($guestData->main) > 0) {
//                $parentGuest = $guest;
//            } else {
//                $guest->parent_id = $parentGuest->id;
//                $guest->save();
//            }
        }
    }
}
