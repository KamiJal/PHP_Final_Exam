<?php

namespace Task_12;


class User
{
    public $id;
    public $ipAddress;
    public $secureHash;

    public function __construct($ipAddress, $secureHash = null)
    {
        $this->ipAddress = $ipAddress;
        $this->secureHash = $secureHash ?? password_hash($ipAddress, PASSWORD_BCRYPT);
    }

    public static function CreateFromDbFetch(array $data)
    {
        $user = new User($data["ip_address"]);
        $user->secureHash = $data["secure_hash"];
        $user->id = $data["id"];
        return $user;
    }

}