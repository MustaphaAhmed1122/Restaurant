<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Food;
use App\Models\Ceefs;
use App\Models\Cart;
use App\Models\Order;


class HomeController extends Controller
{
    public function index()
    {
        if (Auth::id())
        {
            return redirect('redirects');
        }
        else
        {
            $data= Food::all();
            $data1= Ceefs::all();
            return view('home',compact('data','data1'));
        }

    }
    public function redirects()
    {
        $data = Food::all();
        $data1 = Ceefs::all();
        $usertype = Auth::user()->usertype;
        if ($usertype == '1')
        {
            return view('admin.index');
        }
        else
        {
            $user_id=Auth::id();
            $counter =Cart::where('user_id',$user_id)->count();
            return view('home',compact('data','data1','counter'));
        }
    }
    public function addcart(Request $request,$id)
    {
        if (Auth::id())
        {
            $user_id=Auth::id();
            $food_id=$id;
            $quantity=$request->quantity;
            $cart = new Cart();
            $cart->user_id=$user_id;
            $cart->food_id=$food_id;
            $cart->quantity=$quantity;
            $cart->save();
            return redirect()->back();
        }
        else
        {
            return redirect('/login');
        }

    }
    public function showcart(Request $request,$id)
    {
        $counter =Cart::where('user_id',$id)->count();

        if (Auth::id()==$id)
        {
            $data=Cart::where('user_id',$id)->join('food','carts.food_id','=','food.id')->get();
            $data2 =Cart::select('*')->where('user_id','=',$id)->get();
            return view('/showcart',compact('counter','data2','data'));
        }
        else
        {
            return redirect()->back();
        }
    }
    public function removefood($id)
    {
        $data=Cart::find($id);
        $data->delete();
        return redirect()->back()->with(['message'=> 'Successfully deleted!!']);
    }
    public function orderconfirm(Request $request)
    {
        foreach ($request->foodname as $key =>$foodname)
        {
            $data = new Order();
            $data->food_name=$foodname;
            $data->price=$request->price[$key];
            $data->quantity=$request->quantity[$key];
            $data->user_name=$request->name;
            $data->user_phone=$request->phone;
            $data->user_address=$request->address;
            $data->save();
        }
        return redirect()->back();
    }
}
