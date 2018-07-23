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
          'sentence' => "I realized that it’s important to keep looking at further point, not just what is in front of you.",
        ],
        [
         'sentence' => "I realized that Rakuten has generated so many unique services and I am so proud of being a member of this company.",
        ],
        [
          'sentence' => "I realized that I need to find and improve my weak point during this training period to be able to do my best for work.",
        ],
        [
          'sentence' => "I realized that we should corporate with each other to do our best performance as a one team.",
        ],
        [
          'sentence' => "I realized how important to accomplish our work as a one team though today’s conversation with doukis.",
        ],
        [
          'sentence' => "I realized that we need more outputs not just only inputs in order to develop ourselves. And, I want to become able to use what I learned in my daily work.",
        ],
        [
          'sentence' => "I realized that I did not fully understand what I have learned so far in this training session. So, I think I need to review that right after going home.",
        ],
        [
          'sentence' => "I realized how important to act before thinking too much. I have a creed which is ‘Regret after doing, not before doing something.’",
        ],
        [
          'sentence' => "I realized that I need to be given some feedbacks by other groups. I think I can not see me from perspective ways and so, I can be the man who can see things from perspective ways.",
        ],
        [
          'sentence' => "I realized how important to make time to review what we have learned so far during the training period because I forgot a lot of what I have learned so far.",
        ],
        [
          'sentence' => "I realized again how happy I am to have such wonderful members in this team. So, I will connect other team to my team in order to make a good relationship with doukis.",
        ],
        [
          'sentence' => "I found that there were so many contents that I already forgot, so I realized that I need to review what I have learned so far not to forget about that.",
        ],
        [
          'sentence' => "I could spend  productive time with my teammate. we talked about our career,and it was so good to share our feelings. Through talking with my teammate, I think I will broaden my horizons.",
        ],
        [
          'sentence' => "I realized that it is very hard to notice problems of each people in daily life. So, I need to pay attention to them to cheer my team up.",
        ],

]);
        
    }
}
