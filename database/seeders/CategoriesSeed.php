<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class CategoriesSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $date = Carbon::now();
        DB::table('categories')->insert([
            ['title_categories'=>'Отель','created_at'=>$date,'updated_at'=>$date],
            ['title_categories'=>'Дом','created_at'=>$date,'updated_at'=>$date],
        ]);
    }
}
