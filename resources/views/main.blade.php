@extends('layouts.def')



@section('nav')
    @include('layouts.topnav')
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Employee Details</h5>
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
                            <input type="text" class="form-control" name="staff_id" style="text-transform: uppercase" pattern="^(FC|NSG|CS).*">
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
                                <option value="Quality Assurance">Quality Assurance</option>
                                <option value="Monitoring and Support">Monitoring and Support</option>
                                <option value="Payments">Payments</option>
                                <option value="Clearing">Clearing</option>
                                <option value="CSD - Account Opening / Maintenance">CSD - Account Opening / Maintenance</option>
                                <option value="Custody Operations">Custody Operations</option>
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
                            <input type="date" class="form-control" name="dob">
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
                            <input type="tel" class="form-control" placeholder="020-123-4567" id="phone" name="contact" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" value="{{old('contact')}}"
                            style="input:invalid + span:after{content:'x'; color:#f00; padding-left:5px;} input:valid + span:after{content:'✓'; color:rgb(0, 255, 34); padding-left:5px;}"
                            >
                            <span style="color: #d1d1d1f1; margin-bottom:0%;">Format xxx-xxx-xxxx</span>
                           
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
                            
                            <input type="tel" class="form-control" placeholder="020-123-4567" id="phone" name="c_p_tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" value="{{old('contact')}}"
                            style="input:invalid + span:after{content:'x'; color:#f00; padding-left:5px;} input:valid + span:after{content:'✓'; color:rgb(0, 255, 34); padding-left:5px;}"
                            >
                            <span style="color: #d1d1d1f1; margin-bottom:0%;">Format xxx-xxx-xxxx</span>
                           
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