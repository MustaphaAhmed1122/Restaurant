<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Food;
use App\Models\Reservation;
use App\Models\Ceefs;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function user()
    {
        $data = User::all();
        return view('admin.user',compact('data'));
    }
    public function deleteusers($id)
    {
        $data = User::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function foodmenu()
    {
        $data = Food::paginate(5);
        return view('admin.foodmenu',compact('data'));
    }
    public function upload(Request $request)
    {
        $data = new Food();
        $image = $request->image;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('foodimage',$imagename);
        $data->image=$imagename;
        $data->name=$request->nameF;
        $data->price=$request->price;
        $data->description=$request->description;
        $data->save();
        return redirect()->back();
    }
    public function deletemenu($id)
    {
        $data = Food::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function updateview($id)
    {
        $data = Food::find($id);
        return view('admin.update',compact('data'));
    }
    public function update(Request $request,$id)
    {
        $data = Food::find($id);
        $image = $request->image;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('foodimage',$imagename);
        $data->image=$imagename;
        $data->name=$request->nameF;
        $data->price=$request->price;
        $data->description=$request->description;
        $data->save();
        return redirect()->back();

    }
    public function reservation(Request $request)
    {
        $data = new Reservation();
        $data->name=$request->name;
        $data->email=$request->email;
        $data->phone=$request->phone;
        $data->guest=$request->number;
        $data->date=$request->date;
        $data->time=$request->time;
        $data->message=$request->message;
        $data->save();
        return redirect()->back();
    }
    public function vieweservation()
    {
//        $usertype = Auth::user()->usertype;
//        if ($usertype == '1')
        if (Auth::id())
    {
        $data = Reservation::all();
        return view('admin.Table-reservation',compact('data'));
    }
    else
    {
        return redirect('login');
    }
    }
    public function viewcheef()
    {
        $data = Ceefs::all();
        return view('admin.cheef',compact('data'));
    }
    public function uploadcheef(Request $request)
    {
        $data = new Ceefs();
        $image = $request->image;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('chefimage',$imagename);
        $data->image=$imagename;
        $data->name=$request->name;
        $data->speciality=$request->speciality;
        $data->save();
        return redirect()->back();
    }
    public function updatechef($id)
    {
        $data = Ceefs::find($id);
        return view('admin.chefupdate',compact('data'));
    }
    public function deletechef($id)
    {
        $data = Ceefs::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function updatefoodchef(Request $request,$id)
    {
        $data =Ceefs::find($id);
        $image = $request->image;
        if ($image) {
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $request->image->move('chefimage',$imagename);
            $data->image=$imagename;
        }
        $data->name=$request->name;
        $data->speciality=$request->speciality;
        $data->save();
        return redirect()->back();
    }
    public function orders()
    {
            $data = Order::all();
            return view('admin.orders',compact('data'));
    }
    public function search(Request $request)
    {
        $search = $request->search;
        $data = Order::where('user_name','Like','%'.$search.'%')->orWhere('food_name','Like','%'.$search.'%')->get();
        return view('admin.orders',compact('data'));
    }

}
