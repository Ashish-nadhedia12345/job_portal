@extends('employee::layouts.master')
@section('content')
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">User Profile</h5>
        </div>
        <form action="{{ route('employee.profile.store') }}" method="post">
            @csrf
            @include('employee::layouts.form-errors')
            <div class="modal-body">
                <table class="table table-bordered ">
                    <tbody>
                        <tr>
                            <td>
                                <input type="text" name="full_name" placeholder="Full Name" class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" name="father_name" placeholder="Father Name" class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" name="mother_name" placeholder="Mother Name" class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" name="current_address" placeholder="Current Address"
                                    class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" name="corespondes_address" placeholder="Corespondes Address"
                                    class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="date" name="dob" placeholder="DOB" class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" name="marital_status" placeholder="Marital Status"
                                    class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" name="phone_number" placeholder="Phone Number" class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" name="total_experience" placeholder="Experience" class="form-control">
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
