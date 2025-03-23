@if (!empty(session('success')))
    <div class="alert alert-success" role="alert" style="background-color: #d4edda; color: #155724; border: 1px solid #c3e6cb; padding: 10px; border-radius: 5px;">
        {{ session('success') }}
    </div>
@endif

@if (!empty(session('error')))
    <div class="alert alert-danger text-danger" role="alert" style="background-color: #f8d7da; color: #721c24; border: 1px solid #f5c6cb; padding: 10px; border-radius: 5px;">
        {{ session('error') }}
    </div>
@endif
