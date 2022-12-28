<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ContactController extends Controller
{
    public function index(){
        $data = User::with('contact')->with('product')->find(1);
       
      
        // dd($data->toArray());
        echo $data->name;
        echo $data->contact->phone;
        echo $data->product->price;
        echo $data->product->discount;
        echo $data->product->profit;


        $data = User::join('contacts', 'contacts.user_id', 'users.id')
        ->join('products', 'products.user_id', 'users.id')
        ->join('addresses', 'addresses.user_id', 'users.id')
        ->select('users.*', 'contacts.phone', 'products.price','addresses.*')
        ->get();
        dd($data);


        return view('welcome',compact('data'));
    }
}
