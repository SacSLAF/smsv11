@extends('layouts.app')
@section('content')
    <div class="container-fluid p-0">
        <div class="mb-3">
            <h1 class="h3 d-inline align-middle">Add Roles</h1>
        </div>
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Add Role</h5>
                        </div>
                        <div class="card-body">
                            <form action="{{ url('panel/roles/add') }}" method="post">
                                @csrf
                                <div class="form-group mb-3">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="permission"><b>Permissions</b></label>
                                    <hr>
                                    @foreach ($getPermission as $value)
                                        <div class="row" style="margin-bottom: 10px">
                                            <div class="col-md-4">
                                                {{ $value['name'] }}
                                            </div>
                                            <div class="col-md-8">
                                                <div class="row">
                                                    @foreach ($value['group'] as $group)
                                                        <div class="col-md-3">
                                                            <input type="checkbox" name="permission[]"
                                                                value="{{ $group['id'] }}">
                                                            {{ $group['name'] }}
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                    @endforeach

                                </div>
                                <button class="btn btn-primary" type="submit">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
