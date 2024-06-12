<div class="modal fade" id="registration-{{$registration->id}}" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">{{$registration->first_name}} {{$registration->other_name}} {{$registration->last_name}}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body m-3">
                <div class="row" >
                    <div class="col-md-6">
                        <h5 class="card-title mb-0">Staff ID</h5>
                        <label for="">{{$registration->staff_id}}</label>
                    </div>
                    <div class="col-md-6">
                        <h5 class="card-title mb-0">Employment Status</h5>
                        <label for="">{{$registration->employment_status}}</label>
                    </div>
                </div>

                <div class="row" class="mb-4">
                    <div class="col-md-6">
                        <h5 class="card-title mb-0">Unit</h5>
                        <label for="">{{$registration->unit}}</label>
                    </div>
                    <div class="col-md-6">
                        <h5 class="card-title mb-0">DOB</h5>
                        <label for="">{{$registration->dob}}</label>
                    </div>
                </div>

                <div class="row" class="mb-4">
                    <div class="col-md-6">
                        <h5 class="card-title mb-0">Grade</h5>
                        <label for="">{{$registration->grade}}</label>
                    </div>
                    <div class="col-md-6">
                        <h5 class="card-title mb-0">Contact</h5>
                        <label for="">{{$registration->contact}}</label>
                    </div>
                </div>

                <div class="row" class="mb-4">
                    <div class="col-md-12">
                        <h5 class="card-title mb-0">Address</h5>
                        <label for="">{{$registration->address}}</label>
                    </div>

                </div>

                <div class="row" class="mb-4">
                    <div class="col-md-6">
                        <h5 class="card-title mb-0">Contact Person's Name</h5>
                        <label for="">{{$registration->c_p_name}}</label>
                    </div>
                    <div class="col-md-6">
                        <h5 class="card-title mb-0">Contact Person's Telephone</h5>
                        <label for="">{{$registration->c_p_tel}}</label>
                    </div>



                </div>







            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
