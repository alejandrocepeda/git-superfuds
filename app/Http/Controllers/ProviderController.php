<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Inventory;
use Carbon\Carbon;

class ProviderController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {   
        $products = Product::all();


        return view('provider.index')
            ->with('products', $products);
    }

    public function update(Request $request)
    {   

        Inventory::create([
            'product_id' => $request->product_id,
            'price' => $request->price,
            'lot_number' => $request->lot_number,
            'quantity' => $request->quantity,
            'expiration_date' => Carbon::parse($request->expiration_date)
        ]);
        
        return redirect('provider');

      
    }
}
