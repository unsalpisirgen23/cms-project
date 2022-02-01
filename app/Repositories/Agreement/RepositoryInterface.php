<?php

namespace App\Repositories\Agreement;

interface RepositoryInterface
{
    public function get($id,array $selector = ['*']);
    public function getAll(array $selector = ['*']);
    public function add(array $entity);
    public function remove($id);
    public function update($id,array $entity = []);
    public function getById($id);
    public function exists(array $condition = []);
    public function lastInsertId();
}
