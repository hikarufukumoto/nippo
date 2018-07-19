<?php

use Illuminate\Database\Seeder;

class Why3TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('why3')->insert([
        
        [
          'sentence' => "To get the newest knowledge.",
        ],
        
]);
        
    }
}

