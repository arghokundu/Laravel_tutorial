@extends('boot_link_html')
@section('main_content')
<div class="container mt-5 mb-5">
    <div class="card">
        <div class="card-header">
            <h2>Show All Data Users</h2>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th>SlNo.</th>
                            <th>Full Name</th>
                            <th>Age</th>
                            <th>Gender</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Username</th>
                            <th>Birthday</th>
                            <th>BloodGroup</th>
                            <th>Address</th>
                            <th>Bank Name</th>
                            <th>Company</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                     @foreach($employeeData as $empdata)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td class="text-nowrap">
                              {{$empdata->firstName}} {{$empdata->maidenName}} {{$empdata->lastName}}
                           </td>
                            <td>{{$empdata->age}}</td>
                            <td>{{$empdata->gender}}</td>
                            <td class="text-nowrap">{{$empdata->email}}</td>
                            <td class="text-nowrap">{{$empdata->phone}}</td>
                            <td class="text-nowrap">{{$empdata->username}}</td>
                            <td class="text-nowrap">{{$empdata->birthday}}</td>
                            <td>{{$empdata->bloodGroup}}</td>
                            <td class="text-nowrap"></td>
                            <td class="text-nowrap"></td>
                            <td class="text-nowrap"></td>
                            <td class="d-flex justify-content-between">
                                <a href="#" class=" btn btn-sm btn-success me-2">
                                    View
                                </a>
                                <a href="#" class=" btn btn-sm btn-warning">
                                    Edit
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="mt-3">
               {{$employeeData->links('pagination::bootstrap-5')}}
            </div>
        </div>
    </div>
</div>
@endsection