<?php

use Illuminate\Database\Seeder;

class leagueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('leagues')->insert(
        [
          'name'=> 'Inglesa',
        ]
      );
      DB::table('leagues')->insert(
        [
          'name'=> 'Española',
        ]
      );
      DB::table('leagues')->insert(
        [
          'name'=> 'Francesa',
        ]
      );
    }
}
