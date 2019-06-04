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
        // $this->call(SeederDePrueba::class);


        // DB::table('products')->insert(
        //   [
        //     'name'=> 'Lanus',
        //     'price'=> 1000,
        //     'description'=> 'camiseta de Lanus',
        //   ]
        // );

        factory(App\Product::class, 10)->create();
    }
}
