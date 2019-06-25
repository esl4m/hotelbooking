<?php

use Illuminate\Database\Seeder;
use App\Hotel;
use App\Room;
use App\RoomType;

class RoomsTableSeeder extends Seeder
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
        Room::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $faker = \Faker\Factory::create();

        // Create Rooms in our database:
        for ($i = 0; $i < 11; $i++) {
            Room::create([
                'hotel_id' => Hotel::all()->random()->id,
                'room_name' => $faker->text,
                'room_type' => RoomType::all()->random()->id,
                'image' => $faker->Image,
            ]);
        }
    }
}
