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
          'sentence' => "Learn Logical Thinking.",
        ],
         [
          'sentence' => "Learning logical thinking.",
        ],
        [
          'sentence' => "Think logically, Talk logically.",
        ],
        [
          'sentence' => "Practice business manner by myself.",
        ],
        [
          'sentence' => "Read some books about mind-set or skill-set within this week.",
        ],
        [
          'sentence' => "Practice how to exchange my business card with two members of doukis by the end of tomorrow.",
        ],
        [
          'sentence' => "I will buy a business book that I think I need.",
        ],
        [
          'sentence' => "Practice business manner by myself.",
        ],
        [
          'sentence' => "I read Nikkei 3 topics and summary this topics until I arrive office.",
        ],
        [
          'sentence' => "Read 5 pages Nikkei about economy in the morning.",
        ],
        [
          'sentence' => "Pick up a news related to IT and share it with my group.",
        ],
        [
          'sentence' => "Research some IT articles with twitter.",
        ],
        [
          'sentence' => "Read 3article of Newspicks per day.",
        ],
        [
          'sentence' => "Remember the Windows shortcut key.",
        ],
        [
          'sentence' => "Practice blind touch by 5pm.",
        ],
        [
          'sentence' => "Remember 1 new shortcut key every day.",
        ],
        [
          'sentence' => "Practice blind touch typing skills 1 hour today.",
        ],
        [
          'sentence' => "Learn 7 short cut keys of Excel before I go to bed tonight.",
        ],
        [
          'sentence' => "Watch Excel VLOOKUP tutorial for twice until the end of the day.",
        ],
        [
          'sentence' => "Practice blind touch and aim for the 100 wpm before and of this month.",
        ],
        [
          'sentence' => "Finish 7 typing lessons in typing club by next business day.",
        ],
        [
          'sentence' => "Learn 3 new short-cut keys everyday.",
        ],
        [
          'sentence' => "Improve my blind touch score until the end of this month.",
        ],
        [
          'sentence' => "Read 1 chapter of PHP book before tomorrow morning (before start working).",
        ],
        

        
 ]);
        
    }
}