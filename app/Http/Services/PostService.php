<?php
/**
 * Created by PhpStorm.
 * User: Alexander
 * Date: 25.03.2020
 * Time: 19:23
 */

namespace App\Http\Services;


use Illuminate\Database\Eloquent\Collection;

class PostService implements PostServiceInterface
{

    public function createPost(array $postData): int
    {
        // TODO: Implement createPost() method.
    }

    public function deletePost(int $id, array $postData): void
    {
        // TODO: Implement deletePost() method.
    }

    public function getAllPosts(int $page = null): Collection
    {
        // TODO: Implement getAllPosts() method.
    }

    public function getPostById(int $id): Post
    {

        //$post = Post::find($id); // /posts/1        NULL

        //1 variant
        //$post = Post::findOrFail($id); // /posts/1  404 page

        /*2 variant
        $qb = Post::where('id', $id);
        //$post = $qb->get(); //возвр коллекцию
        $post = $qb->first(); //возвр первую запись
        */

        $post = $this->postRepository->findByid($id);
        ...




    }

    public function updatePost(int $id, array $postData): int
    {
        // TODO: Implement updatePost() method.
    }
}