<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        date_default_timezone_set('Asia/Yakutsk');
        for($i = 0; $i<2;$i++){
            DB::table('challenges')->insert([
                'name'=>'challenge'.$i,
                'description'=>'description'.$i,
            ]);
            for($j = 0; $j<4;$j++){
                DB::table('tasks')->insert([
                    'challengeId'=>$i+1,
                    'name'=>'task'.$i.$j,
                    'description'=>'description'.$i.$j,
                ]);
            }
        }
    }
}
