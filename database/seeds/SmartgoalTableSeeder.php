<?php

use Illuminate\Database\Seeder;

class SmartgoalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('smartgoal')->insert([
        
        [
          'sentence' => "Talk to 2 new doukis.",
        ],
        
]);
        
    }
}

