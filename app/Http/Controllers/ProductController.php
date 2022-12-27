<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public $products,$product;
    public function addproduct()
    {
        return view('front.add-product.add-product');
    }
    public function saveproduct(Request $request)
    {
        Product::saveproduct($request);
        return redirect()->back()->with('message',' add product save successfully.');

    }
    public function manageproduct()
    {
        $this->products = Product::all();
        return view('front.manage.manage-product',[
            'products'=>$this->products
        ]);
    }
    public function editproduct($id)
    {
        $this->product = Product::find($id);
        return view('front.edit.edit-product',[
            'product'=>$this->product
        ]);
    }
    public function updateproduct(Request $request,$id)
    {
        Product::updateproduct($request,$id);
        return redirect('/manage-product')->with('message','product info update successfullu.');

    }
    public function deleteproduct($id)
    {
        $this->product = Product::find($id);
        $this->product->delete();
        return redirect('/manage-product')->with('message','product delete successfully');
    }
}
