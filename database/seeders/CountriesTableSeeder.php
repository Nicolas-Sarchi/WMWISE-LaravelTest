<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $countries = [
            'United States',
            'Canada',
            'United Kingdom',
            'Australia',
            'New Zealand'
        ];

        foreach ($countries as $country) {
            DB::table('countries')->insert([
                'name' => $country,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
