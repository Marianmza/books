<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CartItem;
class CartController extends Controller
{

    public function index()
    {
        $cart = CartItem::all();

        return view('cart\index', compact('cart'));
    }
    public function add(Request $request)
    {
        $item= CartItem::where('book_id', $request->input('book_id'))->first();
        if($item != null){
            // item with chosen book_id already eksist, I want to update count
            $item->count+= $request->input('count');
            $item->save();

        }else{
            // item with chosen book_id does not exist,
            $cart_item = new CartItem;
            $cart_item->book_id= $request->input('book_id');
            $cart_item->count= $request->input('count');
            $cart_item->save();
           
        }

        return redirect('/cart');
    }
}
