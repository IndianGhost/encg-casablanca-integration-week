<?php


namespace App\Repositories\Club;


use App\Models\Club;

class ClubRepository implements ClubRepositoryInterface
{
    public $club;

    public function __construct(Club $club)
    {
        $this->club = $club;
    }

    public function getAll()
    {
        return $this->club->getAll();
    }

    public function find($id)
    {
        return $this->club->findClub($id);
    }

    public function update(array $data, $attribute, $attribute_value, $operator = "=")
    {
        return Club::where($attribute, $operator, $attribute_value)->update($data);
    }

    public function delete($id)
    {
        return $this->club->deleteClub($id);
    }
}
