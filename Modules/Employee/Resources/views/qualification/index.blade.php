@extends('employee::layouts.master')
@section('content')
    <div class="container">
        <h1>My Qualification</h1>
        <div class="card" style="width: 60rem;">
            <div class="card-body">
                @foreach ( $model  as $row )
                <h5>Full Name :- {{$row->full_name }}</h5>
                <h5>Father Name:-{{$row->father_name }}</h5>
                <h5>Mother Name:-{{$row->mother_name }}</h5>
                <h5>Address:-{{$row->current_address }}</h5>
                <h5>Corespondes Address:-{{$row->corespondes_address  }}</h5>
                <h5>Phone Number :-{{$row->phone_number }}</h5>
                <h5>DOB :-{{$row->dob }}</h5>
                <h5>Marital Status :-{{$row->marital_status }}</h5>
                <h5>Experience:-{{$row->total_experience }} years</h5>
                @endforeach
                <a href="{{route('employee.qualification.edit',$row->id)}}" class="btn btn-primary">Edit</a> 
            </div>
        </div>
    </div>
@endsection
