<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user1 = new User();
        $user1->name ='Abel Estrella';
        $user1->email ='abel.estrella@ittizimin.edu.mx';
        $user1->password =bcrypt('123456789');
        $user1->save();
    }
}
