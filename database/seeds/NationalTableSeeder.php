<?php

use Illuminate\Database\Seeder;

class NationalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('f_national')->insert([
            'national_name' =>'Thai'
        ]);
         DB::table('f_national')->insert([
            'national_name' =>'USA'
        ]);
         DB::table('f_national')->insert([
            'national_name' =>'France'
        ]);
    }
}
