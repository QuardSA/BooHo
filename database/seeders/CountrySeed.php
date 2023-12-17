<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class CountrySeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $date = Carbon::now();
        DB::table('countries')->insert([
            ['title_countries'=>'Россия','photo'=>'Russia.jpg','created_at'=>$date,'updated_at'=>$date],
            ['title_countries'=>'Испания','photo'=>'Spanish.jpg','created_at'=>$date,'updated_at'=>$date],
            ['title_countries'=>'Япония','photo'=>'japan.webp','created_at'=>$date,'updated_at'=>$date],
            ['title_countries'=>'Франция','photo'=>'France.webp','created_at'=>$date,'updated_at'=>$date],
        ]);
    }
}
