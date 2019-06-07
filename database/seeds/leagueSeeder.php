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
          'name'=> 'Liga Inglesa',
        ]
      );
      DB::table('leagues')->insert(
        [
          'name'=> 'Liga Española',
        ]
      );
      DB::table('leagues')->insert(
        [
          'name'=> 'Liga Francesa',
        ]
      );
    }
}
