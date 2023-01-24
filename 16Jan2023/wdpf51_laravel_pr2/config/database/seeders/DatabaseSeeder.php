<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use Database\Seeders\ProductSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();
        //Calling Factory

        Product::factory(15)->create();

        //Calling Seeder

           // $this->call([
        //     // ProductSeeder::class,
           
        // ]);
    }
}
