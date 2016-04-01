<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Product;

class ProductsController extends Controller
{
    public function usersByProduct(Product $product){

        $users = $product->users;

        return view('usersByProduct', compact('users'));

    }
}
