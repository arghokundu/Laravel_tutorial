<div>
    <h1>Student List</h1>
    
    <div>
      <button ><a href="/formShow">Add New</a></button>
      <br><br>
        <form>
            <input type="text" name="search" id="search">
            <button type="submit">Search</button>
        </form>
         
    </div>

    <table border="1">
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
        @foreach($studentsDetails as $stdDtl)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$stdDtl->Name}}</td>
            <td>{{$stdDtl->Email}}</td>
            <td>{{$stdDtl->phoneNo}}</td>
            <td>{{$stdDtl->pin}}</td>
            <td>{{$stdDtl->Address}}</td>
            <td>{{$stdDtl->state->state_name}}</td>
            <td>{{$stdDtl->district->district_name}}</td>
            <td>{{$stdDtl->subdivision->subdiv_name}}</td>
            <td>
                <button><a href="#">Edit</a></button>
                <button><a href="#">View</a></button>
            </td>
        </tr>
        @endforeach
    </table>
</div>