<?php namespace App\Repositories;


use App\Models\User;

class UserRepository extends AbstractRepository {

    function __construct(User $user)
    {
        $this->model = $user;
    }

}