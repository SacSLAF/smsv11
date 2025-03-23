@extends('layouts.app')
@section('content')
    <div class="container-fluid p-0">
        <div class="mb-3">
            <h1 class="h3 d-inline align-middle">Edit Roles</h1>
        </div>
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Edit Role</h5>
                        </div>
                        <div class="card-body">
                            <form action="{{url('panel/roles/edit/'.$getSingle->id)}}" method="post">
                                @csrf
                                {{-- @method('PUT') --}}
                                <div class="form-group mb-3">
                                    <label for="name">Role Name</label>
                                    <input type="text" class="form-control" id="name" name="name" value="{{$getSingle->name}}" required>
                                </div>
                                <button class="btn btn-primary" type="submit">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
