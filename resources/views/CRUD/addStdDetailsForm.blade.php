@extends('boot_link_html')
@section('main_content')
<div class="container mt-5">
    <div class="card">
        <div class="card-header d-flex justify-content-center">
            <h2> Add Student Details Form</h2>
        </div>
        <div class="card-body">
            <form action="/storeData" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-3">
                        <label>Name:</label>
                        <input type=text name="fullname" id="fullname" class="form-control">
                        @error('fullname')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>

                    <div class="col-md-3">
                        <label>Email:</label>
                        <input type=email name="email" id="email" class="form-control">
                        @error('email')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="col-md-3">
                        <label>Address:</label>
                        <input type=text name="address" id="address" class="form-control">
                        @error('address')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="col-md-3">
                        <label>Pin:</label>
                        <input type=text name="pin" id="pin" class="form-control">
                        @error('pin')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>

                    <div class="col-md-3">
                        <label>Phone No:</label>
                        <input type=text name="phoneno" id="phoneno" class="form-control">
                        @error('phoneno')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="col-md-3">
                        <label>State:</label>
                        <select name="state" id="state" class="form-control">
                            <option>-------Select State----------</option>
                            @foreach($state as $st)
                            <option value="{{$st->state_id_pk}}">
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
                            <option value="{{$dis->district_id_pk}}">
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
                            <option value="{{$subdiv->subdiv_id_pk}}">
                                {{$subdiv->subdiv_name}}
                            </option>
                            @endforeach
                        </select>
                        @error('subdivision')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                </div>

                <button class="d-flex justify-content-center btn btn-success mt-3" type="submit">
                    Submit
                </button>
            </form>
        </div>

    </div>
</div>
@endsection