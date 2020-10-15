<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $data= [
        	'name' =>'hoang',
        	'password' => bcrypt('hoang'),
        	'Email' => 'hoang@gmail.com',
        	'level' => 1
        ];
        DB::table('user')->insert($data);
    }
}
