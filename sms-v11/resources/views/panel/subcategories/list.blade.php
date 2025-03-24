@extends('layouts.app')
@section('content')
    <div class="container-fluid p-0">
        <div class="mb-3">
            <h1 class="h3 d-inline align-middle">Sub Categories</h1>
        </div>
        @include('panel.message')
        <div class="row">
            <div class="col-12 col-lg-12 col-xxl d-flex">
                <div class="card flex-fill">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Sub Category List</h5>
                        <a href="{{ url('panel/users/add') }}" class="btn btn-info" style="float: right;">Add new sub category</a>
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
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
