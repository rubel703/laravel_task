@if (Session::get('notification'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ Session::get('notification') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
