<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class RequestTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('request_types')->insert([
            [
                'name' => 'Generell',
                'slug' => 'general',
                'description' => 'Generelle spørrsmål.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Faktura',
                'slug' => 'invoice',
                'description' => 'Spørsmål om faktura eller annet vedrørende kundefohold.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Teknisk hjelp',
                'slug' => 'tech_support',
                'description' => 'Tekniske spørrsmål om funksjonalitet el.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Utvikling',
                'slug' => 'develop',
                'description' => 'Spørrsmål og forespørrsler om ønsket funksjonalitet som ikke er i dagens løsning.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        ]);
    }
}
