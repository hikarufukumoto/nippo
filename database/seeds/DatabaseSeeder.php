<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
          HappyTableSeeder::class,
          InterestingTableSeeder::class,
          ExpectTableSeeder::class,
          ExcitedTableSeeder::class,
          SatisfiedTableSeeder::class,
          TiredTableSeeder::class,
          ConfusedTableSeeder::class,
          WorriedTableSeeder::class,
          HardTableSeeder::class,
          NervousTableSeeder::class,
          ImpressedTableSeeder::class,
          ImportantTableSeeder::class,
          SpecialTableSeeder::class,
        ]);
    }
}


