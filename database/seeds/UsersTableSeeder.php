<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {

		DB::table('users')->delete();

		User::create(array(
			'email' => 'member@email.com',
			'password' => Hash::make('password'),
			'name' => 'John Doe',
			'admin' => 0,
		));

		User::create(array(
			'email' => 'admin@store.com',
			'password' => Hash::make('adminpass'),
			'name' => 'Admin',
			'admin' => 1,
		));
	}
}
