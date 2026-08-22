@extends('boot_link_html')
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
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone No</th>
                            <th>Pin Code</th>
                            <th>Address</th>
                            <th>State</th>
                            <th>District</th>
                            <th>Subdivision</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($studentsDetails as $stdDtl)
                        <tr>
                            <td>
                                {{ $studentsDetails->firstItem() + $loop->index }}
                            </td>
                            <td>{{ $stdDtl->Name }}</td>
                            <td>{{ $stdDtl->Email }}</td>
                            <td>{{ $stdDtl->phoneNo }}</td>
                            <td>{{ $stdDtl->pin }}</td>
                            <td>{{ $stdDtl->Address }}</td>
                            <td>{{ $stdDtl->state->state_name }}</td>
                            <td>{{ $stdDtl->district->district_name }}</td>
                            <td>{{ $stdDtl->subdivision->subdiv_name }}</td>
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