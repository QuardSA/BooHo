<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;


class UserSeed extends Seeder
{

    public function run(): void
    {
        $date = Carbon::now();
        DB::table('users')->insert([
            ['name'=>'Алексей','surname'=>'Смирнов','patronymic'=>'Смирнов','email'=>'example@mail.ru','password'=>'example','role'=>'1','created_at'=>$date,'updated_at'=>$date],
        ]);
    }
}
