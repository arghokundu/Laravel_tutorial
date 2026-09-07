@extends('layouts.mainApp')
@section('main_content')
<div class="container mt-4">
    <div class="card">
        <div class="card-header">
            <h1 class="mb-4">Student List</h1>
            <div class="d-flex justify-content-between">
                <div class="mb-3">
                    <a href="/formShow" class="btn btn-primary">Add New</a>
                </div>

                <form action="/showAllStudentList" method="get" class="mb-4">
                    <div class="d-flex gap-2">
                        <input type="text" name="search" id="searchName" placeholder="Enter Name" class="form-control" style="width: 250px;">

                        <button type="submit" class="btn btn-primary">
                            Search
                        </button>

                        <a href="/showAllStudentList" class="btn btn-secondary">
                            Reset
                        </a>
                    </div>
                </form>
            </div>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover" id="listStd">
                    <thead class="table-dark">
                        <tr>
                            <th>Sl.no</th>
                            <th class="text-nowrap">Name</th>
                            <th class="text-nowrap">Email</th>
                            <th class="text-nowrap">Phone No</th>
                            <th class="text-nowrap">Pin Code</th>
                            <th class="text-nowrap">Address</th>
                            <th class="text-nowrap">State</th>
                            <th class="text-nowrap">District</th>
                            <th class="text-nowrap">Subdivision</th>
                            <th class="text-nowrap">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($studentsDetails as $stdDtl)
                        <tr>
                            <td>
                                {{ $studentsDetails->firstItem() + $loop->index }}
                            </td>
                            <td class="text-nowrap">{{ $stdDtl->Name }}</td>
                            <td class="text-nowrap">{{ $stdDtl->Email }}</td>
                            <td class="text-nowrap">{{ $stdDtl->phoneNo }}</td>
                            <td class="text-nowrap">{{ $stdDtl->pin }}</td>
                            <td class="text-nowrap">{{ $stdDtl->Address }}</td>
                            <td class="text-nowrap">{{ $stdDtl->state->state_name }}</td>
                            <td class="text-nowrap">{{ $stdDtl->district->district_name }}</td>
                            <td class="text-nowrap">{{ $stdDtl->subdivision->subdiv_name }}</td>
                            <td>
                                <div class="d-flex gap-1">
                                    <a href="/editData/{{ Crypt::encrypt($stdDtl->student_id_pk) }}" class="btn btn-sm btn-warning">
                                        Edit
                                    </a>
                                    <a href="/specific/data/{{Crypt::encrypt($stdDtl->student_id_pk) }}" class="btn btn-sm btn-info">
                                        View
                                    </a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Pagination -->
        <div class="d-flex justify-content-between align-items-center mt-3 me-4">
            <div>
                <!-- Showing
            {{--{{ $studentsDetails->firstItem() }}
            to
            {{ $studentsDetails->lastItem() }}
            of
            {{ $studentsDetails->total() }}--}}
            results -->
            </div>
            <div>
                {{ $studentsDetails->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </div>
</div>
@push('script')
<script src="{{asset('assets/js/js/student.js')}}"></script>
@endpush
@endsection