<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Models\Productt;
use App\Models\Provider;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

 public function productts(){
     $products=Productt::all();
     return view('products',compact('products'));
 }

 public function details($id){
    $product=Productt::find($id);
    return view('details',compact('product'));
}

    public function index()
    {
        
        $nbrProducts=Productt::all()->count();
        $nbrProviders=Provider::all()->count();
        $nbrOrders=Provider::all()->count();
        $nbrNot=Productt::where('state','=','out of order')->count();
        return view('home',compact('nbrProducts','nbrNot','nbrProviders','nbrOrders'));
    }

    public function welcome()
    {
        return view('welcome');
    }

    public function profile(){
        return view('admin.profile');
    }

    public function SaveProfile(Request $request){
        if ($request->hasFile('picture')) {

            $avatar=$request->file('picture');
            $filename=time().'.'.$avatar->getClientOriginalExtension();
            $request->file('picture')->move(public_path('assets/avatars'), $filename);
            User::find(Auth::user()->getAuthIdentifier())->update(['avatar' => $filename]);

        }

        User::find(Auth::user()->getAuthIdentifier())->update(['name' => $request->name]);
        return view('admin.profile');
    }

public function Orders(){
$orders=Order::all();
foreach($orders as $d){
    $d->setAttribute('name',Provider::where('id','=',$d->id_provider)->value('name'));
    $d->setAttribute('added_at',$d->created_at->diffForHumans());
    $d->setAttribute('product',Category::where('id','=',$d->id_category)->value('nameCat'));
}

return view('admin.orders',compact('orders')); 
}

public function addOrders(){
 $providers=Provider::all();
 $categories=Category::all();

 return view('admin.addOrder',compact('providers','categories'));


}

public function CreateOrder(Request $request){
 $order=new Order;

 $order->id_provider=$request->name;
 $order->id_category=$request->product;
 $order->amount=$request->amount;
 $order->description=$request->description;

 $order->save();
 return redirect('/orders')->with('success', 'Order has been added');
}

public function DeleteOrder($id){
 $order=Order::find($id);
 $order->delete();

 return redirect('/orders')->with('success', 'Order has been deleted');

}


public function AcceptOrder($id){
    $order=Order::find($id);
    $order->state='arrived';
     $order->save();

   $categorie=Category::find($order->id_category);
   $categorie->amount=$categorie->amount+$order->amount;
   $categorie->save();
    return redirect('/orders')->with('success', 'Success');
   
   }



}
