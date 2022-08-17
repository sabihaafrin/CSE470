<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Doctor;
use App\Models\Appointment;
use App\Models\Ambulance;
use App\Models\Testlist;
use App\Models\Consult;


use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function redirect()
    {
        if (Auth::id()) {
            if (Auth::user()->user_type == '0') {
                $doctor = doctor::all();
                return view('user.home', compact('doctor'));
            } else {
                return view('admin.home');
            }
        } else {
            return redirect()->back();
        }
    }


    public function index()
    {
        if (Auth::id()) {
            return redirect('home');
        } else {
            $doctor = doctor::all();
            return view('user.home', compact('doctor'));
        }
    }


    public function appointment(Request $request)
    {
        $data = new appointment;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->date = $request->date;
        $data->phone = $request->number;
        $data->comment = $request->comment;
        $data->doctor = $request->doctor;
        $data->status = 'Booking In Progress';

        if (Auth::id()) {
            $data->user_id = Auth::user()->id;
        }

        $data->save();

        return redirect()->back();
    }


     public function myappointment()
     {

        if(Auth::id())
        {
            $userid=Auth::user()->id;
            $appoint=appointment::where('user_id',$userid)->get();  //if user_id and userid matches trhen it will show thir specific appointment list 
            return view('user.my_appointment',compact('appoint'));

        }
        else{
            return redirect()->back();
        }

     }

     public function ambulance(Request $request)
     {
        $data= new ambulance;
        $data->name=$request->name;
        $data->email=$request->email;
        $data->phone=$request->number;
        $data->date=$request->date;
        $data->comment=$request->comment;
        $data->status='In progress';
        if(Auth::id())
        {
        $data->user_id=Auth::user()->id;
        }
        $data->save();
        return redirect()->back();

     }

     public function myambulance()
     {
        if(Auth::id())
        {
         $userid=Auth::user()->id;
         $ambul=ambulance::where('user_id',$userid)->get();  //if user_id and userid matches trhen it will show thir specific appointment list 
         return view('user.my_ambulance',compact('ambul'));
     }
        else
        {
            return redirect()->back();
        }
     }

     public function cancel_ambul($id)
     {
        
       $data=ambulance::find($id);
       $data->delete();
       return redirect()->back();

     }


     public function cancel_appoint($id)
     {
        
       $data=appointment::find($id);
       $data->delete();
       return redirect()->back();

     }

     public function test()
     {
        return view('user.test');
     }

     public function contact()
     {
        return view('user.contact');
     }
     public function showtest()
     {
        $data=testlist::all();
         return view('user.showtest',compact('data'));
     }

     public function consult()
     {
        $data=Consult::all();
         return view('user.consult',compact('data'));
     }

    
}
