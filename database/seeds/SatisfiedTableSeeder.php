<?php

use Illuminate\Database\Seeder;

class SatisfiedTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('satisfied')->insert([
        [
          'sentence' => 'Because we were stucked from yesterday, we felt happy when we were able to solve our problems.',
        ],
        [
          'sentence' => 'I was really satisfied  with our lectures today.',
        ],
        [
          'sentence' => ' I am satisfied because our team had a good discussion today.',
        ],
        [
          'sentence' => 'I am satisfied because I had a lunch with sempai and could ask what I concerned about.',
        ],
        [
          'sentence' => "My teammates were satisfied by today's training. We will continue working hard from tomorrow as well.",
        ],
        [
          'sentence' => "I was so happy that I was able to propose an idea which satisfied my team member's demand.",
        ],
        [
          'sentence' => 'I will try to satisfy our team by proposing new ideas towards them.',
        ],
        [
          'sentence' => 'I will do my best to satisfy other group members during this training.',
        ],
        [
          'sentence' => 'I tried to satisfy my team member by doing all that I have been ordered to do.',
        ],
        [
          'sentence' => 'Coding all day is one of my greatest satisfactions. I will keep on working had during this training.',
        ],
        [
          'sentence' => 'I am satisfied to the fact that Rakuten is a perfect company. I am proud of myself.',
        ],
        [
          'sentence' => " wanted to satisfy my team member's curiosity by talking interesting stories to them.",
        ],
        [
          'sentence' => 'Today I had healthy lunch which satisfied me a lot. Thanks to our company, I am motivated a lot.',
        ],
        [
          'sentence' => 'My teammates were satisfied by our outcome that was achieved by our hard work.',
        ],
        [
          'sentence' => 'We were satisfied since we were ableto prompt our discussion.',
        ],
        [
          'sentence' => "I was not fully satisfied by our discussion today since we couldn't care much about MECE. ",
        ],
        [
          'sentence' => "I'm satisfied by my outcome today. I will keep on doing good work for tomorrow too.",
        ],
        [
          'sentence' => 'I am satisfied to my progress today. I will keep on working hard.',
        ],
        

 ]);
        
    }
}