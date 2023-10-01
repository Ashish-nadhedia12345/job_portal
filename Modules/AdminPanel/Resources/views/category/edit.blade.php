@extends('adminpanel::layouts.master')
@section('content')
    <div class="container-fluid">
        <h1>Edit Blog : {{ $jobCategory->title }}</h1>
        <form action="{{ route('admin.jobcategory.edit', $jobCategory->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('patch')
            @include('adminpanel::layouts.form-errors')
            <table class="table table-bordered">
                <tr>
                    <td>
                        <input type="text" name="title" placeholder="title" class="form-control" value="{{ $jobCategory->title }}">
                    </td>
                </tr>
                <tr>
                    <td>
                        <textarea name="description" id="" cols="30" rows="10" class="form-control" placeholder="description">{{ $jobCategory->description }}</textarea>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="file" name="image" placeholder="image" class="form-control">
                    </td>
                </tr>
                <tr>
                    <td>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>
@endsection

