<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\HomePage;
use App\Models\Appointment;
use App\Models\DiagnosisTest;
use App\Models\DiagnosisTestOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function addDoctorView()
    {
        return view('admin.add_doctor');
    }

    public function uploadDoctor(Request $request)
    {

        // return $request->all();

        $doctor = new Doctor();

        $image = $request->file;
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $request->file->move('doctor_image', $imageName);
        $doctor->image = $imageName;

        $doctor->name = $request->name;
        $doctor->phone = $request->phone;
        $doctor->speciality = $request->speciality;
        $doctor->bmdc_no = $request->bmdc_no;
        $doctor->degree = $request->degree;
        $doctor->fee = $request->fee;
        $doctor->experience = $request->experience;
        $doctor->hospital = $request->hospital;
        $doctor->room = $request->room;
        // $doctor->available_days = implode(",",$request->available_days);;
        $doctor->available_days = $request->available_days;
    

        // $input = $request->all();
        // $input['category'] = $request->input('category');
       

        $doctor->save();
        
        return redirect()->back()->with('message', 'Doctor added successfully');
    }


    

    public function addTestName(Request $request)
    {
        // return $request->all();

        $data = new DiagnosisTest();

        $data->hospital_name = $request->hospital_name;
        $data->test_name = $request->test_name;
        $data->test_price = $request->test_price;
       
        $data->save();
        
        return redirect()->back()->with('message', 'Diagnosis test added successfully');
    }

    public function showAllTest()
    {
        $data = DiagnosisTest::all();

        return view('admin.home_pathology.show_test', compact('data'));
    }



    public function deleteTest($id)
    {
        $data = DiagnosisTest::find($id);
        $data->delete();

        return redirect()->back();
    }


        
    public function showPatientOrder()
    {
        $data = DiagnosisTestOrder::all();

        return view('admin.home_pathology.show_patient_order', compact('data'));
    }

    



    public function updateTest($id)
    {
        $data = DiagnosisTest::find($id);

        return view('admin.home_pathology.update_test', compact('data'));
    }



    public function editTest(Request $request, $id)
    {
        $test = DiagnosisTest::find($id);

        $test->hospital_name = $request->hospital_name;
        $test->test_name = $request->test_name;
        $test->test_price = $request->test_price;

        $test->save();
        return redirect()->back()->with('message', 'Test updated successfully');
    }






    public function showAppointments()
    {

        $data = Appointment::all();

        return view('admin.show_appointment', compact('data'));
    }


    public function approveAppointment($id)
    {
        $data = Appointment::find($id);
        $data->status = 'Approved';
        $data->save();

        return redirect()->back();
    }




    public function cancelAppointment_a($id)
    {
        $data = Appointment::find($id);
        $data->status = 'Canceled';
        $data->save();

        return redirect()->back();
    }


    public function showDoctor()
    {
        $data = Doctor::all();

        return view('admin.show_doctor', compact('data'));
    }


    public function deleteDoctor($id)
    {
        $data = Doctor::find($id);
        $data->delete();

        return redirect()->back();
    }

    public function updateDoctor($id)
    {
        $data = Doctor::find($id);

        return view('admin.update_doctor', compact('data'));
    }



    public function editDoctor(Request $request, $id)
    {
        $doctor = Doctor::find($id);

        $doctor->name = $request->name;
        $doctor->phone = $request->phone;
        $doctor->speciality = $request->speciality;
        $doctor->room = $request->room;


        $image = $request->file;

        if($image){
            
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $request->file->move('doctor_image', $imageName);
            $doctor->image = $imageName;

        }
       
        $doctor->save();
        return redirect()->back()->with('message', 'Doctor updated successfully');
    }




    public function showshowHospitalClinic()
    {
        $data = Doctor::whereNotNull('hospital')->get();

        
        // $data = DB::table('doctors')->where('name', 'John')->first();

        return view('admin.show_hospital_clinic', compact('data'));
    }




    public function appHomePageView()
    {
        $data = HomePage::get()->first();

        return view('admin.update_app_home', compact('data'));
    
    }



    public function showTestName()
    {

        return view('admin.home_pathology.add_test_name');
    
    }



    
    public function appHomePage(Request $request, $id)
    {
        
        $top_slider = HomePage::find($id);
        $top_slider->top_scroll_text = $request->top_scroll_text;
        $top_slider->top_scroll_text2 = $request->top_scroll_text2;
        $top_slider->top_scroll_text3 = $request->top_scroll_text3;
        $top_slider->top_scroll_text4 = $request->top_scroll_text4;
        $top_slider->top_scroll_text5 = $request->top_scroll_text5;
        // $top_slider->sub_title = $request->sub_title;

        // dd($request->file('bg_image'));

        $image = $request->file('file_image1');
        if ($request->file('file_image1')) {

            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $request->file('file_image1')->move('home_slider_image', $imageName);
            $top_slider->top_slider_img1 = $imageName;
        

        }

        
        $image2 = $request->file('file_image2');
        if ($request->file('file_image2')) {

            $imageName2 = time() . '.' . $image2->getClientOriginalExtension();
            $request->file('file_image2')->move('home_slider_image', $imageName2);
            $top_slider->top_slider_img2 = $imageName2;
        

        }

        $image3 = $request->file('file_image3');
        if ($request->file('file_image3')) {

            $imageName3 = time() . '.' . $image3->getClientOriginalExtension();
            $request->file('file_image3')->move('home_slider_image', $imageName3);
            $top_slider->top_slider_img3 = $imageName3;
        

        }


        $resume = $request->file('resume');
        if ($request->file('resume')) {
            $resumeName = time() . '.' . $resume->getClientOriginalExtension();
            $request->file('bg_image')->move('assets/resumes', $resumeName);
            $top_slider->resume = $resumeName;
        }

        $top_slider->save();

        // return response([
        //     'status' => "success",
        //     'message' => "Update file and text successfully",
        // ]);
        

        return redirect()->back()->with('message', 'App Home updated successfully');

    }








}
