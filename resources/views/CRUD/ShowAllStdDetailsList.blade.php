<div>
   <h1>Store data successfully.</h1>
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
            <a href="#">Edit</a>
            <a href="#">View</a>
         </td>
      </tr>
      @endforeach
   </table>
</div>
