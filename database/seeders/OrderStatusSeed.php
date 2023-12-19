<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class OrderStatusSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $date = Carbon::now();
        DB::table('status')->insert([
            ['title_status'=>'Новые','created_at'=>$date,'updated_at'=>$date],
            ['title_status'=>'Принятые','created_at'=>$date,'updated_at'=>$date],
            ['title_status'=>'Отклонённые','created_at'=>$date,'updated_at'=>$date],
        ]);
    }
}
