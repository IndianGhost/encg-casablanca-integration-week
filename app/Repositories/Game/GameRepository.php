<?php


namespace App\Repositories\Game;

use App\Models\Game;

class GameRepository implements GameRepositoryInterface
{
    public $game;

    public function __construct(Game $game)
    {
        $this->game = $game;
    }

    public function getAll()
    {
        return $this->game->getAll();
    }

    public function find($id)
    {
        return $this->game->findGame($id);
    }

    public function update(array $data, $attribute, $attribute_value, $operator = "=")
    {
        return game::where($attribute, $operator, $attribute_value)->update($data);
    }

    public function delete($id)
    {
        return $this->game->deleteGame($id);
    }
}
