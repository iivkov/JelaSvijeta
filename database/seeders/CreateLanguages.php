<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CreateLanguages extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('languages')->insert(['name' => 'Hrvatski', 'code' => 'hr']);
        \DB::table('languages')->insert(['name' => 'English', 'code' => 'en']);
    }
}
