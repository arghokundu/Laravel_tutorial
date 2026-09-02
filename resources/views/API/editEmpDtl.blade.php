@extends('layouts.mainApp')
@section('main_content')
<div class="container mt-3 me-0 px-0">
    <div class="card mb-3">
        <div class="card-header d-flex justify-content-between">
            <h2>Edit Employee Details Here</h2>
            <a href="/api/showAll/api/users" class="btn btn-dark pt-2">Back</a>
        </div>
        <form action="#" method="post">
            @csrf
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
                                        <input type="text" name="fname" id="fname" class="form-control"
                                            value="{{old('fname',$empdata->firstName)}}">
                                    </td>
                                    <td class="fw-bold w-25 px-3" style="background-color:#eef4fc;">
                                        Middle Name
                                    </td>
                                    <td class="w-25 px-3">
                                        <input type="text" name="mname" id="mname" class="form-control"
                                            value="{{old('mname',$empdata->maidenName)}}">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="fw-bold px-3" style="background-color:#eef4fc;">
                                        Last Name
                                    </td>
                                    <td class="px-3">
                                        <input type="text" name="lname" id="lname" class="form-control"
                                            value="{{old('lname',$empdata->lastName)}}">
                                    </td>
                                    <td class="fw-bold px-3" style="background-color:#eef4fc;">
                                        Date of Birth
                                    </td>
                                    <td class="px-3">
                                        <input type="date" name="d0b" id="d0b" class="form-control"
                                            value="{{old('d0b',$empdata->birthday) ?? 'selected'  }}">
                                    </td>
                                </tr>

                                <tr>
                                    <td class="fw-bold px-3" style="background-color:#eef4fc;">
                                        Gender
                                    </td>
                                    <td class="px-3">
                                        <select name="gender" id="gender" class="form-control">
                                            <option value="male"
                                                {{old('gender',$empdata->gender)== 'male' ? 'selected' : ''  }}>
                                                Male
                                            </option>
                                            <option value="female"
                                                {{old('gender',$empdata->gender)== 'female' ? 'selected' : '' }}>
                                                Female
                                            </option>
                                            <option value="other"
                                                {{old('gender',$empdata->gender)== 'other' ? 'selected' : ''  }}>
                                                Other
                                            </option>
                                        </select>
                                    </td>
                                    <td class="fw-bold px-3" style="background-color:#eef4fc;">
                                        Age
                                    </td>
                                    <td class="px-3">
                                        <input type="text" name="age" id="age" class="form-control"
                                            value="{{old('age',$empdata->age) }}">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="fw-bold px-3" style="background-color:#eef4fc;">
                                        Height
                                    </td>
                                    <td class="px-3">
                                        <input type="text" name="height" id="height" class="form-control"
                                            value="{{old('height',$empdata->height) }}">
                                    </td>
                                    <td class="fw-bold px-3" style="background-color:#eef4fc;">
                                        Weight
                                    </td>
                                    <td class="px-3">
                                        <input type="text" name="weight" id="weight" class="form-control"
                                            value="{{old('weight',$empdata->weight) }}">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="fw-bold px-3" style="background-color:#eef4fc;">
                                        EyeColor
                                    </td>
                                    <td class="px-3">
                                        <input type="text" name="eyecolor" id="eyecolor" class="form-control"
                                            value="{{old('eyecolor',$empdata->eyeColor) }}">
                                    </td>
                                    <td class="fw-bold px-3" style="background-color:#eef4fc;">
                                        University
                                    </td>
                                    <td class="px-3">
                                        <input type="text" name="university" id="university" class="form-control"
                                            value="{{old('university',$empdata->university) }}">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="fw-bold px-3" style="background-color:#eef4fc;">
                                        Phone Number
                                    </td>
                                    <td class="px-3">
                                        <input type="text" name="phno" id="phno" class="form-control"
                                            value="{{old('phno',$empdata->phone) }}">
                                    </td>
                                    <td class="fw-bold px-3" style="background-color:#eef4fc;">
                                        UserName
                                    </td>
                                    <td class="px-3">
                                        <input type="text" name="uname" id="uname" class="form-control"
                                            value="{{old('uname',$empdata->username) }}">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="fw-bold px-3" style="background-color:#eef4fc;">
                                        Email
                                    </td>
                                    <td class="px-3">
                                        <input type="email" name="email" id="email" class="form-control"
                                            value="{{old('email',$empdata->email) }}">
                                    </td>
                                    <td class="fw-bold px-3" style="background-color:#eef4fc;">
                                        Blood Group
                                    </td>
                                    <td class="px-3">
                                        <input type="text" name="bldgp" id="bldgp" class="form-control"
                                            value="{{old('bldgp',$empdata->bloodGroup) }}">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="fw-bold px-3" style="background-color:#eef4fc;">
                                        Hair Color and Type
                                    </td>
                                    <td class="px-3">
                                        <select name="haircolortype" id="haircolortype" class="form-control">
                                            @foreach($empHair as $ehair)
                                            <option value="{{$ehair->emp_hair_id_pk}}"
                                                {{old('haircolortype',$empdata->emp_hair_id_fk)==$ehair->emp_hair_id_pk ? 'selected' : ''}}>
                                                {{$ehair->color}} ( {{$ehair->type}} )
                                            </option>
                                            @endforeach
                                        </select>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center ms-5 mb-3">
                <button class="btn btn-warning">Update</button>
            </div>
        </form>

    </div>
</div>
@endsection