<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Repositories\Eloquent\AuthRepository;

class AuthController extends Controller
{
    protected const FALSE = false;
    protected const TRUE = true;
    protected $user;
    protected $authRepository;

    public function __construct(AuthRepository $authRepository)
    {
        $this->authRepository = $authRepository;
    }

    public function registerPage(){
        return view("master");
    }

    public function register(RegisterRequest $request)
    {
        $registeredUser = $this->authRepository->register($request->validated());

        if(!$registeredUser){
            return self::FALSE;
        }

        return self::TRUE;
    }

    public function login(LoginRequest $request)
    {
        $loggedinUser = $this->authRepository->login($request->validated());

        if(!$loggedinUser){
            return self::FALSE;
        }

        return self::TRUE;
    }
}
