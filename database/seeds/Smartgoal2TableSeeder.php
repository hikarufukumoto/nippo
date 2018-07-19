<?php

use Illuminate\Database\Seeder;

class Smartgoal2TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('smartgoal2')->insert([
        [
          'sentence' => "Watch 3 Ted Talks by tomorrow’s 9am.",
        ],
        [
          'sentence' => "Watch one video of TED while commuting and speak up the all script by the end of the day.",
        ],
        [
          'sentence' => "Memorize 10 new English words which I couldn’t understand in the lectures by the end of this month.",
        ],
        [
          'sentence' => "Study English very hard to improve my English.",
        ],
        [
          'sentence' => "Watch one short movie in English while lunch break.",
        ],
        [
          'sentence' => "Read the English book about world news for 25 minutes.",
        ],
        [
          'sentence' => "I remember 10 English words before going to bed every night.",
        ],
        [
          'sentence' => "Memorize 200 new English words which I can’t understand in the lectures by the end of this month.",
        ],
        [
          'sentence' => "Practice to read and listen to learn business English using RNN.",
        ],
        [
          'sentence' => "Watch BBC news on TV.",
        ],
        [
          'sentence' => "Memorize 20 vocabularies of the text book for TOEIC test.",
        ],
        [
          'sentence' => "Read three NHK world news before I come here.",
        ],
        [
          'sentence' => "Listen English carefully in BBC and repeat it in my heart.",
        ],
        [
          'sentence' => "Reading 1 other daily reports by native speakers and get 10 new phrases.",
        ],
        [
          'sentence' => "Read one article about business (IT, Rakuten or whatever), and make a 30-60 seconds presentation in English to my team member before the morning assembly.",
        ],
        [
          'sentence' => "Speak at least twice during lecture questions.",
        ],
        [
          'sentence' => "Watch the TED I choose during commuting.",
        ],
        [
          'sentence' => "I will find and read 2 articles about Technology on RAP by 5 pm.",
        ],
        [
          'sentence' => "Study business English for hours when I have free time.",
        ],
        [
          'sentence' => "Keep communicating in English in my group.",
        ],
        [
          'sentence' => "Try to communicate in English.",
        ],
        [
          'sentence' => "To listen a NPR (アメリカの非営利公共放送局) more than 30 minutes.",
        ],
        
 ]);
        
    }
}