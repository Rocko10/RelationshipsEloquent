<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;

class UsersController extends Controller
{
    public static function index(){

        $users = User::all();

        return $users;

    }

    public function productsByUser(User $user){

        $products = $user->products;

        return view('productsByUser', compact('products'));

    }

    public function gamesByUser(User $user){

        $games = $user->games;

        return view('gamesByUser', compact('games'));

    }
}
