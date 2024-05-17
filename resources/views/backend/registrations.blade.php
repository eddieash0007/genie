@extends('layouts.def')

@section('sidebar')
@include('layouts.sidenav')
@endsection

@section('nav')
@include('layouts.topnavAdmin')
@endsection

@section('content')

<style>.row{margin-bottom: 1rem;}</style>

<h1 class="h3 mb-3">Registrations</h1>


<div class="container-fluid p-0">



    <div class="card">
        <div class="card-header pb-0">
            <div class="card-actions float-end">
                <input type="text" class="form-control" placeholder="Input">
                {{-- <div class="dropdown position-relative">
                        <a href="#" data-bs-toggle="dropdown" data-bs-display="static">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal align-middle"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                        </a>

                        <div class="dropdown-menu dropdown-menu-end">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div> --}}
            </div>
            <h5 class="card-title mb-0">Orders</h5>
        </div>
        <div class="card-body">
            <div id="datatables-orders_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <div class="dataTables_length" id="datatables-orders_length"></div>
                    </div>
                   
                </div>
                <div class="row dt-row">
                    <div class="col-sm-12">
                        <table id="datatables-orders"
                            class="table table-responsive table-striped dataTable no-footer dtr-inline" width="100%"
                            aria-describedby="datatables-orders_info" style="width: 100%;">
                            <thead>
                                <tr>
                                    <th class="sorting sorting_asc" tabindex="0" aria-controls="datatables-orders"
                                        rowspan="1" colspan="1" style="width: 49px;" aria-sort="ascending"
                                        aria-label="#: activate to sort column descending">Staff ID</th>
                                    <th class="sorting" tabindex="0" aria-contr ols="datatables-orders" rowspan="1"
                                        colspan="1" style="width: 80px;"
                                        aria-label="Billing Name: activate to sort column ascending">Name</th>
                                    <th class="sorting" tabindex="0" aria-controls="datatables-orders" rowspan="1"
                                        colspan="1" style="width: 95px;"
                                        aria-label="Date: activate to sort column ascending">Unit</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 121px;"
                                        aria-label="Actions">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($registrations as $registration)
                                    <tr class="odd">
                                        <td class="dtr-control sorting_1" tabindex="0"><strong>{{$registration->staff_id}}</strong></td>
                                        <td>{{$registration->first_name}} {{$registration->last_name}}</td>
                                        <td>{{$registration->unit}}</td>
                                        <td>
                                            <button type="button" data-bs-toggle="modal" data-bs-target="#registration-{{$registration->id}}" class="btn btn-primary btn-sm">View</button>
                                            <a href="{{route('admin.registration.edit', ['id'=>$registration->id])}}" class="btn btn-primary btn-sm">Edit</a>
                                        </td>
                                    </tr>
                                    @include('backend.modals.view')
                                @endforeach
                                
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row">
                    {{$registrations->links()}}
                    {{-- <div class="col-sm-12 col-md-5">
                        <div class="dataTables_info" id="datatables-orders_info" role="status" aria-live="polite">
                            Showing 1 to 10 of 15 entries</div>
                    </div> --}}
                    {{-- <div class="col-sm-12 col-md-7">
                        <div class="dataTables_paginate paging_simple_numbers" id="datatables-orders_paginate">
                            <ul class="pagination">
                                <li class="paginate_button page-item previous disabled" id="datatables-orders_previous">
                                    <a aria-controls="datatables-orders" aria-disabled="true" aria-role="link"
                                        data-dt-idx="previous" tabindex="0" class="page-link">Previous</a></li>
                                <li class="paginate_button page-item active"><a href="#"
                                        aria-controls="datatables-orders" aria-role="link" aria-current="page"
                                        data-dt-idx="0" tabindex="0" class="page-link">1</a></li>
                                <li class="paginate_button page-item "><a href="#" aria-controls="datatables-orders"
                                        aria-role="link" data-dt-idx="1" tabindex="0" class="page-link">2</a></li>
                                <li class="paginate_button page-item next" id="datatables-orders_next"><a href="#"
                                        aria-controls="datatables-orders" aria-role="link" data-dt-idx="next"
                                        tabindex="0" class="page-link">Next</a></li>
                            </ul>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
   
    
</div>


@endsection
