<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'Admin',
                'email'          => 'admin@admin.com',
                'password'       => '$2y$10$csJq5Kx3Etr1qZALxRRA/uqmfqINNd.UEoZPfR0ybaIFu/Z/C25wq',
                'remember_token' => null,
            ],
        ];

        User::insert($users);
    }
}
