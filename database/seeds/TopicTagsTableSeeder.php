<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class TopicTagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('topic_tags')->insert([
            [
                'topic_id' => 1,
                'tag_id' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'topic_id' => 1,
                'tag_id' => 2,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'topic_id' => 2,
                'tag_id' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'topic_id' => 2,
                'tag_id' => 3,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'topic_id' => 3,
                'tag_id' => 4,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'topic_id' => 3,
                'tag_id' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'topic_id' => 4,
                'tag_id' => 4,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        ]);
    }
}
