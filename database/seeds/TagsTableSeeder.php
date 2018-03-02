<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([
            [
                'name' => 'Design',
                'slug' => 'design',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Bilder',
                'slug' => 'images',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Cache',
                'slug' => 'cache',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Administrasjon',
                'slug' => 'administration',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        ]);
    }
}
