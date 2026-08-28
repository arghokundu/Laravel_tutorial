@extends('boot_link_html')
@section('main_content')
<!-- {{--@php
        $company = $empdata->Employee_Dtlscompany;
        $address = $company?->Company_dtlsAddress;
    @endphp--}}
    <td>{{--{{ $address?->address ?? 'NA' }}</td>
    <td>{{ $company?->company_name ?? 'NA' }}--}}</td> -->
<div class="container mt-4">
    <div class="card mb-3">
        <div class="card-header">
            <h2>Specific Employee Details Here</h2>
        </div>
        <div class="card-body">
            <div class="mb-0 ms-4 me-4">

                <div class="text-white fw-bold px-3 py-2 text-uppercase mb-2" style="background-color:#1a5f9b;">
                    1. Basic Identification Details
                </div>

                <div class="table-responsive">
                    <table class="table table-bordered table-sm align-middle mb-0" style="border-color:#b0c9e0;">
                        <tbody>
                            <tr>
                                <td class="fw-bold w-25 px-3" style="background-color:#eef4fc;">
                                    First Name
                                </td>
                                <td class="w-25 px-3">
                                    {{$empdata->firstName}}
                                </td>
                                <td class="fw-bold w-25 px-3" style="background-color:#eef4fc;">
                                    Middle Name
                                </td>
                                <td class="w-25 px-3">
                                    {{$empdata->maidenName ?? 'NA'}}
                                </td>
                            </tr>
                            <tr>
                                <td class="fw-bold px-3" style="background-color:#eef4fc;">
                                    Last Name
                                </td>
                                <td class="px-3">
                                    {{$empdata->lastName ?? 'NA'}}
                                </td>
                                <td class="fw-bold px-3" style="background-color:#eef4fc;">
                                    Date of Birth
                                </td>
                                <td class="px-3">
                                    {{$empdata->birthday}}
                                </td>
                            </tr>

                            <tr>
                                <td class="fw-bold px-3" style="background-color:#eef4fc;">
                                    Gender
                                </td>
                                <td class="px-3">
                                    {{$empdata->gender}}
                                </td>
                                <td class="fw-bold px-3" style="background-color:#eef4fc;">
                                    Age
                                </td>
                                <td class="px-3">
                                    {{$empdata->age}}
                                </td>
                            </tr>
                            <tr>
                                <td class="fw-bold px-3" style="background-color:#eef4fc;">
                                    Height
                                </td>
                                <td class="px-3">
                                    {{$empdata->height}}
                                </td>
                                <td class="fw-bold px-3" style="background-color:#eef4fc;">
                                    Weight
                                </td>
                                <td class="px-3">
                                    {{$empdata->weight}}
                                </td>
                            </tr>
                            <tr>
                                <td class="fw-bold px-3" style="background-color:#eef4fc;">
                                    EyeColor
                                </td>
                                <td class="px-3">
                                    {{$empdata->eyeColor}}
                                </td>
                                <td class="fw-bold px-3" style="background-color:#eef4fc;">
                                    University
                                </td>
                                <td class="px-3">
                                    {{$empdata->university}}
                                </td>
                            </tr>
                            <tr>
                                <td class="fw-bold px-3" style="background-color:#eef4fc;">
                                    Phone Number
                                </td>
                                <td class="px-3">
                                    {{$empdata->phone}}
                                </td>
                                <td class="fw-bold px-3" style="background-color:#eef4fc;">
                                    UserName
                                </td>
                                <td class="px-3">
                                    {{$empdata->username}}
                                </td>
                            </tr>
                            <tr>
                                <td class="fw-bold px-3" style="background-color:#eef4fc;">
                                    Email
                                </td>
                                <td class="px-3">
                                    {{$empdata->email}}
                                </td>
                                <td class="fw-bold px-3" style="background-color:#eef4fc;">
                                    Blood Group
                                </td>
                                <td class="px-3">
                                    {{$empdata->bloodGroup}}
                                </td>
                            </tr>
                            <tr>
                                <td class="fw-bold px-3" style="background-color:#eef4fc;">
                                    Hair Color
                                </td>
                                <td class="px-3">
                                    {{$empdata->Employee_Hair->color ?? 'NA'}}
                                </td>
                                <td class="fw-bold px-3" style="background-color:#eef4fc;">
                                    Hair Type
                                </td>
                                <td class="px-3">
                                    {{$empdata->Employee_Hair->type ?? 'NA'}}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="mb-0 ms-4 me-4">

                <div class="text-white fw-bold px-3 py-2 text-uppercase mb-2" style="background-color:#1a5f9b;">
                    2. Employee Address Details
                </div>

                <div class="table-responsive">
                    <table class="table table-bordered table-sm align-middle mb-0" style="border-color:#b0c9e0;">
                        <tbody>
                            <tr>
                                <td class="fw-bold w-25 px-3" style="background-color:#eef4fc;">
                                    Address
                                </td>
                                <td class="w-25 px-3">
                                    {{$empdata->Emplyee_DtlsAddress->address ?? 'NA'}}
                                </td>
                                <td class="fw-bold w-25 px-3" style="background-color:#eef4fc;">
                                    City
                                </td>
                                <td class="w-25 px-3">
                                    {{$empdata->Emplyee_DtlsAddress->city ?? 'NA'}}
                                </td>
                            </tr>
                            <tr>
                                <td class="fw-bold px-3" style="background-color:#eef4fc;">
                                    State
                                </td>
                                <td class="px-3">
                                    {{$empdata->Emplyee_DtlsAddress->state ?? 'NA'}}
                                </td>
                                <td class="fw-bold px-3" style="background-color:#eef4fc;">
                                    State Code
                                </td>
                                <td class="px-3">
                                    {{$empdata->Emplyee_DtlsAddress->stateCode ?? 'NA'}}
                                </td>
                            </tr>

                            <tr>
                                <td class="fw-bold px-3" style="background-color:#eef4fc;">
                                    Postal Code
                                </td>
                                <td class="px-3">
                                    {{$empdata->Emplyee_DtlsAddress->postalCode ?? 'NA'}}
                                </td>
                                <td class="fw-bold px-3" style="background-color:#eef4fc;">
                                    Country
                                </td>
                                <td class="px-3">
                                    {{$empdata->Emplyee_DtlsAddress->country ?? 'NA'}}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="mb-0 ms-4 me-4">

                <div class="text-white fw-bold px-3 py-2 text-uppercase mb-2" style="background-color:#1a5f9b;">
                    3. Employee Bank Details
                </div>

                <div class="table-responsive">
                    <table class="table table-bordered table-sm align-middle mb-0" style="border-color:#b0c9e0;">
                        <tbody>
                            <tr>
                                <td class="fw-bold w-25 px-3" style="background-color:#eef4fc;">
                                    Card Expire Date
                                </td>
                                <td class="w-25 px-3">
                                    {{$empdata->Employee_DtlsBank->cardExpire ?? 'NA'}}
                                </td>
                                <td class="fw-bold w-25 px-3" style="background-color:#eef4fc;">
                                    Card Number
                                </td>
                                <td class="w-25 px-3">
                                    {{$empdata->Employee_DtlsBank->cardNumber ?? 'NA'}}
                                </td>
                            </tr>
                            <tr>
                                <td class="fw-bold px-3" style="background-color:#eef4fc;">
                                    Card Type
                                </td>
                                <td class="px-3">
                                    {{$empdata->Employee_DtlsBank->cardType ?? 'NA'}}
                                </td>
                                <td class="fw-bold px-3" style="background-color:#eef4fc;">
                                    Currency
                                </td>
                                <td class="px-3">
                                    {{$empdata->Employee_DtlsBank->currency ?? 'NA'}}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="mb-0 ms-4 me-4">

                <div class="text-white fw-bold px-3 py-2 text-uppercase mb-2" style="background-color:#1a5f9b;">
                    4. Employee Company Details
                </div>

                <div class="table-responsive">
                    <table class="table table-bordered table-sm align-middle mb-0" style="border-color:#b0c9e0;">
                        <tbody>
                            <tr>
                                <td class="fw-bold w-25 px-3" style="background-color:#eef4fc;">
                                    Department
                                </td>
                                <td class="w-25 px-3">
                                    {{$empdata->Employee_Dtlscompany->department ?? 'NA'}}
                                </td>
                                <td class="fw-bold w-25 px-3" style="background-color:#eef4fc;">
                                    Name
                                </td>
                                <td class="w-25 px-3">
                                    {{$empdata->Employee_Dtlscompany->name ?? 'NA'}}
                                </td>
                            </tr>
                            <tr>
                                <td class="fw-bold px-3" style="background-color:#eef4fc;">
                                    Title
                                </td>
                                <td class="px-3">
                                    {{$empdata->Employee_Dtlscompany->title ?? 'NA'}}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="mb-0 ms-4 me-4">

                <div class="text-white fw-bold px-3 py-2 text-uppercase mb-2" style="background-color:#1a5f9b;">
                    5. Company Address Details
                </div>

                <div class="table-responsive">
                    <table class="table table-bordered table-sm align-middle mb-0" style="border-color:#b0c9e0;">
                        <tbody>
                            <tr>
                                <td class="fw-bold w-25 px-3" style="background-color:#eef4fc;">
                                    Address
                                </td>
                                <td class="w-25 px-3">
                                    {{$empdata->Employee_Dtlscompany->Company_dtlsAddress->address ?? 'NA'}}
                                </td>
                                <td class="fw-bold w-25 px-3" style="background-color:#eef4fc;">
                                    City
                                </td>
                                <td class="w-25 px-3">
                                    {{$empdata->Employee_Dtlscompany->Company_dtlsAddress->city ?? 'NA'}}
                                </td>
                            </tr>
                            <tr>
                                <td class="fw-bold px-3" style="background-color:#eef4fc;">
                                    State
                                </td>
                                <td class="px-3">
                                    {{$empdata->Employee_Dtlscompany->Company_dtlsAddress->state ?? 'NA'}}
                                </td>
                                <td class="fw-bold px-3" style="background-color:#eef4fc;">
                                    State Code
                                </td>
                                <td class="px-3">
                                    {{$empdata->Employee_Dtlscompany->Company_dtlsAddress->stateCode ?? 'NA'}}
                                </td>
                            </tr>

                            <tr>
                                <td class="fw-bold px-3" style="background-color:#eef4fc;">
                                    Postal Code
                                </td>
                                <td class="px-3">
                                    {{$empdata->Employee_Dtlscompany->Company_dtlsAddress->postalCode ?? 'NA'}}
                                </td>
                                <td class="fw-bold px-3" style="background-color:#eef4fc;">
                                    Country
                                </td>
                                <td class="px-3">
                                    {{$empdata->Employee_Dtlscompany->Company_dtlsAddress->country ?? 'NA'}}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection