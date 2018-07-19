<?php

use Illuminate\Database\Seeder;

class Why2TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('why2')->insert([
        
        [
          'sentence' => "To improve my English skill.",
        ],
        
        [
          'sentence' => "To brush up my English skill.",
        ],
        
        [
          'sentence' => "To have a chance to study English.",
        ],
        
]);
        
    }
}

