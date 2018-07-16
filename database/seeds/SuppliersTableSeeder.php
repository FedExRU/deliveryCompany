<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class SuppliersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	$faker = \Faker\Factory::create();

    	for($i = 0; $i <= 20; $i++)
    	{
    		DB::table('suppliers')->insert([
	            'name' => $faker->company,
	            'phone' =>  $faker->e164PhoneNumber,
	            'email' => $faker->email,
	            'address' => $faker->address,
	            'description' => $faker->text(100),
	            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
	            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
	        ]);
    	}
    }
}
