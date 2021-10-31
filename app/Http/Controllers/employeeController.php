<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
class employeeController extends Controller

{
    public function addEmployee()
    {
      return view('postEmployee');
    }
  public function saveEmployee(Request $request)

    {
      if($request->hasfile('profile_Photo'))
     {
      $file = $request->file('profile_Photo'); 
      $extention = $file->getClientOriginalExtension();
      $filename = time().'.' .$extention;
      $file->move('storage/application/',$filename);
      $employee->profile_Photo =$filename;

     }
     DB::table('employees')->insert([
      'fName'=>$request->fName,
      'lName'=>$request->lName,
      'company'=>$request->company,
      'phone'=>$request->phone,
      'email'=>$request->email,
      'profile_Photo'=>$request->profile_Photo
     ]);
     

     return redirect()->back()->with('status','Add Details Successfully');
    }
    public function view()
    {  $employees = DB::table('employees')->get();
      return view('viewEmployee',compact('employees'));
   
    }

    
    public function viewEmployee($id)
    {
       $employee = DB::table('employees')->where('id', $id)->first();
      return view('viewEmployee',compact('employee'));
    }


  public function editEmployee($id) 
  {
    $employee = DB::table('employees')->where('id', $id)->first();
    return view('editEmployee',compact('employee'));
  }
  public function updateEmployee(Request $request)

    {
      DB::table('employees')->where('id',$request->id)->update([
        'fName'=>$request->fName,
        'lName'=>$request->lName,
        'company'=>$request->company,
        'phone'=>$request->phone,
        'email'=>$request->email,
        'profile_Photo'=>$request->profile_Photo
        
       ]);
       return back()->with('editEmployee','Details Updated Successfuly');
  }
    public function deleteEmployee($id)
  {
    DB::table('employees')->where('id', $id)->delete();
    return back()->with('editEmployee','Details deleted Successfuly');
  }
  
}



