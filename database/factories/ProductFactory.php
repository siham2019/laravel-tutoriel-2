<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
        
            'title'=>$this->faker->sentence(5),
            'price'=>$this->faker->numberBetween(1000,20000),
            'description'=>$this->faker->sentence(80),
            'stock'=>$this->faker->numberBetween(0,300),
            'image_url'=>'https://in-media.apjonlinecdn.com/catalog/product/cache/b3b166914d87ce343d4dc5ec5117b502/c/0/c06575196.png',
            'created_at'=>now()
        
        ];
    }
}
