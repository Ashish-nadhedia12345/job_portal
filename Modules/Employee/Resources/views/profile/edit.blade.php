@extends('employee::layouts.master')
@section('content')
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">User Profile</h5>
        </div>
        <form action="{{ route('employee.profile.store',$profile->id) }}" method="post">
            @csrf
            @include('employee::layouts.form-errors')
            <div class="modal-body">
                <table class="table table-bordered ">
                    <tbody>
                        <tr>
                            <td>
                                <input type="text" name="full_name" placeholder="Full Name" class="form-control" value="{{ $profile->full_name }}">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" name="father_name" placeholder="Father Name" class="form-control"  value="{{ $profile->father_name }}">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" name="mother_name" placeholder="Mother Name" class="form-control"  value="{{ $profile->mother_name }}">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" name="current_address" placeholder="Current Address"
                                    class="form-control"  value="{{ $profile->current_address }}">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" name="corespondes_address" placeholder="Corespondes Address"
                                    class="form-control" value="{{ $profile->corespondes_address }}">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="date" name="dob" placeholder="DOB" class="form-control" value="{{ $profile->dob }}" >
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" name="marital_status" placeholder="Marital Status"
                                    class="form-control" value="{{ $profile->marital_status }}" >
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" name="phone_number" placeholder="Phone Number" class="form-control"  value="{{ $profile->phone_number }}" >
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" name="total_experience" placeholder="Experience" class="form-control" value="{{ $profile->total_experience }} years" >
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </form>
    </div>
@endsection
