<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;

class UserController extends Controller
{
    //show hospital data admin panel
    public function showallhos(){
        $hospital_role = '1';
        $hosdata = User::where('Role',$hospital_role)->get();
        return view('mainadminviews.availablehosdata',compact('hosdata'));

    }

    //delete hospital admin panel
    public function destroyhos($id){
        $delhos = User::find($id);
        $delhos->delete();
        return redirect()->back()->with('success','Hospital deleted succesfully');
    }

    //edit hospitals admin dashboard
    public function edithos($id){
        $edithos = User::find($id);
        return view('mainadminviews.edithos',compact('edithos'));
    }


    //update hospital admin dashboard
    public function updatethos(Request $req,$id){
        $hospitals = User::find($id);
        $hospitals->name = $req->hosname;
        $hospitals->email = $req->hosemail;
        $hospitals->save();
        return redirect()->back()->with('success','Hospital Updated');

    }

    //SHOW ALL HOSPITALS AVAILABLE TO USER FOR APPOINMENTS
    public function showallhosappoinment(){
        $hospital_role = '1';
        $hosdata = User::where('Role',$hospital_role)->get();
        return view('appoinmenthosdata',compact('hosdata'));

    }


}
