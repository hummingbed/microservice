<?php

namespace App\Services;

use App\Repositories\UserRepository;

class UserService extends BaseService
{
    public function __construct(UserRepository $repository)
    {
        $this->repo = $repository;
    }

    public function saveUser($request)
    {
        return $this->repo->insert([
            "first_name"=> $request->first_name,
            "last_name"=> $request->last_name,
            "email"=> $request->email,
        ]);
    }
}
