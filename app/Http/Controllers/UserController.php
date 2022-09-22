<?php

namespace App\Http\Controllers;

use App\Http\Resources\DoctorResourceController;
use App\Models\Doctor;
use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{


    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'user_type' => '0',
            'password' => Hash::make($request->password),
        ]);

        $token = $user->createToken('myToken')->plainTextToken;

        return response([
            'user' => $user,
            'token' => $token
        ], 201);
    }


    public function logout()
    {
        auth()->user()->tokens()->delete();

        return response([
            'message' => 'Successfully logged out',
        ]);
    }


    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);


        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return response([
                'message' => 'The provided credentials are incorrect',
            ], 401);
        }


        $token = $user->createToken('myToken')->plainTextToken;

        return response([
            'user' => $user,
            'token' => $token
        ], 200);
    }



    // public function allDoctor()
    // {
    //     // $doctor_list = Doctor::all();
    //     $doctor_list =  Doctor::get();
        
    //     return DoctorResourceController::collection($doctor_list);

    //     return response([
    //         'doctor_list' => new DoctorResourceController($doctor_list),
    //     ]);

            
    // }


    public function allDoctor()
    {
        // $doctor_list = Doctor::all();
        $doctor_list =  Doctor::get();
        

        return response([
            'doctor_list' => $doctor_list,
        ]);

        
    }


    public function doctorDetails($id)
    {
        return Doctor::find($id);
    }



    public function singleData(Request $request)
    {
        // $doctor_list = Doctor::all();
        $doctor_list =  Doctor::where('id', $request->id)->get();

        return DoctorResourceController::collection($doctor_list);

        return response([
            'doctor_list' => new DoctorResourceController($doctor_list),
        ]);

        // return 'doctor_list' => doctor_list;
            
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
