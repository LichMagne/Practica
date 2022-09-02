
@if (session()->has('message') && session()->has('title'))
<div wire:ignore.self class="modal fade" id="messageModal" tabindex="-1" role="dialog" aria-labelledby="createLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createLabel"> {{ session('title') }} </h5>
                <button type="button"  class="btn-close btn-close-whit" data-bs-dismiss="modal"  aria-label="Close"> </button>
            </div>
           <div class="modal-body">
            <h5>{{ session('message') }}</h5>
            </div>
        </div>
    </div>
</div>

@endif
