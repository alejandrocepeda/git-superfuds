<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Inventory;

class CustomerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {   
        $products = Product::all();

        return view('customer.index')
            ->with('products', $products)
            ->with('quantity', 0)
            ->with('product', 0);
    }

    public function update(Request $request)
    {   
        
        $price = 0;
        $total = 0;
        $quantityInventory = 0;
        
        $product = Product::find($request->product_id);
        
        $products = Product::all();
        $quantity = $request->input('quantity');
        
        
        if ($product->inventory){
            $price              = $product->inventory->price;
            $total              = $product->inventory->price*$quantity;
            $quantityInventory  = $product->inventory->quantity;     
            
            if ($quantity <= $quantityInventory){
                Inventory::where('product_id', $request->product_id)
                    ->update(['quantity' => ($quantityInventory - $quantity)]);
            }else{
                return view('customer.index')
                    ->with('error', true)
                    ->with('products', $products)
                    ->with('product', $product->id)
                    ->with('quantity', $quantity);
            }
        }
        else{
            return view('customer.index')
                ->with('error', true)
                ->with('products', $products)
                ->with('product', $product->id)
                ->with('quantity', $quantity);
        }

        return view('customer.index')
            ->with('status', true)
            ->with('products', $products)
            ->with('quantity', $quantity)
            ->with('price', $price)
            ->with('total', $total)
            ->with('product', $product->id);
        
    }

    
}
