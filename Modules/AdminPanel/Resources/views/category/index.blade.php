@extends('adminpanel::layouts.master')
@section('content')
    <h1>All Job Category</h1>
    <div>
        <div class="row justify-content-end ">
            <div>
                <a href="{{ route('admin.jobcategory.create') }}" class="btn btn-primary">Create Category</a>
            </div>
        </div>
        <div class="col-12">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th width="10%">Id</th>
                        <th width="20%">Title</th>
                        <th width="30%">description</th>
                        <th width="20%">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($category as $row)
                        <tr>
                            <td>{{ $row->id }}</td>
                            <td>{{ $row->title }}</td>
                            <td>{{ $row->description }}</td>
                            <td class="input-group">
                                <a href="{{ route('admin.jobcategory.edit', $row->id) }}"
                                    class="btn btn-primary">Edit</a>&nbsp;
                                <form action="{{ route('admin.jobcategory.delete', $row->id) }}" method="post">
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
    </div>
    <div class="row justify-content-center m-3 ">
        <div>
            {{ $category->links() }}
        </div>
    </div>
@endsection
