<?php

use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //Product::create(['name' => UserType::KEEPER]);

         $this->call(productSeeder::class);
    }
}
