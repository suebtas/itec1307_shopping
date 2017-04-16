<?php

namespace App\Http\Controllers;
use App\Product;
use App\Cart;
use Illuminate\Http\Request;

use App\Http\Requests;

use Session;

class ProductController extends Controller
{
    public function getIndex()
    {
        $products = Product::all();
        return view('shop.index', ['products' => $products]);
    }
    /*
    * รับค่าพารามิเตอร์ การส่งข้อมูลrequest url 
    * รับค่าพารามิเตอร์ $id รหัสสินค้าจากการกดปุ่ม 
    * เก็บข้อมูลสินค้าลงตัวแปร session เพื่อเก็บข้อมูลสินค้าใน server
    * เรียกแสดงข้อมูลหน้า index
    */
    public function getAddToCart(Request $request, $id) {
        $product = Product::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $product->id);
        $request->session()->put('cart', $cart);
        //dd($request->session()->get('cart'));
        return redirect()->route('product.index');
    }
}
