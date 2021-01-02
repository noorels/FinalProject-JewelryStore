<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class jewlerycontroller extends Controller
{
    public function poly_relationships(){
 
     //

    }

  public function relationships()
    {
       $Category = Category::find(1);
         /*dd($Category);*/

          foreach ($Category->Product as $product){
            echo $product->Title.' '.$product->Price.'<br>';
        }
        dd();
        dd($Category->Product);

   

    }


  public function orm()
    {

       /* $categories = Category::all();
        foreach ($categories as $Category){
            echo $Category->code.'<br>';
     */

    /* $product = new Product();
     $product->Image= 'Noor';
     $product->Title = 'Noor';
     $product->Price = '100';
     $product->save();  
     dd($product);*/

    /* $product = Product::create([
           'Image' => 'Haya',
           'Title' => 'haya',
           'Price' => '200'
           ]);
           dd($product);*/
    }

     public function querybuilder()
    {
 
    }

}
