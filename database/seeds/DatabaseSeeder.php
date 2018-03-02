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
        // $this->call(UsersTableSeeder::class);
        $this->call(PlatformsTableSeeder::class);
        $this->call(RequestTypeTableSeeder::class);
        $this->call(TagsTableSeeder::class);
        $this->call(TopicsTableSeeder::class);
        $this->call(TopicTagsTableSeeder::class);
    }
}
