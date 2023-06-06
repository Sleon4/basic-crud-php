<?php

namespace App\Rules\Users;

use App\Traits\Framework\ShowErrors;

class IdusersRule {

    use ShowErrors;

    public static string $field = "idusers";
    public static string $desc = "user id";
    public static string $value = "1";
    public static bool $disabled = false;

    public static function passes(): void {
        self::validate(function(\Valitron\Validator $validator) {
            $validator
                ->rule("required", self::$field)
                ->message("the user is required");

            $validator
                ->rule("integer", self::$field)
                ->message("the user is invalid");

            $validator
                ->rule("min", self::$field, 1)
                ->message("the user is invalid");
        });
    }

}
