<?php

namespace App\Http\Controllers\Basic_crud;

use App\Models\Basic_crud\UsersModel; 
use Database\Class\BasicCrud\Users;

class UsersController {

	private UsersModel $usersModel;

	public function __construct() {
		$this->usersModel = new UsersModel();
	}

	public function createUsers() {
		$res_create = $this->usersModel->createUsersDB(
			Users::capsule()
		);

		return isError($res_create)
			? error()
			: success();
	}

	public function readUsers() {
		return $this->usersModel->readUsersDB();
	}

	public function updateUsers(string $idusers) {
		$res_update = $this->usersModel->updateUsersDB(
			Users::capsule()->setIdusers((int) $idusers)
		);

		return isError($res_update)
			? error()
			: success();
	}

	public function deleteUsers(string $idusers) {
		$res_delete = $this->usersModel->deleteUsersDB(
			Users::capsule()->setIdusers((int) $idusers)
		);

		return isError($res_delete)
			? error()
			: success();
	}

}
