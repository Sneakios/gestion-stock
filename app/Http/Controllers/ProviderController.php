<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Provider;
class ProviderController extends Controller
{
    //

    public function getprovider(){
      $providers=Provider::all();
      return view('admin.providers',compact('providers'));

    }

    public function AddProvider(Request $request){
      
        $provider = new Provider([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'location' => $request->get('location'),
            'mobile' => $request->get('mobile'),
            
        ]);
        $provider->save();
        return redirect('/providers')->with('success', 'Provider has been added');
    }

    public function DeleteProvider($id){
      
        $provider=Provider::find($id);
        $provider->delete();
        return redirect('/providers')->with('success', 'Provider has been deleted');
    }

    public function CreateProvider(){
    
        return view('admin.addprovider');
  
      }

    
}
