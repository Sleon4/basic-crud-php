<?php

namespace Database\Class\BasicCrud;

class Users implements \JsonSerializable {

	private ?int $idusers = null;
	private ?string $users_name = null;

	public function __construct() {

	}

	public function jsonSerialize(): mixed {
		return get_object_vars($this);
	}

	public static function capsule(): Users {
		$users = new Users();

		$users->setIdusers(
			isset(request->idusers) ? request->idusers : null
		);

		$users->setUsersName(
			isset(request->users_name) ? request->users_name : null
		);

		return $users;
	}

	public function getIdusers(): ?int {
		return $this->idusers;
	}

	public function setIdusers(?int $idusers): Users {
		$this->idusers = $idusers;
		return $this;
	}

	public function getUsersName(): ?string {
		return $this->users_name;
	}

	public function setUsersName(?string $users_name): Users {
		$this->users_name = $users_name;
		return $this;
	}

}