<?php

namespace App\Http\Controllers;

use App\Address;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AddressController extends Controller{
    
    public function index(){
        
        $address = Address::all();
        
        return response()->json($address);
    }
    
    
    public function getAddress(Request $request, $id){
        
        $address = Address::find($id);

        return response()->json($address);
    }
    
    public function createAddress(Request $request){
        
        $address = Address::create($request->all());
        
        return response()->json($address);
    }
    
    public function updateAddress(Request $request, $id){
        
        $address = Address::find($id);
        if($request->input('street') <> NULL) $address->name = $request->input('street');
        if($request->input('district') <> NULL) $address->lastname = $request->input('district');
        if($request->input('city') <> NULL) $address->genre = $request->input('city');
        if($request->input('state') <> NULL) $address->birthdate = $request->input('state');
        if($request->input('zipcode') <> NULL) $address->cel = $request->input('zipcode');
        if($request->input('phone') <> NULL) $address->email = $request->input('phone');
        $address->save();

        return response()->json($address);

        }
    
    public function deleteAddress($id){
        
        $address = Address::find($id);
        $address->delete();

        return response()->json('Removido com sucesso.');
        
    }
    
}
