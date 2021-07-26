<?php


namespace App\Repositories\User;


use App\Models\User;

class UserRepository implements UserRepositoryInterface
{
    public $user;

    function __construct(User $user)
    {
        $this->user = $user;
    }

    public function getAll()
    {
        return $this->user->getAll();
    }

    public function find($id)
    {
        return $this->user->findUser($id);
    }

    public function update(array $data, $attribute, $attribute_value, $operator = "=")
    {
        return User::where($attribute, $operator, $attribute_value)->update($data);
    }

    public function delete($id)
    {
        return $this->user->deleteUser($id);
    }
}
