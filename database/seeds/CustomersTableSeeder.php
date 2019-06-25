<?php

use Illuminate\Database\Seeder;
use App\Customer;

class CustomersTableSeeder extends Seeder
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
        Customer::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $faker = \Faker\Factory::create();

        // Create Customers in our database:
        for ($i = 0; $i < 10; $i++) {
            Customer::create([
                'fullname' => $faker->name,
                'address' => $faker->text,
                'city' => $faker->city,
                'country' => $faker->country,
                'phone' => $faker->PhoneNumber,
                'fax' => $faker->PhoneNumber,
                'email' => $faker->email,
            ]);
        }
    }
}
