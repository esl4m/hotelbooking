<?php

use Illuminate\Database\Seeder;
use App\RoomType;

class RoomTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Truncate existing records to start from scratch
        RoomType::truncate();

        // Create Room Types
        RoomType::create([
            'type_name' => 'Deluxe',
        ]);

        RoomType::create([
            'type_name' => 'Standard',
        ]);
    }
}
