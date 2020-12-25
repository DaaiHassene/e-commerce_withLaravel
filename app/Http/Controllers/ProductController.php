<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
        function index()
    {
        $produits = Product::all();
        
        return view('product.index',[
            "products"=>$produits
        ]);
    }

    function categorie_product($cat)
    {
        return view('product.categorie');
    }
}
