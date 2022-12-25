<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class Postseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'title'=>'test title',
            'body'=>'test_________body',
            'category_id'=>'1',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            
            ]);
    }
}
