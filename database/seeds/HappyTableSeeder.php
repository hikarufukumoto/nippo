<?php

use Illuminate\Database\Seeder;

class HappyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('happy')->insert([
        [
          'sentence' => 'Because we were stucked from yesterday, we felt happy when we were able to solve our problems.',
        ],
 ]);
        
    }
}
