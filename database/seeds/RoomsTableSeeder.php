<?php

use Illuminate\Database\Seeder;
use App\Room;

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
        Room::truncate();

        $faker = \Faker\Factory::create();

        // Create Rooms in our database:
        for ($i = 0; $i < 11; $i++) {
            Room::create([
                'hotel_id' => function() {
                    return factory(App\Hotel::class)->get()->id;
                },
                'room_name' => $faker->text,
                'room_types_id' => function() {
                    return factory(App\RoomType::class)->get()->id;
                },
                'image' => $faker->Image,
            ]);
        }
    }
}
