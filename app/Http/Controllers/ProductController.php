<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Productt;
use Illuminate\Http\Request;
use App\Models\Products;
use Yajra\DataTables\DataTables;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as BaseVerifier;

class ProductController extends Controller
{
    //

    public  function  index(){
        $products=Productt::all();
        return view('admin.products', compact('products'));

    }

    public  function  NotAvaialable(){
        $products=Productt::where('state','=','out of order')->get();
        foreach($products as $d){
            $d->setAttribute('added_at',$d->created_at->diffForHumans());
            
        }
        return view('admin.notavailable', compact('products'));

    }

    public function Avaialable($id){
        $prod=Productt::find($id);
        $prod->state="available";
        $prod->save();
        return redirect('/notavailable')->with('success', 'Success');

    }


    public  function getProducts(Request $request){

        if ($request->ajax()) {
            $data = Productt::latest()->get();
            foreach($data as $d){
                $d->setAttribute('added_at',$d->created_at->diffForHumans());                
            }
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($data){
                    $actionBtn = '                
                    <form method="POST" action="">
                             <a  href="' . route('editProduct', $data->id) . '" class="edit btn btn-success btn-sm"><i class="fa fa-edit"></i> Edit</a>
                                  <button formaction="' . route('DeleteProduct', $data->id) . '" type="submit" class="delete btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</button>
                                  <button formaction="' . route('NotAvailable', $data->id) . '" type="submit" class="delete btn btn-primary btn-sm" ><i class="fa fa-plus"></i> Out of order</button>   
                                  </form>                              
                                 ';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }




    public function create()
    {
        $categories=Category::all();
        return view('admin.addproducts',compact('categories'));
    }


    public function StoreProduct(Request $request)
    {

        if ($request->hasFile('picture')) {

            $avatar=$request->file('picture');
            $filename=time().'.'.$avatar->getClientOriginalExtension();
            $request->file('picture')->move(public_path('assets/avatars'), $filename);

        }

        $product = new Productt([
            'name' => $request->get('name'),
            'id_category' => $request->get('category'),
            'reference' => $request->get('reference'),
            'description' => $request->get('description'),
            'price' => $request->get('price'),
            'state' => $request->get('state'),
            'picture' => $filename,
            'amount' => $request->get('amount'),

        ]);
        $categorie=Category::find($request->category);
        $categorie->amount=$categorie->amount+1;
        $categorie->save();
        $product->save();
        return redirect('/products')->with('success', 'Products has been added');
    }

    public function edit($id)

    {
        $product=Productt::find($id);
        $categories=Category::all();
        return view('admin.editproducts',compact('categories','product'));
    }


    public  function  deleteProduct($id){
       $prod=Productt::find($id);
       $prod->delete();
        return redirect('/products')->with('success', 'Products has been deleted');
    }

    public  function UpdateProduct(Request $request, $id){

        $prod = Productt::find($id);
        $prod->name=  $request->get('name');
        $prod->reference=  $request->get('reference');
        $prod->price=  $request->get('price');
        $prod->amount=  $request->get('amount');
        $prod->description=  $request->get('description');
        $prod->id_category=  $request->get('category');


        $prod->save();

        return redirect('/products')->with('success', 'Product has been changed');
    }

    public function NotAvailableProduct($id){
       $prod=Productt::find($id);
       $prod->state='Out of order';
       $prod->save();

       return redirect('/products')->with('success', 'Product has been out of order');

    }

}
