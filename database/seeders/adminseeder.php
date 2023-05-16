<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
class adminseeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data= [
            'name' => 'admin',
            'email' => 'dorld.org@gmail.com',
            'password' => bcrypt('azharisdorld'),

        ];
        User::insert($data);
    }
}
