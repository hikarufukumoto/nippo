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
          'sentence' => "Talk to 2 new doukis. ",
        ],
        [
          'sentence' => "Make sure to say Hi to everyone around me.",
        ],
        [
          'sentence' => "Share the thoughts with my doukis. ",
        ],
        [
          'sentence' => "Exchange instagram 3 doukis.",
        ],
        [
          'sentence' => "To eat breakfast with more than 3 doukis. ",
        ],
        [
          'sentence' => "Have a conversation with 4 new doukis from a different team. ",
        ],
        [
          'sentence' => "To talk with more than 3 doukis about Our future career.",
        ],
         [
          'sentence' => "Read 100 Daily Reports from my doukis. ",
        ],
        [
          'sentence' => "Goal:Read 10 Daily Reports from my doukis by tomorrow 17PM.",
        ],
]);
        
    }
}