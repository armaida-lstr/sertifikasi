<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
          //
          $userData = [
            [
                'name' => 'Shena',
                'email' => 'Shena@gmail.com',
                'Password' => bcrypt('123456')
            ],
            [
                'name' => 'Irish',
                'email' => 'Irish@gmail.com',
                'Password' => bcrypt('085085')
            ],
            [
                'name' => 'Andra',
                'email' => 'Andra@gmail.com',
                'Password' => bcrypt('081081')
            ],
        ];

        foreach($userData as $key => $val){
           User::create($val);
        }
    }

}
