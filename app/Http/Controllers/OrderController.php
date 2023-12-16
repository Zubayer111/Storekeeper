<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function index(){
        $products = DB::table("products")->get();
        return view("backend.pages.order_product", compact("products"));
    }

    public function confarm($id){
        $product = DB::table("products")->find($id);
        return view("backend.pages.confaram_order", compact("product"));
    }
    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
        ]);

        $product = Product::findOrFail($request->input('product_id'));
        $totalPrice = $product->price * $request->input('quantity');

        
        DB::table('orders')->insert([
            'product_id' => $product->id,
            'quantity' => $request->input('quantity'),
            'total_price' => $totalPrice,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        

        return redirect()->route('orders.index')
            ->with('success', 'Order placed successfully');
    }

    public function allOrder(){
        $products = DB::table('products')
        ->leftJoin('orders', 'products.id', '=', 'orders.product_id')
        ->select('products.*', DB::raw('SUM(orders.quantity) as total_ordered'))
        ->groupBy('products.id', 'products.name', 'products.price')
        ->get();

    return view("backend.pages.all_order_list", compact('products'));
    }

}
