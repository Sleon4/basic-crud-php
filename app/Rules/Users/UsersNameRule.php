<?php

namespace App\Rules\Users;

use App\Traits\Framework\ShowErrors;

class UsersNameRule {

    use ShowErrors;

    public static string $field = "users_name";
    public static string $desc = "username";
    public static string $value = "";
    public static bool $disabled = false;

    public static function passes(): void {
        self::validate(function(\Valitron\Validator $validator) {
            $validator
                ->addRule('name', function($field, $value, array $params, array $fields) {
                    return preg_match("/^([a-zA-Z ]+)(\s[a-zA-Z ]+)*$/", $value);
                });

            $validator
                ->rule("required", self::$field)
                ->message("username is required");

            $validator
                ->rule("lengthMin", self::$field, 2)
                ->message("the username must have a minimum of 2 characters");

            $validator
                ->rule("lengthMax", self::$field, 25)
                ->message("the username must have a maximum of 25 characters");

            $validator
                ->rule("name", self::$field)
                ->message("username must only have alphabetic characters");
        });
    }

}
