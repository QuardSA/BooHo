<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class ServicesSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $date = Carbon::now();
        DB::table('services')->insert([
            ['title_service'=>'Ресепшн 24 часа','created_at'=>$date,'updated_at'=>$date],
            ['title_service'=>'Парковка на территории','created_at'=>$date,'updated_at'=>$date],
            ['title_service'=>'Бизнес центр','created_at'=>$date,'updated_at'=>$date],
            ['title_service'=>'Охрана 24 часа','created_at'=>$date,'updated_at'=>$date],
        ]);
    }
}
