<?php

use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = \Faker\Factory::create();

        for($i=0; $i<=5; $i++):
            DB::table('news')
                ->insert([
                    'title' => $faker->sentence,
                    'body' => $faker->paragraph,
                    'image' => '',
                    'created_at' => $faker->dateTimeBetween($startDate = '-5 years', $endDate = 'now'),
                ]);
        endfor;
    }
}
