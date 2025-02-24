<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Contact;
use Faker\Factory as Faker;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 35; $i++) {
            Contact::create([
                'phone_number' => '+1 (651) 510-4611',
                'phone_prefix' => $faker->phoneNumber,
                'category_id' => rand(1, 5),
                'address' => $faker->address,
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'name' => $faker->name,
                'gender' => rand(0, 1), // 0 または 1 をランダムに生成
                'email' => $faker->unique()->safeEmail,
                'building' => $faker->secondaryAddress,
                'message' => $faker->text,
                'content' => $faker->paragraph,
                'detail' => $faker->text,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }    
    }
}
