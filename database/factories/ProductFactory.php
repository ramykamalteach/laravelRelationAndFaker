<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Company;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $this->faker = \Faker\Factory::create('ar_SA');
        return [
            //
            'company_id' => Company::factory(),
            'productName' => $this->faker->words(2, true),
            'serialNumber' => $this->faker->unique()->numerify('#######'),
            'price' => $this->faker->randomFloat(2, 10, 1000),
        ];
    }
}
