<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Inventory;

class InventoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {   
       
        $inventory = Inventory::all();

      

        return view('inventory.index')
            ->with('inventory', $inventory);
    }
}
