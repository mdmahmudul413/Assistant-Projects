<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
    public function definition()
    {
        $product_name = $this->faker->unique()->words($nb = 4, $asText = true);
        return [
            'category_id'       => $this->faker->numberBetween(1, 10),
            'sub_category_id'   => $this->faker->numberBetween(1, 10),
            'brand_id'          => $this->faker->numberBetween(1, 6),
            'unit_id'           => $this->faker->numberBetween(1, 4),
            'name'              => $product_name,
            'code'              => $this->faker->text(8),
            'stock_amount'      => $this->faker->numberBetween(900, 1000),
            'regular_price'     => $this->faker->numberBetween(1200, 1500),
            'selling_price'     => $this->faker->numberBetween(1000, 1200),
            'short_description' => $this->faker->text(100),
            'long_description'  => $this->faker->text(300),
            'image'             => 'product-images/1677563904.jpg',
        ];
    }
}
