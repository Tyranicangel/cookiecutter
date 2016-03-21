<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Role;
use App\User;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		$this->call('RoleTableSeeder');
		$this->call('UserTableSeeder');
	}

}

class RoleTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();
		Role::create(['role'=>'Admin','link'=>'admin.main']);
	}

}

class UserTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();
		User::create(['username'=>'admin','name'=>'Admin','email'=>'admin@admin.com','address'=>'Admin','phoneno'=>'admin','designation'=>'Admin','password'=>'8e224b65d380e94ab3f59cbef89e74e372857d4b40e38475d0e05c4c73c3ee02','role'=>1,'created_by'=>0]);
	}

}
