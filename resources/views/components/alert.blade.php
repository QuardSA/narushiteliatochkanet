@if (session('success'))
    <div class="alert alert-success alert-dismissible mt-3">
        <div class="alert-text">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    </div>
@endif
@if (session('error'))
    <div class="alert alert-danger alert-dismissible mt-3">
        <div class="alert-text">
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    </div>
@endif
