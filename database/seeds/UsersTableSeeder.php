<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'Zamzam Saputra',
                'email' => 'zamzam@gmail.com',
                'address' => 'Jln. Melati',
                'password' => bcrypt('zamzam123'),
                'api_token' => Str::random(60),
            ],
            [
                'name' => 'Hilda Amalia',
                'email' => 'hilda@gmail.com',
                'address' => 'Jln. Melati',
                'password' => bcrypt('hilda123'),
                'api_token' => Str::random(60),
            ],
            [
                'name' => 'Dania Taqia',
                'email' => 'dania@gmail.com',
                'address' => 'Jln. Melati',
                'password' => bcrypt('dania123'),
                'api_token' => Str::random(60),
            ],
        ];

        User::insert($data);
    }
}
