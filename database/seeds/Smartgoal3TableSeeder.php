<?php

use Illuminate\Database\Seeder;

class Smartgoal3TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('smartgoal3')->insert([
        
        [
          'sentence' => "Read two articles about Tech in the morning.",
        ],
        
]);
        
    }
}

