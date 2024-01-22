@if (session('success'))
    <div class="alert alert-success alert-dismissible mt-3 position-absolute bottom-0 end-0" style="max-width: 20rem">
        <div class="alert-text">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    </div>
@endif
@if (session('error'))
    <div class="alert alert-danger alert-dismissible mt-3 position-absolute bottom-0 end-0" style="max-width: 20rem">
        <div class="alert-text">
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    </div>
@endif
