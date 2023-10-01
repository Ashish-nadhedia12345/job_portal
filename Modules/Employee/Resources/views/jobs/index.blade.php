@extends('employee::layouts.master')
@section('content')
    <div class="container">
        <h1>All Jobs</h1>
        <table class="table table-bordered ">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Job Title</th>
                    <th>Company Address</th>
                    <th>Role</th>
                    <th>Responsbility</th>
                    <th>Experience</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($applyJobs as $jobs)
                    <tr>
                        <td>{{ $jobs->id }}</td>
                        <td>{{ $jobs->job->job_title }}</td>
                        <td>{{ $jobs->job->company_address }}</td>
                        <td>{{ $jobs->job->role }}</td>
                        <td>{{ $jobs->job->responsibility }}</td>
                        <td>{{ $jobs->job->experience }}</td>
                        <td>
                            <form action="{{ route('employee.jobs.delete', $jobs->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
