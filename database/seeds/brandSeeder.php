<?php

use Illuminate\Database\Seeder;

class brandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('brands')->insert(
        [
          'name'=> 'Adidas',
        ]
      );
      DB::table('brands')->insert(
        [
          'name'=> 'Nike',
        ]
      );
      DB::table('brands')->insert(
        [
          'name'=> 'Puma',
        ]
      );
      DB::table('brands')->insert(
        [
          'name'=> 'Reebok',
        ]
      );
      DB::table('brands')->insert(
        [
          'name'=> 'Topper',
        ]
      );
      DB::table('brands')->insert(
        [
          'name'=> 'New Balance',
        ]
      );
      DB::table('brands')->insert(
        [
          'name'=> 'Joma',
        ]
      );
      DB::table('brands')->insert(
        [
          'name'=> 'Under Armour',
        ]
      );
    }
}
