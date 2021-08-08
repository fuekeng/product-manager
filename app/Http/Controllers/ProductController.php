<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create(){
        return view('product.create');
    }

    public function save(Request $request){
     $request->validate([
            'name' => 'required',
            'price' => 'required '
            ]); 

            $product=new Product();
            $product->name=$request->name;
            $product->price=$request->price;
            $product->quantity=$request->quantity;
            $product->save(); 
            return redirect()->back()->with('success','product has been added successfully');
    }


    public function getAll(){
         $products=
         Product::paginate(4);
        return view('product.all',compact('products'));
    }

    public function view($id){
        $product=Product::findOrFail($id);
        return view('product.view', compact('product'));
    }


    public function update($id, Request $request){
        $request->validate([
            'name' => 'required',
            'price' => 'required '

            ]); 

            $product=Product::findOrFail($id);
            $product->name=$request->name;
            $product->price=$request->price;
            $product->quantity=$request->quantity;
            $product->save(); 
            return redirect()->back()->with('success','product has been updated successfully');
    }
    
    public function delete(Request $request, $id){
        $product=Product::findOrFail($id);
        $product->delete();
        return redirect('/product');
    }
}
