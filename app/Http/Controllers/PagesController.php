<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Traits\UserTrait;

class PagesController extends Controller
{
    use UserTrait;

    public function index(){

        return view('index');

    }

    public function oneToOne(){

        $usersAndCredentials = $this->getUsersWithCredentials();

        return view('oneToOne', compact('usersAndCredentials'));

    }

    public function oneToMany(){

        $usersAndPosts = $this->getUsersWithPosts();

        return view('oneToMany', compact('usersAndPosts'));

    }

}
