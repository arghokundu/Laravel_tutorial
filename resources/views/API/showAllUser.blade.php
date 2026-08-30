@extends('layouts.mainApp')
@section('main_content')
<div class="container mt-5 mb-5">
    <div class="card">
        <div class="card-header">
            <h2>Show All Data Users</h2>
            
            <form action="/api/showAll/api/users" method="get" class="mb-4">
                <div class="d-flex gap-2 ">
                    <input type="text" name="search" id="searchName" placeholder="search by email" class="form-control"
                        style="width: 250px;">

                    <button type="submit" class="btn btn-primary">
                        Search
                    </button>

                    <a href="/api/showAll/api/users" class="btn btn-secondary">
                        Reset
                    </a>
                </div>
            </form>
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
                            <th class="text-nowrap">Bank Card Type</th>
                            <th>Company</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($employeeData as $empdata)
                        <tr>
                            <td>{{$employeeData->firstItem() + $loop->index}}</td>
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
                            <td class="text-nowrap">
                                Address:{{$empdata->Emplyee_DtlsAddress->address ?? 'NA'}},
                                City:{{$empdata->Emplyee_DtlsAddress->city ?? 'NA'}},<br/>
                                State:{{$empdata->Emplyee_DtlsAddress->state ?? 'NA'}},
                                Postal Code:{{$empdata->Emplyee_DtlsAddress->postalCode ?? 'NA'}},
                                Country:{{$empdata->Emplyee_DtlsAddress->country ?? 'NA'}}
                            </td>
                            <td class="text-nowrap">
                                {{$empdata->Employee_DtlsBank->cardType ?? 'NA'}}
                            </td>
                            <td class="text-nowrap">
                                {{$empdata->Employee_Dtlscompany->name ?? 'NA'}}
                            </td>
                            <td class="d-flex justify-content-between">
                                <a href="/api/specific/view/{{$empdata->emp_id_pk}}" class=" btn btn-sm btn-success me-2">
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