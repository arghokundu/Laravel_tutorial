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
        $usersDataApi=$usersDataApi['users'] ?? [];
        // -------check users api empty or not-----
        if (empty($usersDataApi)) 
        {
            return response()->json([
                'status' => false,
                'message' => 'No users found'
            ], 404);
        }
        // ========================================================
        // START TRANSACTION
        // ========================================================

        DB::beginTransaction();

        try 
        {
            // ==================================================
            // CHECK WHETHER USERS ALREADY EXIST
            // ==================================================
            $existingUsers = [];
            foreach ($usersDataApi as $user) 
            {
                $email = $user['email'] ?? null;
                if (!$email) 
                {
                    continue;
                }
                $exists = Employee_Dtl::where('email', $email)->exists();
                if ($exists) 
                {
                    $existingUsers[] = $email;
                }
            }
            // ==================================================
            // IF ANY USER ALREADY EXISTS
            // STOP EVERYTHING
            // ==================================================
            if (!empty($existingUsers)) 
            {
                DB::rollBack();
                return response()->json([
                    'status' => false,
                    'message' => 'Data already exists',
                    'existing_emails' => $existingUsers
                ], 409);
            }

            // ====================================================
            // ARRAYS FOR BULK INSERT
            // ====================================================

            $hairData = [];
            $addressData = [];
            $bankData = [];
            $companyAddressData = [];
            $companyData = [];
            $employeeData = [];
            // ====================================================
            // LOOP API USERS
            // ====================================================
            foreach ($usersDataApi as $user) {
                // =================================================
                // GET AUTO-INCREMENT IDS FROM POSTGRESQL SEQUENCES
                // =================================================
                
                // |--------------------------------------------------------------------------
                // | IMPORTANT
                // |--------------------------------------------------------------------------
                // |
                // | These IDs are NOT manually created.
                // |
                // | PostgreSQL generates them using the same sequence
                // | that your DEFAULT nextval() uses.
                // 
                // --------------------------------------------------------------------------
                //
                $hairIdPk = DB::selectOne("SELECT nextval('employee_hair_emp_hair_id_pk_seq') AS id")->id;

                $addressIdPk = DB::selectOne("SELECT nextval('employee_address_emp_address_id_pk_seq') AS id")->id;

                $bankIdPk = DB::selectOne("SELECT nextval('employee_bank_dtls_emp_bank_id_pk_seq') AS id")->id;

                $companyAddressIdPk = DB::selectOne("SELECT nextval('employee_company_dtl_address_company_address_pk_seq') AS id")->id;

                $companyIdPk = DB::selectOne("SELECT nextval('employee_company_dtl_company_id_pk_seq') AS id")->id;

                $employeeIdPk = DB::selectOne("SELECT nextval('employee_dtl_emp_id_pk_seq') AS id")->id;

                // =================================================
                // 1. EMPLOYEE HAIR
                // =================================================
                $hairData[] = [
                    'emp_hair_id_pk' => $hairIdPk,
                    'color' => $user['hair']['color'] ?? null,
                    'type' => $user['hair']['type'] ?? null,
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
                // =================================================
                // 2. EMPLOYEE ADDRESS
                // =================================================
                $addressData[] = [
                    'emp_address_id_pk' => $addressIdPk,
                    'address' =>$user['address']['address'] ?? null,
                    'city' =>$user['address']['city'] ?? null,
                    'state' =>$user['address']['state'] ?? null,
                    'stateCode' =>$user['address']['stateCode'] ?? null,
                    'postalCode' =>$user['address']['postalCode'] ?? null,
                    'country' =>$user['address']['country'] ?? null,
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
                // =================================================
                // 3. EMPLOYEE BANK
                // =================================================
                $bankData[] = [
                    'emp_bank_id_pk' => $bankIdPk,
                    'cardExpire' =>$user['bank']['cardExpire'] ?? null,
                    'cardNumber' =>$user['bank']['cardNumber'] ?? null,
                    'cardType' =>$user['bank']['cardType'] ?? null,
                    'currency' =>$user['bank']['currency'] ?? null,
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
                // =================================================
                // 4. COMPANY ADDRESS
                // =================================================
                $companyAddressData[] = [
                    'company_address_pk' => $companyAddressIdPk,
                    'address' =>$user['company']['address']['address'] ?? null,
                    'city' =>$user['company']['address']['city'] ?? null,
                    'state' =>$user['company']['address']['state'] ?? null,
                    'stateCode' =>$user['company']['address']['stateCode'] ?? null,
                    'postalCode' =>$user['company']['address']['postalCode'] ?? null,
                    'country' =>$user['company']['address']['country'] ?? null,
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
                // =================================================
                // 5. EMPLOYEE COMPANY
                // =================================================
                $companyData[] = [
                    'company_id_pk' => $companyIdPk,
                    'department' =>$user['company']['department'] ?? null,
                    'name' =>$user['company']['name'] ?? null,
                    'title' =>$user['company']['title'] ?? null,
                    
                    // |--------------------------------------------------------------------------
                    // | FOREIGN KEY
                    // |--------------------------------------------------------------------------
                    // | employee_company_dtl.company_address_fk
                    // | references
                    // | employee_company_dtl_address.company_address_pk
                    
                    'company_address_fk' =>$companyAddressIdPk,
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
                // =================================================
                // 6. EMPLOYEE DETAILS
                // =================================================
                $employeeData[] = [
                    'emp_id_pk' => $employeeIdPk,
                    'firstName' =>$user['firstName'] ?? null,
                    'maidenName' =>$user['maidenName'] ?? null,
                    'lastName' =>$user['lastName'] ?? null,

                    'age' =>$user['age'] ?? null,
                    'gender' =>$user['gender'] ?? null,
                    'email' =>$user['email'] ?? null,
                    'phone' =>$user['phone'] ?? null,
                    'username' =>$user['username'] ?? null,

                    'birthday' => $user['birthDate'] ?? null,
                    'bloodGroup' =>$user['bloodGroup'] ?? null,
                    'height' =>$user['height'] ?? null,
                    'weight' =>$user['weight'] ?? null,
                    'eyeColor' =>$user['eyeColor'] ?? null,
                    'university' =>$user['university'] ?? null,
                    // =============================================
                    // FOREIGN KEYS
                    // =============================================
                    'emp_hair_id_fk' =>$hairIdPk,
                    'emp_address_id_fk' =>$addressIdPk,
                    'emp_bank_id_fk' =>$bankIdPk,
                    'company_id_fk' => $companyIdPk,
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            }


            // ====================================================
            // BULK INSERT
            // ====================================================
            
            // |--------------------------------------------------------------------------
            // | INSERT ORDER IS VERY IMPORTANT
            // |--------------------------------------------------------------------------
            // | Parent tables must be inserted before child tables.
            // |--------------------------------------------------------------------------
            
            // ----------------------------------------------------
            // 1. HAIR
            // ----------------------------------------------------
            $hair=DB::table('employee_hair')->insert($hairData);
            // ----------------------------------------------------
            // 2. EMPLOYEE ADDRESS
            // ----------------------------------------------------
            $address=DB::table('employee_address')->insert($addressData);
            // ----------------------------------------------------
            // 3. EMPLOYEE BANK
            // ----------------------------------------------------
            $bank=DB::table('employee_bank_dtls')->insert($bankData);
            // ----------------------------------------------------
            // 4. COMPANY ADDRESS
            // ---------------------------------------------------
            $companyAddress=DB::table('employee_company_dtl_address')->insert($companyAddressData);
            // ----------------------------------------------------
            // 5. COMPANY
            // ----------------------------------------------------
            $companyDtl=DB::table('employee_company_dtl')->insert($companyData);
            // ----------------------------------------------------
            // 6. EMPLOYEE DETAILS
            // ----------------------------------------------------
            $employeeDtl=DB::table('employee_dtl')->insert($employeeData);
            

            // -----------check all are entry perfectly or not -----------
            $successAllDataEntry=($hair && $address && $bank && $companyAddress && $companyDtl && $employeeDtl);
            if(!$successAllDataEntry)
            {
                DB::rollback();
                return response()->json([
                    'status' => false,
                    'message' => 'Failed to store users',
                ], 500);
            }
            else
            {
                // ====================================================
                // EVERYTHING SUCCESSFUL
                // ====================================================
                DB::commit();
                // return response()->json([
                //     'status' => true,
                //     'message' => 'Users stored successfully',
                //     'total_users' => count($usersDataApi)
                // ]);
                return view('API.showAllUser');
            }
        }
        catch(\Exception $e)
        {
            DB::rollback();
           return response()->json([
                'status' => false,
                'message' => 'Failed to store users',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    // -------------------show all users------------------
    public function showAllUsersApi(Request $rsearch)
    {
        $employeeData=Employee_Dtl::with('Employee_Hair','Emplyee_DtlsAddress','Employee_DtlsBank','Employee_Dtlscompany',
            'Employee_Dtlscompany.Company_dtlsAddress')
            
            ->select('emp_id_pk','firstName','maidenName','lastName',
            'age','gender','email','phone','username','birthday',
            'bloodGroup','university','company_id_fk','emp_hair_id_fk',
            'emp_address_id_fk','emp_bank_id_fk','height','weight','eyeColor');

        if($rsearch->search)
        {
            $employeeData=Employee_Dtl::where('email','ilike','%'.$rsearch->search.'%');
        }
        $employeeData=$employeeData->paginate(10)->withQueryString();
        return view('API.showAllUser',compact('employeeData'));
    }
}
