<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\ProposedPrice;

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
    public function show(Product $product)
    {
        return view('product.show', compact('product'));
    }

    function categorie_product($cat)
    {
        return view('product.categorie');
    }

    function buy(Request $req){

        ProposedPrice::create($req->all());
   
    }
    function acceptedPrice(Request $req,ProposedPrice $proposed_price){
        $proposed_price->update($req->all());

    }
    function addWishlist(Request $req){}
}
