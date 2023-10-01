@extends('employee::layouts.master')
@section('content')
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">User Profile</h5>
        </div>
        <form action="{{ route('employee.qualification.store') }}" method="post">
            @csrf
            @include('employee::layouts.form-errors')
            <div class="modal-body">
                <table class="table table-bordered ">
                    <tbody>
                        <tr>
                            <td>
                                <div class="row">
                                    <div class="col-2">
                                        <input type="text" name="courses" id="test" placeholder="Class-10th">
                                    </div>
                                    <div class="col-3">
                                        <input type="text" name="institute_name" placeholder="Institute Name"
                                            class="form-float">
                                    </div>
                                    <div class="col-2">
                                        <input type="date" name="passing_year" placeholder="passing_year"
                                            class="form-float">
                                    </div>
                                    <div class="col-2">
                                        <input type="test" name="percentage" placeholder="Percentage" class="form-float">
                                    </div>
                                    <div class="col-2">
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </div>
                                </div>
                            </td>
                        <tr>
                            <td>
                                <div class="row">
                                    <div class="col-2">
                                        <input type="text" name="courses" id="test" placeholder="Class-12th">
                                    </div>
                                    <div class="col-3">
                                        <input type="text" name="institute_name" placeholder="Institute Name"
                                            class="form-float">
                                    </div>
                                    <div class="col-2">
                                        <input type="date" name="passing_year" placeholder="passing_year"
                                            class="form-float">
                                    </div>
                                    <div class="col-2">
                                        <input type="test" name="percentage" placeholder="Percentage" class="form-float">
                                    </div>
                                    <div class="col-2">
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="row">
                                    <div class="col-2">
                                        <input type="text" name="courses" id="test" placeholder="Gradution">
                                    </div>
                                    <div class="col-3">
                                        <input type="text" name="institute_name" placeholder="Institute Name"
                                            class="form-float">
                                    </div>
                                    <div class="col-2">
                                        <input type="date" name="passing_year" placeholder="passing_year"
                                            class="form-float">
                                    </div>
                                    <div class="col-2">
                                        <input type="test" name="percentage" placeholder="Percentage" class="form-float">
                                    </div>
                                    <div class="col-2">
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </div>
                                </div>
                            </td>
                            <tr>
                                <td>
                                    <div class="row">
                                        <div class="col-2">
                                            <input type="text" name="courses" id="test" placeholder="Post Gradution">
                                        </div>
                                        <div class="col-3">
                                            <input type="text" name="institute_name" placeholder="Institute Name"
                                                class="form-float">
                                        </div>
                                        <div class="col-2">
                                            <input type="date" name="passing_year" placeholder="passing_year"
                                                class="form-float">
                                        </div>
                                        <div class="col-2">
                                            <input type="test" name="percentage" placeholder="Percentage" class="form-float">
                                        </div>
                                        <div class="col-2">
                                            <button type="submit" class="btn btn-primary">Save</button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="row">
                                        <div class="col-2">
                                            <input type="text" name="courses" id="test" placeholder="Other Courses">
                                        </div>
                                        <div class="col-3">
                                            <input type="text" name="institute_name" placeholder="Institute Name"
                                                class="form-float">
                                        </div>
                                        <div class="col-2">
                                            <input type="date" name="passing_year" placeholder="passing_year"
                                                class="form-float">
                                        </div>
                                        <div class="col-2">
                                            <input type="test" name="percentage" placeholder="Percentage" class="form-float">
                                        </div>
                                        <div class="col-2">
                                            <button type="submit" class="btn btn-primary">Save</button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tr>
                    </tbody>
                </table>
            </div>
        </form>
    </div>
@endsection
