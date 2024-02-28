<?php

namespace App\Http\Controllers;
use App\Services\UserService;
use App\Http\Requests\UserRequest;
use App\Helpers\ResponseMessages;


class UserController extends Controller
{
    protected UserService $userService;
    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }
    public function createUser(UserRequest $request)
    {
        $user = $this->userService->saveUser($request);
        return $this->successHttpMessage(
            'data',
            $user,
            ResponseMessages::getSuccessMessage('User', 'created'),
            201
        );
    }
}
