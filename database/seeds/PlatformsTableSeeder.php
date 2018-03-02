<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PlatformsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('platforms')->insert([
            [
                'name' => 'WordPress',
                'slug' => 'wordpress',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'EzPublish',
                'slug' => 'ez_publish',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Drupal 7',
                'slug' => 'drupal_seven',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Drupal 8',
                'slug' => 'drupal_eight',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        ]);
    }
}
