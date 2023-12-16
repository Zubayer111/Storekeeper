<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index(){
        return view("backend.pages.add_product");
    }

    public function store(Request $request){
        $this->validate($request, [
            "title" => "required|string|max:25",
            "sort_description" => "required|string|max:200",
            "price" => "required|string|max:10",
            "products_image" => "required|image|max:20000|mimes:png,jpg,svg,jpeg",
            "quantity" => "required|string|max:10",
        ]);
        

        if($request->hasFile("products_image")){
            $image = $request->file("products_image");
            $fileNameToStre = "products_image_".md5(uniqid()).time().".".$image->getClientOriginalExtension();
            $image->move(public_path("assets/product"), $fileNameToStre);
        }

        DB::table("products")->insert(
            [
                "title" => $request->title,
                "sort_description" => $request->sort_description,
                "price" => $request->price,
                "products_image" => "assets/product/".$fileNameToStre,
                "quantity" => $request->quantity,
                "created_at" => now(),
                "updated_at" => now(),
            ]
            );
        return redirect()->back()->with("success","Product Uplode Successfully");
        
    }

    public function viewAll(){
        $products = DB::table("products")->get();
        return view("backend.pages.manage_product", compact("products"));
    }

    public function edit($id){
        $product = DB::table("products")->find($id);
        return view("backend.pages.edit_product", compact("product"));
    }

    public function updete(Request $request, $id){
        $this->validate($request, [
            "title" => "required|string|max:25",
            "sort_description" => "required|string|max:200",
            "price" => "required|string|max:10",
            "quantity" => "required|string|max:10",
        ]);

         DB::table("products")->update([
            "title" => $request->title,
                "sort_description" => $request->sort_description,
                "price" => $request->price,
                "quantity" => $request->quantity,
                "created_at" => now(),
                "updated_at" => now(),
        ]);
        return redirect()->back()->with("success","Product Update Successfully");
    }
}
