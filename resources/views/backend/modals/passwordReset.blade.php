<div class="modal fade" id="reset-user-{{$user->id}}" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Password Reset</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body ">
                <p> Are you sure you want to reset <b>{{$user->name}}</b> password ?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                <a href="{{route('admin.user.password.reset',['id'=>$user->id] )}}">
                    <button type="submit" class="btn btn-primary">Yes</button>
                </a>
            </div>
        </div>
    </div>
</div>
