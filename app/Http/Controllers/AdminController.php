<?php

namespace App\Http\Controllers;

use App\Models\Ambulance;
use App\Models\Appointment;
use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\EmployeeUser;
use App\Models\User;
use App\Models\Testlist;
use App\Models\Consult;


class AdminController extends Controller
{
    public function adduser()
    {
        return view('admin.add_user');
    }

    public function showusers()
    {
        $data=user::all();
        return view('admin.userlist', compact('data'));
    }

    public function deleteuser($id)
    {
        $data=user::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function uploademployee(Request $request)
    {
        $employee=new employeeUser;
        $image=$request->file;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->file->move('employeeimage',$imagename);
        $employee->image=$imagename;
        $employee->name=$request->name;
        $employee->phone=$request->number;
        $employee->position=$request->position;
        $employee->floor=$request->floor;
        $employee->shift=$request->shift;

        $employee->save();
        return redirect()->back();
    
    }

    public function showemployee()
    {
        $data=EmployeeUser::all();
        return view('admin.showemployee',compact('data'));
    }

    public function deleteemployee($id)
    {
        $data=EmployeeUser::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function updateemployee($id)
    {
        $data=EmployeeUser::find($id);
        return view('admin.update_employee',compact('data'));
    }

    public function editemployee(Request $request, $id)
    {
       $employee=EmployeeUser::find($id);
       $employee->name=$request->name;
       $employee->phone=$request->phone;
       $employee->position=$request->position;
       $employee->floor=$request->floor;
       $employee->shift=$request->shift;
       $image=$request->file;
       if($image)
       {
       $imagename=time().'.'.$image->getClientOriginalExtension();
       $request->file->move('employeeimage',$imagename);
       $employee->image=$imagename;
       }
   
       $employee->save();
       return redirect()->back();
   
   
    }
   
    public function addview()
    {
        return view('admin.add_doctor');
    }

    public function upload(Request $request)
    {

        $doctor = new doctor;
        $image = $request->file;
        $imagename = time() . '.' . $image->getClientoriginalExtension();
        $request->file->move('doctorimage', $imagename);
        $doctor->image = $imagename;

        $doctor->name = $request->name;
        $doctor->phone = $request->number;
        $doctor->room = $request->room;
        $doctor->speciality = $request->speciality;

        $doctor->save();
        return redirect()->back();
    }

    public function showappointment()
    {
        $data=appointment::all();
       return view('admin.showappointment',compact('data'));
    
    }


public function showambulance()
{
    $data=ambulance::all();
   return view('admin.showambulance',compact('data'));

}

public function approveBook($id)
{
$data=ambulance::find($id);
$data ->status='approveBook';
$data->save();
return redirect()->back();
}

public function cancelBook($id)
{
$data=ambulance::find($id);
$data ->status='cancelBook';
$data->save();
return redirect()->back();
}

public function approved($id)
{
$data=appointment::find($id);
$data ->status='approved';
$data->save();
return redirect()->back();
}

public function cancelled($id)
{
$data=appointment::find($id);
$data ->status='cancelled';
$data->save();
return redirect()->back();
}

public function showdoctor()
{
   $data=doctor::all();
    return view('admin.showdoctor',compact('data'));
}

 public function deletedoctor($id)
 {
    $data=doctor::find($id);
    $data->delete();
    return redirect()->back();

 }
 public function updatedoctor($id)
 {
    $data=doctor::find($id);
    // $data->update();
    // return redirect()->back();
    return view('admin.update_doctor',compact('data'));

 }

 public function editdoctor(Request $request, $id)
 {
    $doctor=doctor::find($id);
    $doctor->name=$request->name;
    $doctor->phone=$request->phone;
    $doctor->speciality=$request->speciality;
    $doctor->room=$request->room;
    $image=$request->file;
    if($image)
    {
    $imagename=time().'.'.$image->getClientOriginalExtension();
    $request->file->move('doctorimage',$imagename);
    $doctor->image=$imagename;
    }

    $doctor->save();
    return redirect()->back();


 }
//  public function addtest(Request $request)
// {
//    $test=new test;
//    $test->cost=$request->cost;
//    $test->room=$request->room;
//    $test->date=$request->date;
//    $test->shift=$request->shift;
//    $test->save();
//    return redirect()->back();

// }

public function showtest()
{
   $data=doctor::all();
    return view('admin.showtest',compact('data'));
}

public function addtest()
{
    return view('admin.add_test');
}

public function uploadconsult(Request $request)
{
$consultlist=new Consult;
$consultlist->test=$request->test;
$consultlist->details=$request->details;
$consultlist->discount=$request->discount;
$consultlist->docname=$request->docname;
$consultlist->starttime=$request->starttime;
$consultlist->endtime=$request->endtime;
$consultlist->emergency=$request->emergency;

$consultlist->save();
return redirect()->back();
}


public function uploadtest(Request $request)
{
$testlist=new Testlist;
$testlist->test=$request->test;
$testlist->cost=$request->cost;
$testlist->room=$request->room;
$testlist->date=$request->date;
$testlist->slot=$request->slot;

$testlist->save();
return redirect()->back();
}

public function search(Request $request)
{
$search=$request->search;
$data=EmployeeUser::where('name','Like','%'.$search.'%')->orwhere('position','Like','%'.$search.'%')->get();
return view('admin.showemployee', compact('data'));
}

public function searchdoc(Request $request)
{
$search=$request->searchname;
$data=Doctor::where('name','Like','%'.$search.'%')->orwhere('speciality','Like','%'.$search.'%')->get();
return view('admin.showdoctor', compact('data'));
}

public function addconsult()
{
    return view('admin.add_consult');
}


// public function test()
//     {
//         $data=test::all();
//        return view('user.test',compact('data'));
    
//     }

}
