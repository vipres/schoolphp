<?php

namespace app\Models;

use app\Core\Model;

class RegisterModel extends Model
{

    public $name = '';
    public $lastname = '';
    public $email = '';
    public $gender = '';
    public $role = '';
    public $password = '';
    public $passwordConfirm = '';


    public function register()
    {
        echo "Creating new User";
    }

    public function rules():array
    {
        return [
            'name' => [self::RULE_REQUIRED],
            'lastname' => [self::RULE_REQUIRED],
            'email' => [self::RULE_REQUIRED, self::RULE_EMAIL],
            'gender' => [self::RULE_REQUIRED],
            'role' => [self::RULE_REQUIRED],
            'password' => [self::RULE_REQUIRED, [self::RULE_MIN, 'min' => 8], [self::RULE_MAX, 'max' => 24]],
            'passwordConfirm' => [self::RULE_REQUIRED, [self::RULE_MATCH, 'match' => 'password']],
        ];
    }


}
