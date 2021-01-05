<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::get();

        foreach($categories as $category){
            echo "$category->id $category->name<br/>";
            foreach($category->products as $product){
                echo "$product->id $product->name $product->detail<br/>";
            }
            echo '<br/><br/>';
        }        
    }

    public function products(){
        $products = Product::get();

        foreach($products as $product){
            echo "$product->id $product->name"." ";
            echo $product->category->name;
            echo '<br/>';
        }        
    }
}
