<?php

use Illuminate\Database\Seeder;

class CurrencyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('currencies')->insert([
            'iso' => 'EUR',
        ]);
         DB::table('currencies')->insert([
            'iso' => 'GBP',
        ]);
         DB::table('currencies')->insert([
            'iso' => 'USD',
        ]);
         DB::table('currencies')->insert([
            'iso' => 'TRY',
        ]);
    }
}
