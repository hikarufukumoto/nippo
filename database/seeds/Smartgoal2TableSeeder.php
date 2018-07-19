<?php

use Illuminate\Database\Seeder;

class Smartgoal2TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('smartgoal2')->insert([
        
        [
          'sentence' => "Watch 3 Ted Talks by tomorrow 9am.",
        ],
        
]);
        
    }
}

