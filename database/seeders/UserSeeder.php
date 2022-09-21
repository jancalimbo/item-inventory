<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'lname' => 'Astacaan',
                'fname' => 'Ace',
                'username' => 'acejelo',
                'password' => bcrypt('thisisapassword'),
                'email' => 'acejeloastacaan@gmail.com',
                'email_verified_at' => Carbon::now()
            ],
            [
                'lname' => 'Failanga',
                'fname' => 'Carrie',
                'username' => 'carrie',
                'password' => bcrypt('thisisapassword'),
                'email' => 'carriefailanga@yahoo.com',
                'email_verified_at' => Carbon::now()
            ],
            [
                'lname' => 'Rico',
                'fname' => 'Camille',
                'username' => 'camille',
                'password' => bcrypt('thisisapassword'),
                'email' => 'camillerrico@yahoo.com',
                'email_verified_at' => Carbon::now()
            ],

        ];

        foreach($users as $user) {
            User::create($user);
        }
    }
}
