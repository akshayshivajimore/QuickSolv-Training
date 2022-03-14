<h1>Form</h1>
 
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

{{ Form::open(array('url' => '/store', 'files' => true)) }}
{{ Form::token() }}
@csrf


{{Form::label('name', 'Name');}}
{{Form::text('name')}}
{{ $errors->first('name') }}
<br/><br>
{{Form::label('email', 'E-Mail');}}
{{Form::text('email')}}
{{ $errors->first('email') }}   

<br/><br>
{{Form::label('password', 'Password');}}
{{Form::password('password')}}
{{ $errors->first('password') }}

<br/><br>
{{Form::label('confirm_password', 'Confirm Password');}}
{{Form::password('confirm_password')}}
<br/><br>
{{Form::label('phone', 'Phone');}}
{{Form::text('phone')}}
<br/><br>
{{Form::label('age', 'Age');}}
{{Form::text('age')}}
<br/><br>
{{Form::label('address', 'Address');}}
{{Form::text('address')}}
<br/><br>
{{Form::label('city', 'City');}}
{{Form::select('city', array('Mumbai','Thane','Kharadi','Hadapsar'));}}
<br/><br>
{{Form::label('state', 'State');}}
{{Form::select('state', array('Maharashtra','Delhi','Hariyana','UP'));}}
<br/><br>
{{Form::label('country', 'Country');}}
{{Form::select('country', $countries);}}
<br/><br>
{{Form::label('pincode', 'Pincode');}}
{{Form::text('pincode')}}
<br/> 


<br/>
{{Form::submit('ADD');}}