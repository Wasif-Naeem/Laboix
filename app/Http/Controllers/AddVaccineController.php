<?php

namespace App\Http\Controllers;

use App\Models\addvaccine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AddVaccineController extends Controller
{
    //add new vaccines from hospital dashboard
    public function createvaccine(Request $req){
        $vaccines = new addvaccine();
        $vaccines->hospital_id = Auth::user()->id;
        $vaccines->hospital_name = Auth::user()->name;
        $vaccines->hospital_email = Auth::user()->email;
        $vaccines->vaccine_name = $req->vaccinename;
        $vaccines->vaccine_status = $req->vaccinestatus;
        $vaccines->save();
        return redirect()->back()->with('success', 'Vaccine Added Successfully');
    }
    //show vaccines on hospital dashboard
    public function show($id){
        $vaccines = addvaccine::where('hospital_id',$id)->get();
        return view('hospitaladminviews.showvaccinehos',compact('vaccines'));
    }

    //delete vaccines on hospital dashboard
    public function destroy($id){
        $vaccines = addvaccine::find($id);
        $vaccines->delete();
        return redirect()->back();
    }
    //edit vaccines on hospital dashboard 

    public function edit($id){
        $vaccines = addvaccine::find($id);
        return view('hospitaladminviews.editvaccinehos',compact('vaccines'));
    }

    //update product on hospital dashboard

    public function update(Request $req,$id){
        $editvaccines = addvaccine::find($id);
        $editvaccines->vaccine_name = $req->vaccinename;
        $editvaccines->vaccine_status = $req->vaccinestatus;
        $editvaccines->save();
        return redirect()->back()->with('success','Vaccine Updated Successfully');
    }

    //show all vaccines data admin dashboard
    public function showallvac(){
        $allvaccines = addvaccine::all();
        return view('mainadminviews.avalablevaccdata',compact('allvaccines'));
    }


    //show vaccine data for hospitals for user appoinment
    public function Userbookappoinments($id){
        $vaccinestatuses = 'Available';
        $hospitalvaccine = addvaccine::where('hospital_id',$id)->where('vaccine_status',$vaccinestatuses)->get();
        return view('userappoinmenthos',compact('hospitalvaccine'));
    }

}

