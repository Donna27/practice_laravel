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
            'name' => 'Donna',
            'email' => 'test@gmail.com',
            'password' => bcrypt('password'),
            'pid'   => '7463856743986',
            'gender'    => '1',
            // $options['key'] = 'value',
            'address'   => json_encode(['address_desc','Bangkok','address_desc','Yala']),
            'national'  => 1
        ]);
        DB::table('users')->insert([
            'name' => 'Test',
            'email' => 'test22@gmail.com',
            'password' => bcrypt('password'),
            'pid'   => '7463856743934',
            'gender'    => '2',
            // $options['key'] = 'value',
            'address'   => json_encode(['address_desc','Phatalung','address_desc','Pattani']),
            'national'  => 3
        ]);
    }
}
