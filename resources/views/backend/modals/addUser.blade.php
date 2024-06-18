<div class="modal fade" id="add-user" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Create a new user</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body ">
                <form class="d-flex" role="search" action="{{route('admin.user.create')}}" method="POST">
                    @csrf
                    <div class="col-md-8 mb-2">
                        <input class="form-control me-2" name="name" type="text" placeholder="Name" aria-label="Search" class="m-4">
                    </div>
                    <div class="col-md-8 mb-2">
                        <input class="form-control me-2" name="email" type="email" placeholder="E-mail" aria-label="Search">
                        @error('email')
                                <p class="text-danger">{{ $message }}</p>
                        @enderror 
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-success">Submit</button>
            </form>
            </div>
        </div>
    </div>
</div>