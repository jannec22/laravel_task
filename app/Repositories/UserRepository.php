<?php

namespace App\Repositories;
use App\Interfaces\UserRepositoryInterface;
use App\Models\User;

class UserRepository implements UserRepositoryInterface
{
    public function getAll()
    {
        return User::all();
    }
    
    public function getById($id)
    {
        return User::find($id);
    }
    
    public function create(array $data)
    {
        return User::create($data);
    }
    
    public function update(array $data, $id)
    {
        $user = User::find($id);
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->password = $data['password'];
        $user->save();
        return $user;
    }
    
    public function delete($id)
    {
        $user = User::find($id);
        $user->delete();
        return $user;
    }
}
