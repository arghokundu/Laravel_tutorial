<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;
use App\Models\Company_dtl_address;
use App\Models\Employee_Address;
use App\Models\Employee_Bank;
use App\Models\Employee_Company;
use App\Models\Employee_Dtl;
use App\Models\Employee_hair;

class UserApiController extends Controller
{
    // ===========================================
    //                      fetch api users
    // ============================================
    public function getUserApiFetch()
    {
        // 1. Call API
        $getApiData=Http::get('https://dummyjson.com/users');

        //2.check api data fetch success or not
        if($getApiData->successful())
        {
            // 3. Get API data
            $users = $getApiData->json();
            return $users;
        }
        else
        {
            return "no record found";
        }
    }
    // ======================================================
    //                      store api users data
    // ======================================================
    public function storeUserApiData()
    {
        // -------------function calll---------------
        $usersDataApi=$this->getUserApiFetch();

        // -------check users api empty or not-----
        if (empty($usersDataApi)) 
        {
            return response()->json([
                'status' => false,
                'message' => 'No users found'
            ], 404);
        }
        /*
        |--------------------------------------------------------------------------
        | Arrays for bulk insertion
        |--------------------------------------------------------------------------
        */
        $employeeData = [];
        $hairData = [];
        $addressData = [];
        $bankData = [];
        $companyData = [];
        $companyAddressData = [];

        // --------------------------transaction start here-----------
        DB::beginTransaction();
        try
        {
            // ------------------employee hair----------
            $emp_Hair=new Employee_hair();
            foreach($usersDataApi as $empHair)
            {
                $hairData[]=[
                    // ---here hair is nested so first access hair then type or color
                    $emp_Hair->color=$empHair['hair']['color'] ?? '0',  
                    $emp_Hair->type=$empHair['hair']['type'] ?? '0',
                    $emp_Hair->created_at=now(),
                    $emp_Hair->updated_at=now(),
                    
                ];
            }
            // -----------------employee address--------
            $emp_Address=new Employee_Address();
            foreach($usersDataApi as $empAddress)
            {
                $addressData[]=[
                    $emp_Address->address=$empAddress['address']['address'] ?? '0',
                    $emp_Address->city=$empAddress['address']['city'] ?? '0',
                    $emp_Address->state=$empAddress['address']['state'] ?? '0',
                    $emp_Address->stateCode=$empAddress['address']['stateCode'] ?? '0',
                    $emp_Address->postalCode=$empAddress['address']['postalCode'] ?? '0',
                    $emp_Address->country=$empAddress['address']['country'] ?? '0',
                    $emp_Address->created_at=now(),
                    $emp_Address->updated_at=now(),
                ];
            }
            // ------------------employee bank------------
            $emp_Bank=new Employee_Bank();
            foreach($usersDataApi as $empBank)
            {
                $bankData[]=[
                    $emp_Bank->cardExpire=$empBank['bank']['cardExpire'] ?? '0',
                    $emp_Bank->cardNumber=$empBank['bank']['cardNumber'] ?? '0',
                    $emp_Bank->cardType=$empBank['bank']['cardType'] ?? '0',
                    $emp_Bank->currency=$empBank['bank']['currency'] ?? '0',
                    $emp_Bank->created_at=now(),
                    $emp_Bank->updated_at=now(),
                ];
            }
            // ------------------company dtl address---------
            $company_Address=new Company_dtl_address();
            foreach($usersDataApi as $CompanyAddress)
            {
                $companyAddressData[]=[
                    $company_Address->address=$CompanyAddress['company']['address']['address'] ?? '0',
                    $company_Address->city=$CompanyAddress['company']['address']['city'] ?? '0',
                    $company_Address->state=$CompanyAddress['company']['address']['state'] ?? '0',
                    $company_Address->stateCode=$CompanyAddress['company']['address']['stateCode'] ?? '0',
                    $company_Address->postalCode=$CompanyAddress['company']['address']['postalCode'] ?? '0',
                    $company_Address->country=$CompanyAddress['company']['address']['country'] ?? '0',
                    $company_Address->created_at=now(),
                    $company_Address->updated_at=now(),
                ];
            }
            // -------------------employee company----------
            $emp_Company=new Employee_Company();
            foreach($usersDataApi as $empCompany)
            {
                $companyData[]=[
                    $emp_Company->department=$empCompany['company']['department'] ?? '0',
                    $emp_Company->name=$empCompany['company']['name'] ?? '0',
                    $emp_Company->title=$empCompany['company']['title'] ?? '0',
                    $emp_Company->company_address_fk=$empCompany[$companyAddressData['company_address_pk']] ?? '0',
                    $emp_Company->created_at=now(),
                    $emp_Company->updated_at=now(),
                ];
            }
            // -----------------employee_details table data store----------------
            $emp_Dtl=new Employee_Dtl();
            foreach($usersDataApi as $userData)
            {
                $employeeData[]=[
                    $emp_Dtl->firstName=>$userData['firstName'] ?? '0',
                    $emp_Dtl->maidenName=>$userData['maidenName'] ?? '0',
                    $emp_Dtl->lastName=>$userData['lastName'] ?? '0',
                    $emp_Dtl->age=>$userData['age'] ?? '0',
                    $emp_Dtl->gender=>$userData['gender'] ?? '0',
                    $emp_Dtl->email=>$userData['email'] ?? '0',
                    $emp_Dtl->phone=>$userData['phone'] ?? '0',
                    $emp_Dtl->username=>$userData['username'] ?? '0',
                    $emp_Dtl->birthday=>$userData['birthDate'] ?? '0',
                    $emp_Dtl->bloodGroup=>$userData['bloodGroup'] ?? '0',
                    $emp_Dtl->height=>$userData['height'] ?? '0',
                    $emp_Dtl->weight=>$userData['weight'] ?? '0',
                    $emp_Dtl->eyeColor=>$userData['eyeColor'] ?? '0',
                    $emp_Dtl->university=>$userData['university'] ?? '0',
                    $emp_Dtl->emp_hair_id_fk=>$userData[$hairData['emp_hair_id_pk']] ?? '0',
                    $emp_Dtl->emp_address_id_fk=>$userData[$addressData['emp_address_id_pk']] ?? '0',
                    $emp_Dtl->emp_bank_id_fk=>$userData[$bankData['emp_bank_id_pk']] ?? '0',
                    $emp_Dtl->company_id_fk=>$userData[$companyData['company_id_pk']] ?? '0',
                    $emp_Dtl->created_at=>now() ?? '0',
                    $emp_Dtl->updated_at=>now() ?? '0',
                ];
            }
            if($employeeData && $hairData && $addressData && $bankData && $companyData  && $companyAddressData )
            {
                DB::commit();
                return back()->with('success','Store data successfully');
            }
            else
            {
                return back()->with('error','Not store data');
            }
        }
        catch(\Exception $e)
        {
            DB::rollback();
            dd("Store error",$e->getMessage());
        }
    }
}
