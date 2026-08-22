<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\State;
use App\Models\Student_Curd;
use App\Models\Subdivision;
use App\Models\District;
use App\Http\Requests\CrudRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;

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
        DB::beginTransaction();
        try
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
            DB::commit();
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
        catch(\Exception $e)
        {
            DB::rollback();
            return redirect()->back()
                ->with('error', $e->getMessage());
        }
    }
    // =================================show data in list===================
    public function ShowAllStdList(Request $r)
    {
        $studentsDetails=Student_Curd::select('student_id_pk','Name','Email','Address','pin',
            'phoneNo','state_id_fk','district_id_fk','subdiv_id_fk');
            // filled is use for if search field then call
            if($r->filled('search'))
            {
                $studentsDetails=Student_Curd::where('Name','ilike','%'.$r->search.'%');
            }
            $studentsDetails=$studentsDetails->paginate(4)->withQueryString();;
        return view('CRUD.ShowAllStdDetailsList',compact('studentsDetails'));
    }
    // ====================================edit data===========================
    public function EditData($studentId)
    {
        $studentcrud=Student_Curd::select('student_id_pk','Name','Email','Address','pin','phoneNo','state_id_fk',
            'district_id_fk','subdiv_id_fk')->findOrFail($studentId);
        $state=State::select('state_id_pk','state_name')->get();
        $district=District::select('district_id_pk','state_id_fk','district_name')->get();
        $subdivision=Subdivision::select('subdiv_id_pk','subdiv_name')->get();

        return view('CRUD.editStdDetailsForm',compact('studentcrud','state','district','subdivision'));
    }
    // ==================================update Data=========================
    public function updateData(CrudRequest $crudreq,$studentId)
    {
        //  dd($studentId);
        DB::beginTransaction();
        try
        {
            $studentgetId=Student_Curd::findOrFail($studentId);
            $studentgetId->Name=$crudreq->fullname;
            $studentgetId->Email=$crudreq->email;
            $studentgetId->Address=$crudreq->address;
            $studentgetId->pin=$crudreq->pin;
            $studentgetId->phoneNo=$crudreq->phoneno;
            $studentgetId->state_id_fk=$crudreq->state;
            $studentgetId->district_id_fk=$crudreq->district;
            $studentgetId->subdiv_id_fk=$crudreq->subdivision;
            $updateStudentDataSave=$studentgetId->save();
            DB::commit();
            if($updateStudentDataSave)
            {
                return redirect('/showAllStudentList')->with('success','update successfully');
            }
            else
            {
                return "Update Error";
            }
        }
        catch(\Exception $e)
        {
            DB::rollback();
            dd("update error",$e->getMessage());
        }
    }
    // =======================view specific data==============
    public function specificData($studentId)
    {
        $specificDataStd=Student_Curd::with('state','district','subdivision')
            ->select('student_id_pk','Name','Email','Address','pin','phoneNo','state_id_fk',
            'district_id_fk','subdiv_id_fk')->findOrFail($studentId);
        return view('CRUD.viewSpecificDtl',compact('specificDataStd'));
    }
}