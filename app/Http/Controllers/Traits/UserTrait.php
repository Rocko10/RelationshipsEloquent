<?php

namespace App\Http\Controllers\Traits;

use App\User;
use App\Post;

trait UserTrait{

    public function getUsers(){

        return User::all();

    }

    public function getUsersWithCredentials(){

        return User::with('credential')->get();

    }

    public function getUsersWithPosts(){

        return User::with('posts')->get();

    }

    public function getPosts(){

        return Post::All();

    }

    public function getPostByUser(User $user){

        return $user->load('posts');

    }

    public function getGamesThroughConsole(User $user){

        return $user->games;

    }


}


?>
