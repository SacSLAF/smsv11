@extends('layouts.app')
@section('content')
    <div class="container-fluid p-0">
        <div class="mb-3">
            <h1 class="h3 d-inline align-middle">Roles</h1>
        </div>
        @include('panel.message')
        <div class="row">
            <div class="col-12 col-lg-12 col-xxl d-flex">
                <div class="card flex-fill">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Roles List</h5>
                        <a href="{{ url('panel/roles/add') }}" class="btn btn-info" style="float: right;">Add new role</a>
                    </div>
                    <table class="table table-hover my-0">
                        <thead>
                            <tr>
                                <th>S No</th>
                                <th class="d-none d-xl-table-cell">Role Name</th>
                                <th class="d-none d-xl-table-cell">Created Date</th>
                                <th class="d-none d-xl-table-cell">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($getRecord as $value)
                            <tr>
                                <td>{{ $value->id }}</td>
                                <td class="d-none d-xl-table-cell">{{ $value->name }}</td>
                                <td class="d-none d-xl-table-cell">{{ $value->created_at }}</td>
                                <td>
                                    <a href="{{url('panel/roles/edit/'.$value->id)}}" class="btn btn-primary btn-sm">Edit</a>
                                    <a href="{{url('panel/roles/delete/'.$value->id)}}" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
