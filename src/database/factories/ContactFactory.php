<?php

namespace Database\Factories;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    protected $model = Contact::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'gender' => rand(0, 1), // 性別の値を0または1で指定
            'email' => $this->faker->unique()->safeEmail,
            'phone_prefix' => $this->faker->phoneNumber,
            'building' => $this->faker->streetAddress,
            'message' => $this->faker->text,
            'content' => $this->faker->text,
            'category_id' => rand(1, 5), // カテゴリーIDの範囲に応じて変更
            'address' => $this->faker->address,
        ];
    }
}
