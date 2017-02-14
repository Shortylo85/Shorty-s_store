<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Mail\MyMail;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products = Product::all();
        return view('admin.product.index',compact('products'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

            $input = $request->except('photo');

        $this->validate($request,[
            'title'=>'required',
            'content'=>'required',
            'description'=>'required',
            'specifications'=>'required',
            'category'=>'required',
            'photo'=>'required|mimes:jpeg,jpg,png|max:10000',
            'price'=>'required|max:6'
        ]);

            $photo = $request->file('photo');

                if($photo){
                    $name = $photo->getClientOriginalName();
                    $photo->move('images',$name);
                    $product = Product::create($input);
                    $product['photo'] = $name;
                }

            $product->save();
             return redirect()->route('product.index')->with('created','Successfully created product!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $product = Product::find($id);
        return view('page.product',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $product = Product::find($id);

        return view('admin.product.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $product = Product::find($id);
        $input = $request->except('photo');

        $this->validate($request,[
            'title'=>'required',
            'content'=>'required',
            'description'=>'required',
            'specifications'=>'required',
            'category'=>'required',
            'photo'=>'required|mimes:jpeg,jpg,png|max:10000',
            'price'=>'required|max:6'
        ]);

        $photo = $request->file('photo');

        if($photo){
            $name = $photo->getClientOriginalName();
            $photo->move('images',$name);
            $product['photo'] = $name;
        }

        $product->update($input);
        return redirect()->route('product.index')->with('saved','You have successfully saved change');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }

    public function productToCart(Request $request,$id){

        if(Auth::user()->status == 0){
            $product = Product::find($id);

            $oldCart = Session::has('cart')?Session::get('cart'):null;

            $cart = new Cart($oldCart);

            $request->session()->put('cart',$cart);

            $cart->addToCart($product->id, $product);

            return redirect()->back();
        }else{
            return redirect()->back()->with('not_user','You are not user. Please log in !');
        }






    }

    public function cart(){


            if(!Session::has('cart')){
                return view('page.cart');
            }else{
                $oldCart = Session::get('cart');
                $cart = new Cart($oldCart);
                return view('page.cart',['products'=>$cart->items,'totalQuantity'=>$cart->totalQuantity,'totalPrice'=>$cart->totalPrice]);
            }




    }

   public function cartReduceOne($id){

       $oldCart = Session::has('cart') ? Session::get('cart') : null;
       $cart = new Cart($oldCart);
       $cart->reduceByOne($id);


       if(count($cart->items)>0){
            Session::put('cart',$cart);
       }else{
           Session::forget('cart');
       }

       return redirect()->route('page.cart')->with('deleted_from_cart','Successfuly remove from cart!');

   }

    public function cartRemoveItem($id){

        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->reduceAll($id);


        if(count($cart->items)>0){
            Session::put('cart',$cart);
        }else{
            Session::forget('cart');
        }

        return redirect()->route('page.cart')->with('deleted_from_cart','Successfuly remove from cart!');
    }

    public function checkoutInfo(){
        return view('page.checkout-info');
    }

    public function delete($id){

        $product = Product::find($id);
        $product->delete();

        return redirect()->route('product.index')->with('deleted_product','Product has been successfully deleted');
    }

    public function word(Request $request){

        $titleSearched = $request->input('title');

        $products = Product::where('title','LIKE','%'.$titleSearched.'%')->get();

            if(count($products)==0){
                return redirect()->back()->with('no_item','No such item in database!');
            }else{
                return view('page.searched',compact('products'));
            }

    }

    public function sendMail(Request $request, Mailer $mailer){

        $name = $request->input('name');
        $content = $request->input('content');
        $email = $request->input('email');

        $mailer
            ->to($request->input('email'))
            ->send(new MyMail($name,$content,$email));


        return redirect()->back()->with('mailed','You have sent the mail');

    }

    public function byCategory($category)
    {

        $products = Product::where('category',$category)->get();

        return view('page.product-by-category',compact('products'));

    }




}
