<?php

use Illuminate\Database\Seeder;

class NervousTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('nervous')->insert([
        [
          'sentence' => "I was very nervous because we could not reach the goal which we set yesterday.",
        ],
        [
          'sentence' => "I got so nervous and couldn’t say and express 100% what I wanted. I need to consider how I output what I input. I am going to read some books recommended to study it.",
        ],
        [
          'sentence' => "I am a little bit nervous but I want to work hard and challenge everything.",
        ],
        [
          'sentence' => "When I have a presentation, I felt nervous but I will practice again and again to overcome. ",
        ],
        [
          'sentence' => "I was nervous but now I feel it was very valuable experience. I would like to absorb many knowledge and skill as a business person to encourage my doukis during this training.",
        ],
        [
          'sentence' => "I was nervous before starting this training, but I would like to overcome it by cooperating with my doukis.",
        ],
        [
          'sentence' => "I was nervous today because I faced some difficulties, but I appreciated my doukis for giving me good advice. ",
        ],
        [
          'sentence' => "I got so nervous about the training, but it is a good opportunity for me to become better business person.",
        ],
        [
          'sentence' => "Retrieving data. Wait a few seconds and try to cut or copy again.",
        ],
        [
          'sentence' => "I was very nervous before expressing my opinion, but I thought that my idea could promote active discussion in my team.",
        ],
        [
          'sentence' => "I was a little bit nervous about today's training, but I understood what I should do. I am going to try to improve my skill since today.",
        ],
        [
          'sentence' => "I'm nervous about my understanding towards this training. I would like to review it by myself after I got home.",
        ],
        [
          'sentence' => "All of my teammates were so nervous about coding training. I thought we need to have more time to improve this situation. I am going to try to remove their stress by discussing about this topic deeply.",
        ],
        [
          'sentence' => "My team mates looked so nervous today in the morning, but I felt better when I saw he smiled at the end of the day.",
        ],
        [
          'sentence' => "I was so nervous if I could contribute to our team members. I thought I need to study coding by myself. ",
        ],
        [
          'sentence' => "One of my teammate was so nervous today, but I didn't know the reason. I will try to make time to talk to him and empower him.",
        ],
        [
          'sentence' => "Today, I was nervous about our future training. I thought it was very important to make time for me to realize what I am really worried about. I would like to clarify my worries and do something to solve it.",
        ],
        [
          'sentence' => "Today, one of my teammates were so nervous, but I could not understand why he was. So, I tried to listen carefully to him. Now I think he is getting better. I thought that it was very important to have an open mind for other people for making good relationship.",
        ],
        [
          'sentence' => "I'm nervous, because I can not tell if I will good relationship with my teammates. I think is important to make a chance to know each other for building a comfortable team. I would like to make an effort to promote an active discussion in my team.",
        ],

 ]);
        
    }
}