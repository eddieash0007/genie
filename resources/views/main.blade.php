@extends('layouts.def')



@section('nav')
    @include('layouts.topnav')
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Empty card</h5>
            </div>
            <div class="card-body">
            <form action="{{route('store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-4 mb-2">
                        <div class="form-group">
                            <label for="" class="mb-2">First Name</label>
                            <input type="text" name="first_name" class="form-control">
                            @error('first_name')
                                    <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <div class="form-group">
                            <label for="" class="mb-2">Last Name</label>
                            <input type="text" class="form-control" name="last_name">
                            @error('last_name')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <div class="form-group">
                            <label for="" class="mb-2">Other Names</label>
                            <input type="text" class="form-control" name="other_name">
                            @error('other_name')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 mb-2">
                        <div class="form-group">
                            <label for="" class="mb-2">Staff ID</label>
                            <input type="text" class="form-control" name="staff_id">
                            @error('staff_id')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <div class="form-group">
                            <label for="" class="mb-2">Employment Status</label>
                            <select class="form-select mb-3" name="employment_status">
                                <option selected="" value="">Select</option>
                                <option value="Permanent">Permanent</option>
                                <option value="Contract">Contract</option>
                                <option value="National Service">National Service</option>
                            </select>
                            @error('employment_status')
                                    <p class="text-danger">{{ "The employment status field is required" }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <div class="form-group">
                            <label for="" class="mb-2">Unit</label>
                            <select class="form-select mb-3" name="unit">
                                <option selected="" value="">Select</option>
                                <option value="Loans">Loans</option>
                                <option value="Account Opening / Maintenance">Account Opening / Maintenance</option>
                                <option value="Quality Control">Quality Control</option>
                                <option value="Monitoring and Support">Monitoring and Support</option>
                                <option value="Payments">Payments</option>
                                <option value="Clearing">Clearing</option>
                                <option value="Account Opening / Maintenance / CSD">Account Opening / Maintenance / CSD</option>
                                <option value="Loans / Account Openinng / Maintenance">Loans / Account Openinng / Maintenance</option>
                            </select>
                            @error('unit')
                                    <p class="text-danger">{{ "The unit field is required" }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 mb-2">
                        <div class="form-group">
                            <label for="" class="mb-2">DOB</label>
                            <input type="text" class="form-control" name="dob">
                            @error('dob')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <div class="form-group">
                            <label for="" class="mb-2">Grade</label>
                            <select class="form-select mb-3" name="grade">
                                <option selected="">Select</option>
                                <option value="N/A">N/A</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                            @error('unit')
                                    <p class="text-danger">{{ "The unit field is required" }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <div class="form-group">
                            <label for="" class="mb-2">Contact</label>
                            <input type="text" class="form-control" name="contact">
                            @error('contact')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-4 mb-2">
                        <div class="form-group">
                            <label for="" class="mb-2">Address</label>
                            <textarea class="form-control" rows="2" name="address"></textarea>
                            @error('address')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-4 mb-2">
                        <div class="form-group">
                            <label for="" class="mb-2">Contact Person's Name</label>
                            <input type="text" class="form-control" name="c_p_name">
                            @error('c_p_name')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-4 mb-2">
                        <div class="form-group">
                            <label for="" class="mb-2">Contact Person's Telephone</label>
                            <input type="text" class="form-control" name="c_p_tel">
                            @error('c_p_tel')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="text-end">
                    <button class="btn btn-secondary" type="submit">Submit</button>
                </div>
            </form>

            </div>
        </div>
    </div>
</div>
@endsection