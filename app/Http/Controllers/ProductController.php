<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Ramsey\Uuid\Type\Decimal;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('welcome', ["products"=>$products]);
    }

    public function create(){
        return view('create');
    }

    public function store(){
        $product = new Product();
        $product->name = request("name");
        $product->price = request("price");
        $product->type = request("type");
        $product->value = request("typevalue");

        $product->save();
        return redirect("/");
    }

    public function destroy(){
        $ids = request("delete_id");
        if($ids!=null)
            Product::whereIn("sku",$ids)->delete();
        // $product = Product::where("sku",$sku);
        // $product->delete();
        return redirect("/");
    }
}
