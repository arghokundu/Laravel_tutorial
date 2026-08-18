<div>
    <form action="#" method="POST">
        @csrf
        <label>Name:</label>
        <input type=text name="fullname" id="fullname" 
            value="{{old('fullname',$studentcrud->Name ?? 'NA')}}"><br>
        @error('fullname')
        <small>{{$message}}</small>
        @enderror
        <br>

        <label>Email:</label>
        <input type=email name="email" id="email"
            value="{{old('email',$studentcrud->Email ?? 'NA')}}"><br>
        @error('email')
        <small>{{$message}}</small>
        @enderror
        <br>

        <label>Address:</label>
        <input type=text name="address" id="address"
            value="{{old('address',$studentcrud->Address ?? 'NA')}}"><br>
        @error('address')
        <small>{{$message}}</small>
        @enderror
        <br>

        <label>Pin:</label>
        <input type=text name="pin" id="pin" 
            value="{{old('pin',$studentcrud->pin ?? 'NA')}}"><br>
        @error('pin')
        <small>{{$message}}</small>
        @enderror
        <br>

        <label>Phone No:</label>
        <input type=text name="phoneno" id="phoneno" 
            value="{{old('phoneno',$studentcrud->phoneNo ?? 'NA')}}"><br>
        @error('phoneno')
        <small>{{$message}}</small>
        @enderror
        <br>

        <label>State:</label>
        <select name="state" id="state">
            <option>-------Select State----------</option>
            @foreach($state as $st)
            <option value="{{$st->state_id_pk}}"
                {{old('state',$studentcrud->state_id_fk) == $st->state_id_pk ? 'selected' : ''}}>
                {{$st->state_name}}
            </option>
            @endforeach
        </select><br><br>
        @error('state')
        <small>{{$message}}</small>
        @enderror
        <br>

        <label>District:</label>
        <select name="district" id="district">
            <option>-------Select District----------</option>
            @foreach($district as $dis)
            <option value="{{$dis->district_id_pk}}"
                {{old('district',$studentcrud->district_id_fk) == $dis->district_id_pk ? 'selected' : ''}}>
                {{$dis->district_name}}
            </option>
            @endforeach
        </select><br>
        @error('district')
        <small>{{$message}}</small>
        @enderror
        <br>

        <label>Subdivision:</label>
        <select name="subdivision" id="subdivision">
            <option>-------Select subdivision----------</option>
            @foreach($subdivision as $subdiv)
            <option value="{{$subdiv->subdiv_id_pk}}"
                {{old('subdivision',$studentcrud->subdiv_id_fk) == $subdiv->subdiv_id_pk ? 'selected' : ''}}>
                {{$subdiv->subdiv_name}}
            </option>
            @endforeach
        </select><br>
        @error('subdivision')
        <small>{{$message}}</small>
        @enderror
        <br>

        <button type="submit">
            Submit
        </button>
    </form>

</div>