<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Str;

class DogTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dog')->insert([
            'name' => Str::random(10),
            'owner' => Str::random(10),
            'tel' => rand(0, 10)
        ]);
    }
}
