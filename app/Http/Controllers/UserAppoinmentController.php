<?php

namespace App\Http\Controllers;

use App\Models\addvaccine;
use Illuminate\Http\Request;
use App\Models\userappoinment;
use Illuminate\Support\Facades\Auth;

class UserAppoinmentController extends Controller
{
    //save new appoinment 
    public function newappoinment(Request $req){

        $vaccdata = addvaccine::where('id',$req->vacc_id)->first();

        $appoinment = new userappoinment();

        $appoinment->User_id = Auth::user()->id;
        $appoinment->User_name = Auth::user()->name;
        $appoinment->User_email = Auth::user()->email;
        $appoinment->hospital_id = $vaccdata->hospital_id;
        $appoinment->hospital_name = $vaccdata->hospital_name;
        $appoinment->hospital_email = $vaccdata->hospital_email;
        $appoinment->vaccine_name = $vaccdata->vaccine_name;
        $appoinment->vaccine_id = $vaccdata->id;
        $appoinment->parent_email = $req->parentemail;
        $appoinment->child_dob = $req->childob;
        $appoinment->child_name = $req->childname;
        $appoinment->save();
        return redirect()->back()->with('success','Appoinment Request Sent...');


        
    }



    //show all appoinment req on the admin dashboard
    public function showallappoinment(){
        $adminstatus = 'Not Approved';
        $appoinments = userappoinment::where('admin_approval',$adminstatus)->get();
        return view('mainadminviews.allappoinments',compact('appoinments'));
    }

    //approve appoinment req admin dashboard
    public function approveappoinment($id){
        $approve = userappoinment::find($id);
        $approve->admin_approval = 'Approved';
        $approve->save();
        return redirect()->back()->with('success','Request Approved Succesfully');
    }

    //show all appoinment req on hospital dashboard
    public function showhosappoinment($id){
        $admin_approval = 'Approved';
        $appoinments = userappoinment::where('admin_approval',$admin_approval)->where('hospital_id',$id)->get();
        return view('hospitaladminviews.appoinmentreq',compact('appoinments'));
    }

    //approve appoinment req  on hospital dashboard
    public function hosapproveappoinment($id){
        $appoinment = userappoinment::find($id);
        $appoinment->hospital_approval = 'Approved';
        $appoinment->save();
        return redirect()->back()->with('success','Request Approved Succesfully');
    }

    //appoinment report update
    public function appoinmentreport($id){
        $appoinmentreport = userappoinment::find($id);
        return view('hospitaladminviews.reportupdate',compact('appoinmentreport'));
    }
}
