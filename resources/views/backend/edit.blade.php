@extends('layouts.def')

@section('sidebar')
@include('layouts.sidenav')
@endsection

@section('nav')
@include('layouts.topnavAdmin')
@endsection

@section('content')

<h1 class="h3 mb-3"><strong>Edit :</strong> {{$registrations->staff_id}}</h1>
<div class="row">
    <div class="col-12">
        <div class="card">
            {{-- <div class="card-header">
                <h5 class="card-title mb-0">Edit: {{$registrations
                ->staff_id}}</h5>
            </div> --}}
            <div class="card-body">
            <form action="{{route('admin.registration.update', $registrations->id)}}" method="post">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-4 mb-2">
                        <div class="form-group">
                            <label for="" class="mb-2">First Name</label>
                            <input type="text" name="first_name" class="form-control" value="{{$registrations->first_name}}">
                            @error('first_name')
                                    <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <div class="form-group">
                            <label for="" class="mb-2">Last Name</label>
                            <input type="text" class="form-control" name="last_name" value="{{$registrations->last_name}}">
                            @error('last_name')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <div class="form-group">
                            <label for="" class="mb-2">Other Names</label>
                            <input type="text" class="form-control" name="other_name" value="{{$registrations->other_name}}">
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
                            <input type="text" class="form-control" name="staff_id" value="{{$registrations->staff_id}}">
                            @error('staff_id')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <div class="form-group">
                            <label for="" class="mb-2">Employment Status</label>
                            <select class="form-select mb-3" name="employment_status">
                                <option value="Permanent" {{ $registrations->employment_status == 'Permanent' ? 'selected' : '' }}>Permanent</option>
                                <option value="Contract" {{ $registrations->employment_status == 'Contract' ? 'selected' : '' }}>Contract</option>
                                <option value="National Service" {{ $registrations->employment_status == 'National Service' ? 'selected' : '' }}>National Service</option>
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
                                <option value="Loans" {{ $registrations->unit == 'Loans' ? 'selected' : '' }}>Loans</option>
                                <option value="Account Opening / Maintenance" {{ $registrations->unit == 'Account Opening / Maintenance' ? 'selected' : '' }}>Account Opening / Maintenance</option>
                                <option value="Quality Assurance" {{ $registrations->unit == 'Quality Assurance' ? 'selected' : '' }}>Quality Assurance</option>
                                <option value="Monitoring and Support" {{ $registrations->unit == 'Monitoring and Support' ? 'selected' : '' }}>Monitoring and Support</option>
                                <option value="Payments" {{ $registrations->unit == 'Payments' ? 'selected' : '' }}>Payments</option>
                                <option value="Clearing" {{ $registrations->unit == 'Clearing' ? 'selected' : '' }}>Clearing</option>
                                <option value="CSD - Account Opening / Maintenance" {{ $registrations->unit == 'CSD - Account Opening / Maintenance' ? 'selected' : '' }}>CSD - Account Opening / Maintenance</option>
                                <option value="Custody Operations" {{ $registrations->unit == 'Custody Operations' ? 'selected' : '' }}>Custody Operations</option>
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
                            <input type="text" class="form-control" name="dob" value="{{$registrations->dob}}">
                            @error('dob')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <div class="form-group">
                            <label for="" class="mb-2">Grade</label>
                            <select class="form-select mb-3" name="grade">
                                <option value="N/A">N/A</option>
                                <option value="4" {{ $registrations->grade == '4' ? 'selected' : '' }}>4</option>
                                <option value="5" {{ $registrations->grade == '5' ? 'selected' : '' }}>5</option>
                                <option value="6" {{ $registrations->grade == '6' ? 'selected' : '' }}>6</option>
                                <option value="7" {{ $registrations->grade == '7' ? 'selected' : '' }}>7</option>
                                <option value="8" {{ $registrations->grade == '8' ? 'selected' : '' }}>8</option>
                                <option value="9" {{ $registrations->grade == '9' ? 'selected' : '' }}>9</option>
                                <option value="10" {{ $registrations->grade == '10' ? 'selected' : '' }}>10</option>
                            </select>
                            @error('unit')
                                    <p class="text-danger">{{ "The unit field is required" }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <div class="form-group">
                            <label for="" class="mb-2">Contact</label>
                            <input type="text" class="form-control" name="contact" value="{{$registrations->contact}}">
                            @error('contact')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-4 mb-2">
                        <div class="form-group">
                            <label for="" class="mb-2">Address</label>
                            <textarea class="form-control" rows="2" name="address">{{$registrations->contact}}</textarea>
                            @error('address')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-4 mb-2">
                        <div class="form-group">
                            <label for="" class="mb-2">Contact Person's Name</label>
                            <input type="text" class="form-control" name="c_p_name" value="{{$registrations->contact}}">
                            @error('c_p_name')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-4 mb-2">
                        <div class="form-group">
                            <label for="" class="mb-2">Contact Person's Telephone</label>
                            <input type="text" class="form-control" name="c_p_tel" value="{{$registrations->contact}}">
                            @error('c_p_tel')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="text-end">
                    <button class="btn btn-success" type="submit">Update</button>
                </div>
            </form>

            </div>
        </div>
    </div>
</div>
@endsection