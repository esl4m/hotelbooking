<?php

use Illuminate\Database\Seeder;
use App\Booking;
use App\Customer;
use App\Hotel;
use App\Room;

class BookingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Truncate existing records to start from scratch.
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Booking::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $faker = \Faker\Factory::create();

        // Create Rooms in our database:
        for ($i = 1; $i < 11; $i++) {
            Booking::create([
                'hotel_id' => Hotel::all()->random()->id,
                'room_id' => Room::all()->random()->id,
                'start_date' => $faker->DateTime,
                'end_date' => $faker->DateTime,
                'days' => rand(1,100),
                'customer_id' => Customer::all()->random()->id,
            ]);
        }
    }
}
