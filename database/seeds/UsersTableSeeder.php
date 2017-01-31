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
		$users = [
			[
				'name' => 'Karol',
				'email' => 'test@test.test',
				'password' => bcrypt('test'),
			],
		];

		DB::table('users')->insert($users);
    }
}
