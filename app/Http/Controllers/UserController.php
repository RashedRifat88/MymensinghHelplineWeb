<?php

namespace App\Http\Controllers;

use App\Http\Resources\DoctorResourceController;
use App\Models\Doctor;
use App\Models\Appointment;
use App\Models\DiagnosisTest;
use App\Models\HomePage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{


    public function register(Request $request)
    {
        // $request->validate([
        //     'name' => 'required',
        //     'email' => 'required|email',
        //     'password' => 'required|confirmed',
        // ]);
       
        $request->validate([
            'name' => 'required',
            'password' => 'required',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'device_name' => $request->device_name,
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
        // return $request;
        $request->validate([
            'email_or_phone' => 'required',
            'password' => 'required',
        ]);


        // $user = User::where('email', $request->email)->first();
        $user = User::where('email', $request->email_or_phone)
                    ->orWhere('phone', $request->email_or_phone)
                    ->first();

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


    public function showHospitalClinic($hospital)
    {
        // $data = Doctor::whereNotNull('hospital')->get();
        $data = Doctor::whereNotNull('hospital')->orWhere('hospital', '=', $hospital)->get();

        return response([
            'hospital_list' => $data,
        ]);
    }




    public function showHospitals()
    {
        // $data = Doctor::whereNotNull('hospital')->get();
        $data = Doctor::select('hospital')->distinct()->whereNotNull('hospital')->get();

        return response([
            'hospital_list' => $data,
        ]);
    }

    public function showDoctorByHospital($hospital_name)
    {

        // $doctor_list = Doctor::find($hospital_name);
        // $doctor_list = Doctor::where('hospital', $hospital_name)->get();

        $doctor_list =  DB::table('doctors')
                ->where('hospital', '=', $hospital_name)
                ->get();

        return response([
            'doctor_list' => $doctor_list,
        ]);
    }


    public function showAppointmentHistory(Request $request)
    {
        // $request->validate([
        //     'phone' => 'required|email',
        // ]);


        $appointments = Appointment::where('phone', $request->phone)->get();

        return response([
            'status' => "success",
            'appointment_response' => $appointments,
        ], 200);
        
    }

    
    public function showAppHomePage(Request $request)
    {
        // $request->validate([
        //     'phone' => 'required|email',
        // ]);

        $data = HomePage::get()->first();

        return response([
            'status' => "success",
            'data_response' => $data,
        ], 200);
        
    }





    public function appointmentByApp(Request $request)
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

        return response([
            'message' => "Appointment Successful. We will contact with you soon.",
            'status' => "success",
            'appointment_response' => $data,
        ]);
        // return redirect()->back()->with('message', 'Appointment Successful. We will contact with you soon.');
    }



    // public function appHomePage(Request $request)
    // {
        
    //     $top_slider = HomePage::first();
    //     $top_slider->title = $request->title;
    //     $top_slider->sub_title = $request->sub_title;

    //     // dd($request->file('bg_image'));

    //     $image = $request->file('file_image1');
    //     if ($request->file('file_image1')) {

    //         $imageName = time() . '.' . $image->getClientOriginalExtension();
    //         $request->file('file_image1')->move('assets/images/top_part', $imageName);
    //         $top_slider->file_image1 = $imageName;
        

    //     }

        
    //     $image2 = $request->file('file_image2');
    //     if ($request->file('file_image2')) {

    //         $imageName = time() . '.' . $image2->getClientOriginalExtension();
    //         $request->file('file_image2')->move('assets/images/top_part', $imageName);
    //         $top_slider->file_image2 = $imageName;
        

    //     }

    //     $image3 = $request->file('file_image3');
    //     if ($request->file('file_image3')) {

    //         $imageName = time() . '.' . $image3->getClientOriginalExtension();
    //         $request->file('file_image3')->move('assets/images/top_part', $imageName);
    //         $top_slider->file_image3 = $imageName;
        

    //     }


    //     $resume = $request->file('resume');
    //     if ($request->file('resume')) {
    //         $resumeName = time() . '.' . $resume->getClientOriginalExtension();
    //         $request->file('bg_image')->move('assets/resumes', $resumeName);
    //         $top_slider->resume = $resumeName;
    //     }

    //     $top_slider->save();

    //     return response([
    //         'status' => "success",
    //         'message' => "Update file and text successfully",
    //     ]);
        

    // }




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




    public function allTest()
    {
    
        $test_list =  DiagnosisTest::get();


        return response([
            'test_list' => $test_list,
        ]);
    }



}
