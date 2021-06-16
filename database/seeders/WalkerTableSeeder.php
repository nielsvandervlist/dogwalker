<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Str;


class WalkerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('walker')->insert([
            'name' => Str::random(10),
            'tel' => rand(0, 10)
        ]);
    }
}
