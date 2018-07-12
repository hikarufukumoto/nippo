<?php

use Illuminate\Database\Seeder;

class WorriedTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('worried')->insert([
        
        [
          'sentence' => "I’m afraid that I would drag my team down.  I will keep making an effort and develop day by day to avoid this situation.",
        ],
        [
          'sentence' => "I am afraid of next training, because I am not sure I can understand contents which I have learned. So I will keep doing my best.",
        ],
        [
          'sentence' => "My team members helped me so much, so I was afraid of disturbing their progresses. I will study hard not to drag my team down.",
        ],
        [
          'sentence' => "I am worried that I drag my team down or not. So I will ask my team that we have same understandings or not and then I will try to share our knowledge about this training.",
        ],
        [
          'sentence' => "I am always worried about working as a team. Although it is not easy to accomplish tasks as a team, we have to find the way to do it efficiently.",
        ],
        [
          'sentence' => "All of my team mates were worried about their career. So we will make a time for discussing about it tomorrow.",
        ],
        [
          'sentence' => "I’m still worrying about my department assignment, but I will try to think it positively. ",
        ],
        [
          'sentence' => " I cannot help worrying about my first department assignment. I will continue making time and talk to senpais.",
        ],
        [
          'sentence' => "If we are afraid of making mistakes or how other people would think of your opinion too much, we would never reach the great output.",
        ],
        [
          'sentence' => " I was afraid of making errors because I couldn’t fully understand all at once. But I have to change my mind to try to understand what is the true problem of errors.",
        ],
        [
          'sentence' => "I'm worried about my future career. So I will ask my team about their own career and think about it seriously.",
        ],
        [
          'sentence' => "I was  afraid of making mistakes. But I learned making mistakes is not bad things and we can learn from mistakes. So I want to change  my mind from tomorrow.",
        ],

 ]);
        
    }
}