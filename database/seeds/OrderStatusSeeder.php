<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class OrderStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker = \Faker\Factory::create();

        DB::table('order_status')->insert([
        	'name' => 'New order',
        	'color' => $faker->hexcolor,
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
	        'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est dolorem vitae rerum nostrum incidunt ea eaque officiis ipsa ab quia debitis nisi aliquam voluptas repudiandae nihil, ducimus velit, possimus impedit!'
        ]);

        DB::table('order_status')->insert([
        	'name' => 'Order accepted for processing',
        	'color' => $faker->hexcolor,
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
	        'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est dolorem vitae rerum nostrum incidunt ea eaque officiis ipsa ab quia debitis nisi aliquam voluptas repudiandae nihil, ducimus velit, possimus impedit!'
        ]);

        DB::table('order_status')->insert([
        	'name' => 'The order has been sent',
        	'color' => $faker->hexcolor,
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
	        'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est dolorem vitae rerum nostrum incidunt ea eaque officiis ipsa ab quia debitis nisi aliquam voluptas repudiandae nihil, ducimus velit, possimus impedit!'
        ]);

        DB::table('order_status')->insert([
        	'name' => 'The order was delivered to the destination',
        	'color' => $faker->hexcolor,
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
	        'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est dolorem vitae rerum nostrum incidunt ea eaque officiis ipsa ab quia debitis nisi aliquam voluptas repudiandae nihil, ducimus velit, possimus impedit!'
        ]);

        DB::table('order_status')->insert([
        	'name' => 'Order was received',
        	'color' => $faker->hexcolor,
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
	        'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est dolorem vitae rerum nostrum incidunt ea eaque officiis ipsa ab quia debitis nisi aliquam voluptas repudiandae nihil, ducimus velit, possimus impedit!'
        ]);

        DB::table('order_status')->insert([
        	'name' => 'Order has been paid',
        	'color' => $faker->hexcolor,
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
	        'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est dolorem vitae rerum nostrum incidunt ea eaque officiis ipsa ab quia debitis nisi aliquam voluptas repudiandae nihil, ducimus velit, possimus impedit!'
        ]);

        DB::table('order_status')->insert([
        	'name' => 'Order rejected',
        	'color' => $faker->hexcolor,
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
	        'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est dolorem vitae rerum nostrum incidunt ea eaque officiis ipsa ab quia debitis nisi aliquam voluptas repudiandae nihil, ducimus velit, possimus impedit!'
        ]);

        DB::table('order_status')->insert([
        	'name' => 'Order cancelled',
        	'color' => $faker->hexcolor,
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
	        'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est dolorem vitae rerum nostrum incidunt ea eaque officiis ipsa ab quia debitis nisi aliquam voluptas repudiandae nihil, ducimus velit, possimus impedit!'
        ]);

    }
}


