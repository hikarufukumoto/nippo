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
          'sentence' => "Talk to 2 new doukis.",
        ],
        [
          'sentence' => "Make sure to say Hi to everyone around me.",
        ],
        [
          'sentence' => "Share the thoughts with my doukis.",
        ],
        [
          'sentence' => "Follow instagram accounts of 3 doukis.",
        ],
        [
          'sentence' => "Eat breakfast with more than 3 doukis.",
        ],
        [
          'sentence' => "Have a conversation with 4 new doukis from a different team.",
        ],
        [
          'sentence' => "Talk with more than 3 doukis about our future career.",
        ],
         [
          'sentence' => "Read 15 Daily Reports from my doukis.",
        ],
        [
          'sentence' => "Read 10 Daily Reports from my doukis by tomorrow 5 PM.",
        ],
]);
        
    }
}