<?php

namespace App\Models\Basic_crud;

use Database\Class\BasicCrud\Users;
use LionSQL\Drivers\MySQL\MySQL as DB;
use LionSQL\Drivers\MySQL\Schema;

class UsersModel {

	public function __construct() {
		
	}

	public function createUsersDB(Users $users) {
		return DB::call('create_users', [
			$users->getUsersName(),
		])->execute();
	}

	public function readUsersDB() {
		return DB::view('read_users')->select()->getAll();
	}

	public function updateUsersDB(Users $users) {
		return DB::call('update_users', [
			$users->getUsersName(),
			$users->getIdusers(),
		])->execute();
	}

	public function deleteUsersDB(Users $users) {
		return DB::call('delete_users', [
			$users->getIdusers(),
		])->execute();
	}

}