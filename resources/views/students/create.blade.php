@extends('layout')
@section('content')
<body style="background-color: royalblue;">
<center>
<div class="card" style="margin-top: 200px;">
  <div class="card-header"><h3 style="font-style: italic; text-decoration: underline;">Students Login</h3></div>
  <div class="card-body">  
    <form action="{{ url('students') }}" method="post">
        {!! csrf_field() !!}
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control" placeholder="John Doe" required></br>
        <label>Registration Number</label></br>
        <input type="text" name="registration_number" id="registration_number" class="form-control" required placeholder="BSCSF/MG/1234/09/13"></br>
        <label>faculty</label></br>
        <input type="text" name="faculty" id="faculty" class="form-control" required placeholder="SSET"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  </div>
</div>
</center>
</body>
@stop