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
          'sentence' => "To have a deeper relationship with doukis.",
        ],
        
        [
          'sentence' => "To Interact with other doukis.",
        ],
        
        [
          'sentence' => "To know about doukis deeply.",
        ],
        
]);
        
    }
}

