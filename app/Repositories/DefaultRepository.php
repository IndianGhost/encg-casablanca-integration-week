<?php

namespace App\Repositories;

interface DefaultRepository
{
    public function getAll();

    public function find($id);

    public function update(array $data, $attribute, $attribute_value, $operator = "=");

    public function delete($id);
}
