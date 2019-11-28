<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Victor.G',
                'email' => 'victor@admin.fr',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'Antony.C',
                'email' => 'antony@admin.fr',
                'password' => bcrypt('password'),  
            ]
        ]);
    }
}
