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

        $newImageName = time()."_" . $data['first_name'] . "_" . $data["image_path"]->extension();
        $image= $data["image_path"]->move(public_path('images'), $newImageName);

        $data["image_path"] = $image;
        $this->user->create($data);

        auth()->login($this->user->where('email', $data['email'])->first());

        return[
            "status" => self::TRUE,
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
