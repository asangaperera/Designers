<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class companyController extends Controller
{
    public function addCompany()
    {
      return view('postCompany');
    }
  public function saveCompany(Request $request)

    {
     DB::table('companies')->insert([
         'Name'=>$request->Name,
         'email'=>$request->email,
         'telephone'=>$request->telephone,
         'logo'=>$request->logo,
         'coverImage'=>$request->coverImage,
         'website'=>$request->website,
         'otherInfo'=>$request->otherInfo

     ]);
     return back()->with('postCompany','Add Details Successfully');
    }
    public function view()
    {  $companies = DB::table('companies')->get();
      return view('viewCompany',compact('companies'));
   
    }

    
    public function viewvCompany($c_id)
    {
       $companie = DB::table('companies')->where('c_id', $c_id)->first();
      return view('viewCompany',compact('companie'));
    }


  public function editCompany($c_id) 
  {
    $companie = DB::table('companies')->where('c_id', $c_id)->first();
    return view('editCompany',compact('companie'));
  }
  public function updateCompany(Request $request)

    {
      DB::table('companies')->where('c_id',$request->c_id)->update([
         'Name'=>$request->Name,
         'email'=>$request->email,
         'telephone'=>$request->telephone,
         'logo'=>$request->logo,
         'coverImage'=>$request->coverImage,
         'website'=>$request->website,
         'otherInfo'=>$request->otherInfo 
       ]);
       return back()->with('editCompany','Details Updated Successfuly');
  }
    public function deleteCompany($c_id)
  {
    DB::table('companies')->where('c_id', $c_id)->delete();
    return back()->with('editCompany','Details deleted Successfuly');
  }
  
}



