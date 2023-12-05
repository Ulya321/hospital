<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

use App\Models\Doctor;
<<<<<<< HEAD

use App\Models\Appointment;
=======
use App\Models\News;
>>>>>>> farel


class HomeController extends Controller
{
    public function redirect()
    {
        if(Auth::id())
        {
<<<<<<< HEAD
            if(Auth::user()->usertype=='0')
            {
                $doctor = doctor::all();
                return view('user.home', compact('doctor'));
            }
            else 
            {
                return view('admin.home');
=======
            $doctors = doctor::all();
            $news = news::all();
            if(Auth::user()->usertype=='0')
            {
                return view('user.home', compact('doctors', 'news'));
            }
            else 
            {
                return view('admin.home', compact('doctors', 'news'));
>>>>>>> farel
            }
        }
        else{
            return redirect()->back();
        }
    }
public function index()
{
    if(Auth::id())
    {
        return redirect('home');
    }
    else
    {
<<<<<<< HEAD
     $doctor = doctor::all();
     return view('user.home', compact('doctor'));
=======
     $doctors = doctor::all();
     $news = news::all();
     return view('user.home', compact('doctors', 'news'));
>>>>>>> farel
    }
    
}

<<<<<<< HEAD
public function appointment(Request $request)
{
   $data = new appointment; 

   $data->name=$request-> name;

   $data->email=$request-> email;

   $data->date=$request-> date;

   $data->phone=$request-> number;

   $data->message=$request-> message;

   $data->doctor=$request-> doctor;

   $data->status='In progress';

   if(Auth::id())
   {
    $data->user_id=Auth::user()->id; 
   }

   $data->save();
   
}
public function myappointment()
{
    if(Auth::id())
    {
        $userid=Auth::user()->id;
        $appoint=appointment::where('user_id, $userid')->get();
    
        return view('user.my_appointment', compact('appoint'));
    }
   
  else
  {
    return redirect()->back();
  }
}

public function cancel_appoint($id)
{
    $data=appointment::find($id);
    $data->delete();

    return redirect()->back();
}

=======
>>>>>>> farel
}
