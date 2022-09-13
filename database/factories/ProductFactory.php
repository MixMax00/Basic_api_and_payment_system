<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;
use App\Models\User;
use App\Models\Category;
use App\Models\Unit;
use App\Models\Color;
use App\Models\Size;
use App\Models\Brand;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{


    protected $model = Product::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        $userId = User::pluck('id')->toArray();
        $brandId = Brand::pluck('id')->toArray();
        $categoryId = Category::pluck('id')->toArray();
        $unitId = Unit::pluck('id')->toArray();
        $colorId = Color::pluck('id')->toArray();
        $sizeId = Size::pluck('id')->toArray();

        return [
            "user_id"          => $userId[array_rand($userId)],
            "product_title"    => $this->faker->sentence(5),
            "brand_id"         => $brandId[array_rand($brandId)],
            "category_id"      => $categoryId[array_rand($categoryId)],
            "size"             => $sizeId[array_rand($sizeId)],
            "color"            => $colorId[array_rand($colorId)],
            "unit"             => $unitId[array_rand($unitId)],
            "qunatity"         => $this->faker->randomDigit(),
            "price"            => $this->faker->randomDigit(),
            "sell_price"       => $this->faker->randomFloat(2, 0, 10000),
            "short_description"=> $this->faker->text(50),
            "long_description" => $this->faker->text(500),
            "image"            => $this->faker->image('public/uploads',400,300, null, false)
        ];
    }
}
