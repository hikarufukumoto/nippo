<?php

use Illuminate\Database\Seeder;

class Why1TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('why1')->insert([
        
        [
          'sentence' => "To make more friends.",
        ],
        
]);
        
    }
}

