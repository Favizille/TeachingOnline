<?php
namespace App\Repositories\Eloquent;

use App\Models\User;

class AuthRepository
{
    protected const FALSE = false;
    protected const TRUE = true;
    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function register($data){
        $data["password"] = bcrypt($data['password']);

        $this->user->create($data);

        auth()->login($this->user->where('email', $data['email'])->first());

        return[
            "status" => self::FALSE,
            "data" => $data,
        ];
    }

    public function login($data){
        if(!auth()->attempt($data)){
            return self::FALSE;
        }

        auth()->login($this->user->where('email', $data['email'])->first());

        return [
            "status" => self::TRUE,
            "data" => $data
        ];
    }
}
