<?php

use App\Models\Product;
use Illuminate\Database\Seeder;

class productSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //  Product::factory()->count(10)->create();

        Product::create(['name'=>'tomato','code'=>'122']);
        Product::create(['name'=>'cheese','code'=>'1254']);
        Product::create(['name'=>'oil','code'=>'142']);
        Product::create(['name'=>'fish','code'=>'122']);

    }
}
