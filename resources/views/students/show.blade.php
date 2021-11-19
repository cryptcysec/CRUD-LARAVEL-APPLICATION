@extends('layout')
@section('content')
<body style=" background-color:darkblue;">
<div class="card" style="margin-top: 30px; padding-left:200px;">
  <div class="card-header" style="font-style: italic; padding-left:100px; font-size:20px;" ><h4>Personal Info</h4></div>
  <div class="card-body">
  
        <div class="card-body">
            <table border="1" cellpadding="5, blue;" style="  background-color:grey;">
                <tr>
                    <th class="card-title">Name</th>
                    <th class="card-title">Registration Number</th>
                    <th class="card-title">Faculty</th>
                </tr>
                <tr>
                    <td class="card-text">{{ $students->name }}</td>
                    <td class="card-text">{{ $students->registration_number }}</td>
                    <td class="card-text">{{ $students->faculty }}</td>
                </tr>
            </table>
  </div>
      
<br>
  
  </div>
</div>
</body>