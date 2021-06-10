<?php

use Illuminate\Database\Seeder;
use App\Holiday;

class HolidayTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 20; $i++) {
            // Creazione istanza
            $newHoliday = new Holiday;

            // Aggiunta record
            $newHoliday->address = 'This is address' . rand(10, 100);
            $newHoliday->city = 'This is city' . rand(10, 100);
            $newHoliday->state = 'This is state' . rand(10, 100);
            $newHoliday->duration = rand(3, 15);
            $newHoliday->price = rand(100, 1500);
            $newHoliday->available_seats = rand(1, 10);
            $newHoliday->travel_arrangements = 'Ship';

            // Salvataggio
            $newHoliday->save();
        }
    }
}
