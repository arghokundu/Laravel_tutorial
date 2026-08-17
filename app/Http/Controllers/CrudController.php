<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\State;
use App\Models\Student_Curd;
use App\Models\Subdivision;
use App\Models\District;
use App\Http\Requests\CrudRequest;

class CrudController extends Controller
{
    // ===========================================
    //              CRUD OPERATION
    // ============================================

    // =====================================show form==========================
    public function ShowFormStd()
    {
        $state=State::select('state_id_pk','state_name')->get();
        $district=District::select('district_id_pk','state_id_fk','district_name')->get();
        $subdivision=Subdivision::select('subdiv_id_pk','subdiv_name')->get();
        return view('CRUD.addStdDetailsForm',compact('state','district','subdivision'));
    }
    // ================================store data in db===========================
    public function storeData(CrudRequest $crudreq)
    {
        $studentcrud=new Student_Curd();
        
        $studentcrud->Name=$crudreq->fullname;
        $studentcrud->Email=$crudreq->email;
        $studentcrud->Address=$crudreq->address;
        $studentcrud->pin=$crudreq->pin;
        $studentcrud->phoneNo=$crudreq->phoneno;
        $studentcrud->state_id_fk=$crudreq->state;
        $studentcrud->district_id_fk=$crudreq->district;
        $studentcrud->subdiv_id_fk=$crudreq->subdivision;
        $studentcrud->created_at=now();
        
        $studentcrud=$studentcrud->save();
        if($studentcrud)
        {
            // return view('CRUD.ShowAllStdDetailsList');
            return redirect('/showAllStudentList');
            }        
        else
        {
            return redirect()->back();
        }
    }
    // =================================show data in list===================
    public function ShowAllStdList()
    {
        $studentsDetails=Student_Curd::select('student_id_pk','Name','Email','Address','pin',
            'phoneNo','state_id_fk','district_id_fk','subdiv_id_fk')->get();
        return view('CRUD.ShowAllStdDetailsList',compact('studentsDetails'));
    }
}