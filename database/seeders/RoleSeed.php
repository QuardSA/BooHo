<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class RoleSeed extends Seeder
{
    public function run(): void
    {
        $date = Carbon::now();
        DB::table('roles')->insert([
            ['title_role'=>'Администратор','created_at'=>$date,'updated_at'=>$date],
            ['title_role'=>'Модератор','created_at'=>$date,'updated_at'=>$date],
            ['title_role'=>'Пользователь','created_at'=>$date,'updated_at'=>$date],
        ]);
    }
}
