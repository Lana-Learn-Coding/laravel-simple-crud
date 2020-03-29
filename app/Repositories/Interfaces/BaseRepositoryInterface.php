<?php


namespace App\Repositories\Interfaces;


interface BaseRepositoryInterface
{
    function findAll();

    function findOne(int $id);

    function create(array $attribute);

    function update(int $id, array $attribute);

    function delete(int $id);
}
