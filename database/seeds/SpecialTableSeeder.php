<?php

use Illuminate\Database\Seeder;

class SpecialTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('special')->insert([
        [
          'sentence' => " I realized that it’s important to keep looking at further point, not just what is in front of you.",
        ],
        [
          'sentence' => " I realized that Rakuten has generated so many unique services and I am so proud of myself being a member of this company",
        ],
        [
          'sentence' => "I realized that I need to find and improve my weak point during this training period.",
        ],
        [
          'sentence' => "I realized that we should put together our own strong point when we work as a team.",
        ],
        [
          'sentence' => "I realized how important it is to accomplish our work as a one team.",
        ],
        [
          'sentence' => "I realized that we need more output not just only input in order to develop our selves.",
        ],
        [
          'sentence' => "I realized that I did not fully understand what I have learned so far in this training session.",
        ],
        [
          'sentence' => "I realized how important it is to act before thinking too much.",
        ],
        [
          'sentence' => " I realized that I have to take feedback from other group members about how they think about me.",
        ],
        [
          'sentence' => "I realized how important to make time to review what we have learned so far during the training period.",
        ],
        [
          'sentence' => "I realized again how happy I am to have such wonderful members.",
        ],
        [
          'sentence' => "I realized that we need more output not just only input in order to develop our selves.",
        ],
        [
          'sentence' => "I found that there were so many contents that I already forgot, so I realized that I need to review coding every day so as not to forget what I did today.",
        ],
        [
          'sentence' => "I realized talking about our career together with my members is so amazing .",
        ],
        [
          'sentence' => "I realized that it is very hard to notice problems of each people in daily life.",
        ],

 ]);
        
    }
}