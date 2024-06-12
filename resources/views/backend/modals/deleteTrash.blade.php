<div class="modal fade" id="registration-{{$registration->id}}" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Delete User</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p> Are you sure you want to permanently delete records for <b>{{$registration->id}} ({{$registration->first_name}} {{$registration->last_name}})</b>?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                <a href="{{route('admin.registration.trash.destroy', ['id'=>$registration->id])}}" class="btn btn-primary">Delete</a>
            </div>
        </div>
    </div>
</div>
