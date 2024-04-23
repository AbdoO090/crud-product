<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Carbon\Carbon;


class ProductController extends Controller
{
    public function productadd() {

        return view('product.create',);

}
public function productstore(Request $request){

    $request->validate([
        'name'=>'required',
        'description' =>'required|string|max:255',
        'price' =>'required|numeric',
        'quantity' =>'required|numeric',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);
    $imageName = time().'.'.$request->image->extension();

    $request->image->move(public_path('images'), $imageName);


    $product_id = Product::insertGetId([
      'name' => $request->name,
      'description' => $request->description,
      'price' => $request->price,
      'quantity' => $request->quantity,
      'image' => $imageName,
      'created_at' => Carbon::now(),
  ]);



return redirect()->route('manage-product')->with('message','Product Added Successfully');


}
public function ManageProduct(){


    $products = Product::paginate(3);

    return view('product.view',compact('products'));
}
public function EditProduct($id){
    $products = Product::findOrFail($id);
    return view('product.edit',compact('products'));

}
public function ProductDataUpdate(Request $request){
    $request->validate([
        'name'=>'required',
        'description' =>'required|string|max:255',
        'price' =>'required|numeric',
        'quantity' =>'required|numeric',


    ]);

    $product_id = $request->id;
    Product::findOrFail($product_id)->update([
        'name' => $request->name,
        'description' => $request->description,
        'price' => $request->price,
        'quantity' => $request->quantity,
        'created_at' => Carbon::now(),
    ]);

    $notification = array(
      'message' => 'Product Updated Successfully',
      'alert-type' => 'success'
  );
  return redirect()->route('manage-product')->with('message','Product Updated');

}

public function productdelete($id){

    Product::findOrFail($id)->delete();

      return redirect()->back()->with('message','Product Deleted');


}
public function search(Request $request)
{
    $query = $request->input('query');
    $products = Product::where('name', 'like', "%$query%")
                        ->orWhere('description', 'like', "%$query%")
                        ->paginate(3);
               return view('product.view',compact('products'));



}


}









