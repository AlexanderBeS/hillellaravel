<?php
/**
 * Created by PhpStorm.
 * User: Alexander
 * Date: 25.03.2020
 * Time: 20:09
 */

namespace App\Http\Repositories;


class PostRepository
{

    private $model;

    public function __construct()
    {
        $this->model = app()->make(Post::class);
    }

    public function findById(int $id): ?post
    {
        return $this->model->..;
    }
}