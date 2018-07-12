<?php

use Illuminate\Database\Seeder;

class ConfusedTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('confused')->insert([
        [
          'sentence' => 'I was confused since I tried to understand every single things.',
        ],
         [
          'sentence' => "I’ve learned a lot of skills, so I am completely confused.",
        ],

         [
          'sentence' => "I was able to communicate with my members about what I couldn't understand and they helped me very much.",
        ],
         [
          'sentence' => 'The more I think about many things, the more I get confused and can’t decide what I really want to do.',
        ],
         [
          'sentence' => 'I was surprised and confused about what I have learned new today.',
        ],
         [
          'sentence' => 'I was confused about what should I do first.',
        ],
         [
          'sentence' => 'I had a lot of issues to discuss and I’m a little bit confused. I tried not to stop thinking and trying to improve.',
        ],
         [
          'sentence' => 'I am very confused because I had to avsorb huge amount of information.',
        ],
         [
          'sentence' => 'I tried to understand the contents by myself but I just ended up being confused.',
        ],
         [
          'sentence' => 'It’s important to make sure we are on the same level and try to understand how our team mates are looking at things.',
        ],


 ]);
        
    }
}