@extends('layout')
@section('content')
<body style="background-color: lawngreen;">
<center>
<div class="card" style="margin-top: 150px;">
  <div class="card-header"><h3 style="font-style: italic; text-decoration:underline;">Editing Page</h3></div>
  <div class="card-body">
      
      <form action="{{ url('students/' .$students->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$students->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$students->name}}" class="form-control"></br>
        <label>Registration Number</label></br>
        <input type="text" name="registration_number" id="registration_number" value="{{$students->registration_number}}" class="form-control"></br>
        <label>faculty</label></br>
        <input type="text" name="faculty" id="faculty" value="{{$students->faculty}}" class="form-control"></br><br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
</center>
</body>
@stop