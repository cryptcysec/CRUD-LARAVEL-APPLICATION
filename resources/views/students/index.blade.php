@extends('layout')
@section('content')
<body  style="background-color:khaki;">
<center>
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header" style="font-style: oblique;"><h2>Students Details</h2></div>
                    <div class="card-body">
                        <br/>
                        <div class="table-responsive">
                            <table class="table" border="2 " style="background-color: brown;">
                                <thead>
                                    <tr>
                                        <th>S/NO.</th>
                                        <th>Name</th>
                                        <th>Registration Number</th>
                                        <th>faculty</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($students as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->registration_number }}</td>
                                        <td>{{ $item->faculty }}</td>
                                        <td>
                                            <a href="{{ url('/students/' . $item->id) }}" title="View Student"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/students/' . $item->id . '/edit') }}" title="Edit Student"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            <form method="POST" action="{{ url('/students' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete students" onclick="return confirm($quot.Confirm ,delete $quot)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button><br><br>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <a href="{{ url('/students/create') }}" class="btn btn-success btn-sm" title="Add New students">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</center>
</body>
@endsection