<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use Faker\Factory as Faker;
class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for($i=0; $i < 20; $i++){
            Product::create([
                'product_id' => $i+1,
                'name' => $faker->sentence(2, true),
                'description' => $faker->sentence(3, true),
                'price' => $faker->numberBetween(100, 1000)
                
            ]);
        }
    }
}
