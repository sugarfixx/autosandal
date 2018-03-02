<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class TopicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('topics')->insert([
            [
                'platform_id' => 1,
                'request_type_id' => 1,
                'question' => 'Hvor mange dører går innover?',
                'answer' => 'Alle dører som ikke går utover går innover',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'platform_id' => 1,
                'request_type_id' => 1,
                'question' => 'Hvorfor er presidenten i USA?',
                'answer' => 'Fordi Mexico ikke selv gidder å bygge en grense mur',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'platform_id' => 1,
                'request_type_id' => 1,
                'question' => 'Hvilken farge var det på Napoleons hvite hest?',
                'answer' => 'I flg. det svenske historie lauget var Napoleons hvite hest faktisk hvit',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'platform_id' => 1,
                'request_type_id' => 1,
                'question' => 'Er paven katolikk?',
                'answer' => 'Ja!',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        ]);
    }
}
