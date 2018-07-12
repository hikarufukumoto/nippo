<?php

use Illuminate\Database\Seeder;

class ExcitedTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('excited')->insert([
        [
          'sentence' => 'I am very excited everyday that I could get along with my doukis.',
        ],
        
        [
          'sentence' => "Our team felt excitement, because today's training was very meaningful for us.",
        ],
        
        [
          'sentence' => 'I’m excited everyday since I can get a lot of input. I am going to have a chance to output consciously.',
        ],
        [
          'sentence' => 'When we had a lunch with doukis from other group, I was so excited to know their background deeply. So I am so curious about doukis and I want to know about doukis more.',
        ],
        [
          'sentence' => 'I was excited when I understood the meaning of this training. Before that, I was not sure the meaning of that. So I will think the posture to this training over again.',
        ],
        [
          'sentence' => 'I was so excited to know about our doukis who had a lot of background.',
        ],
        [
          'sentence' => "I'm excited about next training, because it includes some contents which I learned in my university.",
        ],
        [
          'sentence' => "My teammates was exciting today's training, because some of us were familiar with today's contents.",
        ],
 ]);
        
    }
}