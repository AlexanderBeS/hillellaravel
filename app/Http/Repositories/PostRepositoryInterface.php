<?php
/**
 * Created by PhpStorm.
 * User: Alexander
 * Date: 25.03.2020
 * Time: 20:10
 */

namespace App\Http\Repositories;


interface PostRepositoryInterface
{
    public function findById(int $id): ?Post;
}