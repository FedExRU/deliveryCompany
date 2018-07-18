<?php

use Illuminate\Database\Seeder;
use App\Models\Suppliers;

class SuppliersWebsiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $suppliers = Suppliers::all();
        $faker = \Faker\Factory::create();

        foreach($suppliers as $supplier)
        {
        	do
        	{
        		$website = 'www.'.$faker->domainName;
        	}
        	while(!empty(Suppliers::where('website', $website)->first()));

        	$supplier->website = $website;
        	$supplier->save();

        }
    }
}
