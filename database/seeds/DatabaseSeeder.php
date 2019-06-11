<?php

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
        $this->call([brandSeeder::class, leagueSeeder::class, sizeSeeder::class]);


        // DB::table('products')->insert(
        //   [
        //     'name'=> 'Lanus',
        //     'price'=> 1000,
        //     'description'=> 'camiseta de Lanus',
        //     'size'=> 'L',
        //   ]
        // );

        factory(App\Product::class, 15)->create();
    }
}
