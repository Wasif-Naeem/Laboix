<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\userappoinmentreport;
use App\Http\Controllers\UserAppoinmentReportController;

class UserAppoinmentReportController extends Controller
{
    //add new report from hospital panel
    public function newreport(Request $req){
        $newreport = new userappoinmentreport();
        $newreport->appoinment_id = $req->appionmentnum;
        $newreport->user_id = $req->parentid;
        $newreport->hospital_id = $req->hosid;
        $newreport->vaccine_id = $req->vaccid;
        $newreport->user_name = $req->parentname;
        $newreport->hospital_name = $req->hosname;
        $newreport->hospital_Email = $req->hosemail;
        $newreport->parent_email = $req->parentemail;
        $newreport->child_name = $req->childname;
         $newreport->child_dob = $req->childdob;
         $newreport->Vaccine_name = $req->vaccname;
         $newreport->Vaccination_Status = $req->vaccstatus;
         $newreport->report_date = date('d-m-y');
         $newreport->report_time = date('H:i');

         $newreport->save();
         return redirect()->back();


    }


    //show reports on user dashboard
    public function showreposrtuser($id){
        $appoinmentreports =  userappoinmentreport::where('user_id',$id)->get();
        return view('chidreports',compact('appoinmentreports'));
    }

    //show reports on hospital dashboard
    public function showreposrtuserhospital($id){
        $appoinmentreports =  userappoinmentreport::where('hospital_id',$id)->get();
        return view('hospitaladminviews.allreportsdatahos',compact('appoinmentreports'));
    }

    //show report details on user dashboard
    public function showreportuserfull($id){
        $details = userappoinmentreport::find($id);
        return view('reportdetail',compact('details'));
    }

    //show report details on hospital dashboard
    public function showreporthosfull($id){
        $details = userappoinmentreport::find($id);
        return view('hospitaladminviews.reposrtdetailhosdata',compact('details'));
    }

    //show reports on admin dashboard
    public function allreportsadmin(){
        $appoinmentreports = userappoinmentreport::all();
        return view('mainadminviews.allreposrtslist',compact('appoinmentreports'));
    }

    //detail reports on admin dashboard
    public function allreportsadmindetail($id){
        $details = userappoinmentreport::find($id);
        return view('mainadminviews.reportsdetailsadmin',compact('details'));
    }
}
