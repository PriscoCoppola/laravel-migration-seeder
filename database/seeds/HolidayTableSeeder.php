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

            // $table->string('address', 100);
            // $table->string('city', 30);
            // $table->string('state', 30);
            // $table->tinyInteger('duration');
            // $table->smallInteger('price');
            // $table->tinyInteger('available_seats');
            // $table->string('travel arrangements', 30);
        }
    }
}
