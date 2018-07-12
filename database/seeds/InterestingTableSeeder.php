<?php

use Illuminate\Database\Seeder;

class InterestingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('interesting')->insert([
        [
          'sentence' => "I found out that other teams are bringing up many interesting ideas that we couldn't think of.",
        ],
         [
          'sentence' => "This company is really attractive and I’m interested in working at various positions. I will keep on thinking about my career.",
        ],
         [
          'sentence' => "Today's group work was very interesting and meaningful for us. We will continue working as one team.",
        ],
         [
          'sentence' => "We were able to share several interesting topics to discuss in our group. I will try to bring more topics to enhance discussion.",
        ],
         [
          'sentence' => "I think working as a team is very interesting. We can come up with many ideas from different points of view.",
        ],
         [
          'sentence' => "I am very interested in how I can work at the department. I must keep on studying about this company more.",
        ],
         [
          'sentence' => "I heard some interesting thoughts about career from my friend. I will keep on studying about my career too.",
        ],
         [
          'sentence' => "I was able to share some interesting contents about career to my doukis. I will try to enhance my doukis to think about their careers too.",
        ],
         [
          'sentence' => "I found out that every doukis have many interesting ways of thinking.  I will try to talk to many doukis to earn several points of view.",
        ],
         [
          'sentence' => "The book I read about team work was so interesting and I will try to use this knowledge in our group.",
        ],
         [
          'sentence' => "The book I read about career was so interesting and I will use this knowledge to help my group members who are worried of their career.",
        ],
         [
          'sentence' => "As my doukis said, book are interesting because they will give us various points of view. I will continue to make time for reading books.",
        ],
         [
          'sentence' => "I really enjoy talking with my doukis. It is so interesting for me that I have a chance to understand how people think differently.",
        ],
         [
          'sentence' => "Through today's  training, my interest towards Rakuten became larger and larger. I will continue preparing for the department assignment.",
        ],
         [
          'sentence' => "I'm interested in club activity which sempai told us. I will be good chance for me to join these clubs and make connections with other senpais.",
        ],
         [
          'sentence' => "I noticed that many doukis have a great interest in department assignment, so I want to talk to them and exchange our opinions.",
        ],
         [
          'sentence' => "I noticed that creating new systems are very interesting. I want to study more about shikumika done in this company.",
        ],
         [
          'sentence' => "I want to know and share dokui's interests and get along well with them. It will be important for us to create good relationship.",
        ],
         [
          'sentence' => "I'm interested in improving my English skill, so I must study more and more. I need to increase the time to study.",
        ],
         [
          'sentence' => "Recently, I'm interested in many doukis, because every doukis have a overwhelming identities that I haven't seen before. I want to increase the opportunity to talk with my doukis to know them more.",
        ],
         [
          'sentence' => "It is hard but also interesting to think about our future career.",
        ],
        
 ]);
        
    }
}