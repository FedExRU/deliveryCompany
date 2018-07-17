<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class GoodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        for($i = 0; $i <= 100; $i++)
        {
        	DB::table('goods')->insert([
        		'name' => $faker->sentence(3, true),
                'brief' => $faker->sentence(8, true),
        		'description' => $faker->text(),
        		'image' => $faker->imageUrl($width = 640, $height = 480),
        		'price' => $faker->numberBetween(50, 1000),
        		'old_price' => ($i % 14 == 0) ? $faker->numberBetween(1000, 1200) : null,
        		'is_new' => $faker->numberBetween(0, 1),
        		'supplier_id' => $faker->numberBetween(22, 42),
        		'rank' => $faker->numberBetween(3, 5),
        		'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        		'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	]);
        }
    }
}
