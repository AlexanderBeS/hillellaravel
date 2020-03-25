<?php
/**
 * Created by PhpStorm.
 * User: Alexander
 * Date: 25.03.2020
 * Time: 19:23
 */

namespace App\Http\Services;


use Illuminate\Database\Eloquent\Collection;

interface PostServiceInterface
{
    /**
     * @param int $id
     * @throws \Exception
     * @return Post
     *
     */
    public function getPostById(int $id): Post;

    /**
     * @param int|null $page
     * @return Collection
     */
    public function getAllPosts(int $page = null): Collection;

    /**
     * @throws \Exception
     * @param array $postData
     * @return int
     */
    public function createPost(array $postData): int;

    /**
     * @param int $id
     * @param array $postData
     * @return int
     *
     */
    public function updatePost(int $id, array $postData): int;

    public function deletePost(int $id, array $postData): void;
}