<div>
    <form action="/storeData" method="POST">
        @csrf
        <label>Name:</label>
        <input type=text name="fullname" id="fullname"><br>
        @error('fullname')
        <small>{{$message}}</small>
        @enderror
        <br>

        <label>Email:</label>
        <input type=email name="email" id="email"><br>
        @error('email')
        <small>{{$message}}</small>
        @enderror
        <br>

        <label>Address:</label>
        <input type=text name="address" id="address"><br>
        @error('address')
        <small>{{$message}}</small>
        @enderror
        <br>

        <label>Pin:</label>
        <input type=text name="pin" id="pin"><br>
        @error('pin')
        <small>{{$message}}</small>
        @enderror
        <br>

        <label>Phone No:</label>
        <input type=text name="phoneno" id="phoneno"><br>
        @error('phoneno')
        <small>{{$message}}</small>
        @enderror
        <br>

        <label>State:</label>
        <select name="state" id="state">
            <option>-------Select State----------</option>
            @foreach($state as $st)
            <option value="{{$st->state_id_pk}}">
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
            <option value="{{$dis->district_id_pk}}">
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
            <option value="{{$subdiv->subdiv_id_pk}}">
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