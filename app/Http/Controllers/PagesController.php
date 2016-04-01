<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Traits\UserTrait;
use App\Product;

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

    public function manyToMany(){

        $users = $this->getUsers();
        $products = Product::all();

        return view('manyToMany', compact('users', 'products'));

    }

    public function productsByUser(){

        return view('productsByUser');

    }

    public function usersByProduct(){

        return view('usersByProduct');

    }



}
