<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name' => 'IBM', 'email' => 'admin@ibm.com', 'password' => bcrypt('admin@ibm.com'), 'user_type' => 1, 'phone' => '01749240901'],
            
            // ['name' => 'Rajin', 'email' => 'rajin@gmail.com', 'password' => bcrypt('rajin@gmail.com'), 'user_type' => 3, 'phone' => '01749240901'],
            // ['name' => 'jakaria', 'email' => 'zakaria@gmail.com', 'password' => bcrypt('zakaria@gmail.com'), 'user_type' => 3, 'phone' => '01749240901'],
        ];

        User::insert($data);
    }
}
