<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
class ProductController extends Controller
{
    //

    public  function  index(){
        $products=Products::all();
        return view('admin.products', compact('products'));

    }

    public function create()
    {
        return view('admin.addproducts');
    }


    public function store(Request $request)
    {
        $product = new Product([
            'name' => $request->get('name'),
            'id_category' => $request->get('id_category'),
            'reference' => $request->get('reference'),
            'description' => $request->get('description'),
            'price' => $request->get('price'),
            'picture' => $request->get('picture'),
            'amount' => $request->get('amount'),
            'rate' => $request->get('rate')
        ]);
        $product->save();
        return redirect('/products')->with('success', 'Products has been added');
    }


}
