<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HomeController extends Controller
{
    public function redirect()
    {
        if (Auth::id()) {

            if (Auth::user()->user_type == '0') {

                $doctors = Doctor::all();
                return view('user.home', compact('doctors'));
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
            if (Auth::user()->user_type == '0') {

                $doctors = Doctor::all();
                return view('user.home', compact('doctors'));
            } else {

                return view('admin.home');
            }
        } else {
            $doctors = Doctor::all();
            return view('user.home', compact('doctors'));
        }
    }

    public function index_login()
    {
        if (Auth::id()) {
            return redirect()->route('home');
        } else {
            return view('auth.login');
        }
    }


    public function appointment(Request $request)
    {
        $data = new Appointment();

        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->doctor = $request->doctor;
        $data->date = $request->date;
        $data->message = $request->message;
        $data->status = "In Progress";

        if (Auth::id()) {
            $data->user_id = Auth::user()->id;
        }

        $data->save();

        return redirect()->back()->with('message', 'Appointment Successful. We will contact with you soon.');
    }

    public function myAppointment()
    {
        if (Auth::id()) {

            $userId = Auth::user()->id;
            $appointments = Appointment::where('user_id', $userId)->get();

            return view('user.my_appointment', compact('appointments'));
        } else {
            return redirect()->back();
        }
    }


    public function cancelAppointment($id)
    {
        $data = Appointment::find($id);
        $data->delete();

        return redirect()->back();
    }
}
