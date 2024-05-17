<div class="modal fade" id="delete-user-{{$user->id}}" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Delete User</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p> Are you sure you want to permanently delete <b>{{$user->name}}</b>?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                <a href="{{route('admin.user.destroy',['id'=>$user->id] )}}">
                    <button type="submit" class="btn btn-primary">Yes</button>
                </a>
            </div>
        </div>
    </div>
</div>
