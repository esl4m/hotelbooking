<?php

use Illuminate\Database\Seeder;
use App\Hotel;

class HotelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Truncate existing records to start from scratch.
        Hotel::truncate();

        $faker = \Faker\Factory::create();

        // Create Hotels in our database:
        for ($i = 0; $i < 3; $i++) {
            Hotel::create([
                'name' => $faker->name,
                'address' => $faker->text,
                'city' => $faker->city,
                'state' => $faker->state,
                'country' => $faker->country,
                'zipcode' => $faker->text,
                'phonenumber' => $faker->PhoneNumber,
                'email' => $faker->email,
                'image' => $faker->Image,
            ]);
        }
    }
}
