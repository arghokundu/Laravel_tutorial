@extends('boot_link_html')
@section('main_content')
<div class="container mt-5">
    <div class="card">
        <div class="card-header d-flex justify-content-center">
            <h2> Edit Student Details Form</h2>
        </div>
        <div class="card-body">
            <form action="/updateData/{{ Crypt::encrypt($studentcrud->student_id_pk)}}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-3">
                        <label>Name:</label>
                        <input type=text name="fullname" id="fullname" class="form-control"
                            value="{{old('fullname',$studentcrud->Name ?? 'NA')}}">
                        @error('fullname')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>

                    <div class="col-md-3">
                        <label>Email:</label>
                        <input type=email name="email" id="email" class="form-control"
                            value="{{old('email',$studentcrud->Email ?? 'NA')}}">
                        @error('email')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="col-md-3">
                        <label>Address:</label>
                        <input type=text name="address" id="address" class="form-control"
                            value="{{old('address',$studentcrud->Address ?? 'NA')}}">
                        @error('address')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="col-md-3">
                        <label>Pin:</label>
                        <input type=text name="pin" id="pin" class="form-control"
                            value="{{old('pin',$studentcrud->pin ?? 'NA')}}">
                        @error('pin')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>

                    <div class="col-md-3">
                        <label>Phone No:</label>
                        <input type=text name="phoneno" id="phoneno" class="form-control"
                            value="{{old('phoneno',$studentcrud->phoneNo ?? 'NA')}}">
                        @error('phoneno')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="col-md-3">
                        <label>State:</label>
                        <select name="state" id="state" class="form-control">
                            <option>-------Select State----------</option>
                            @foreach($state as $st)
                            <option value="{{$st->state_id_pk}}"
                                {{old('state',$studentcrud->state_id_fk) == $st->state_id_pk ? 'selected' : ''}}>
                                {{$st->state_name}}
                            </option>
                            @endforeach
                        </select>
                        @error('state')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="col-md-3">

                        <label>District:</label>
                        <select name="district" id="district" class="form-control">
                            <option>-------Select District----------</option>
                            @foreach($district as $dis)
                            <option value="{{$dis->district_id_pk}}"
                                {{old('district',$studentcrud->district_id_fk) == $dis->district_id_pk ? 'selected' : ''}}>
                                {{$dis->district_name}}
                            </option>
                            @endforeach
                        </select>
                        @error('district')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="col-md-3">
                        <label>Subdivision:</label>
                        <select name="subdivision" id="subdivision" class="form-control">
                            <option>-------Select subdivision----------</option>
                            @foreach($subdivision as $subdiv)
                            <option value="{{$subdiv->subdiv_id_pk}}"
                                {{old('subdivision',$studentcrud->subdiv_id_fk) == $subdiv->subdiv_id_pk ? 'selected' : ''}}>
                                {{$subdiv->subdiv_name}}
                            </option>
                            @endforeach
                        </select>
                        @error('subdivision')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                </div>

                <div class="d-flex justify-content-between">
                    <button class="d-flex justify-content-center btn btn-success mt-3" type="submit">
                        Update
                    </button>
                    <a class="btn btn-warning mt-3" href="/showAllStudentList">Back</a>
                </div>
            </form>
        </div>

    </div>
</div>

@endsection