@extends('boot_link_html')
@section('main_content')
<div class="container mt-5 ">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h2>View Specific data</h2>
            <a class="btn btn-warning" href="/showAllStudentList">Back</a>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-3">
                    <label>Name:</label>
                    {{$specificDataStd->Name}}
                </div>
                <div class="col-md-3">
                    <label>Email:</label>
                    {{$specificDataStd->Email}}
                </div>
                <div class="col-md-3">
                    <label>Address:</label>
                    {{$specificDataStd->Address}}
                </div>
                <div class="col-md-3">
                    <label>Pin:</label>
                    {{$specificDataStd->pin}}
                </div>
                <hr class="mt-2">
                <div class="col-md-3">
                    <label>Phone Number:</label>
                    {{$specificDataStd->phoneNo}}
                </div>
                <div class="col-md-3">
                    <label>State:</label>
                    {{$specificDataStd->state->state_name ?? 'NA'}}
                </div>
                <div class="col-md-3">
                    <label>District:</label>
                    {{$specificDataStd->district->district_name ?? 'NA'}}
                </div>
                <div class="col-md-3">
                    <label>Subdivision:</label>
                    {{$specificDataStd->subdivision->subdiv_name ?? 'NA'}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection