<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class TypePlacementSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $date = Carbon::now();
        DB::table('type_placements')->insert([
            ['title_placement'=>'OB','created_at'=>$date,'updated_at'=>$date],
            ['title_placement'=>'BB','created_at'=>$date,'updated_at'=>$date],
            ['title_placement'=>'HB','created_at'=>$date,'updated_at'=>$date],
            ['title_placement'=>'AI','created_at'=>$date,'updated_at'=>$date],
        ]);
    }
}
