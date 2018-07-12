<?php

use Illuminate\Database\Seeder;

class ImpressedTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('impressed')->insert([
        [
          'sentence' => "I was so impressed by our team member who worked hard today. ",
        ],
         [
          'sentence' => "I was so impressed that IT actually has a potential to change the world. ",
        ],
         [
          'sentence' => "I was so impressed by our team member who tried to understand every contents he learned today.",
        ],
         [
          'sentence' => "I was so impressed by our team member who enhanced other group member to commit their work.",
        ],
         [
          'sentence' => "I was so impressed by our team member who studied several hours last night on his own.",
        ],
         [
          'sentence' => "I was so impressed by our team member who worked hard today. ",
        ],
         [
          'sentence' => "I was so impressed by our team member who was able to bring up several problems among our team and tried to solve it.",
        ],
         [
          'sentence' => "I was impressed by today's session. I am going to review it for deeper understanding.",
        ],
         [
          'sentence' => "I thought that  it was very important to give a good impression to doukis. I would like to use positive words.",
        ],
         [
          'sentence' => "I was so impressed by my team member who had a lunch with sempai and he learned loads of things. So I will change my mind and try to have a chance to talk with sempai from tomorrow.",
        ],
         [
          'sentence' => "Today I saw the video related to Rakuten and I was impressed with the history of this company. I want to learn about this company and so I will try to ask sempai to have a lunch tomorrow.",
        ],
         [
          'sentence' => "I was impressed by today's discussion we had.  I am impressed with the idea of team members because they have a clear vision about that and they know what they should acquire. ",
        ],
         [
          'sentence' => "Today, we had a discussion about career.  And I am impressed with the idea of team members because they have a clear vision about that and they know what they should acquire. So I think I have to change my mind and try to be like them.",
        ],
         [
          'sentence' => "Today, we could know that making mistakes is not bad things. The idea impressed me so much and I will be not afraid of making mistakes.",
        ],
         [
          'sentence' => "I was impressed by today's training, but I couldn't understand it at all. So I have to review it when I go home.",
        ],

 ]);
        
    }
}