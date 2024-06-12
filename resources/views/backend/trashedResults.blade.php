@extends('layouts.def')

@section('sidebar')
@include('layouts.sidenav')
@endsection

@section('nav')
@include('layouts.topnavAdmin')
@endsection

@section('content')
<style>.row{margin-bottom: 1rem;}</style>

<h1 class="h3 mb-3">Results for '{{$query}}' in Trashed Registrations</h1>


<div class="container-fluid p-0">



    <div class="card">
        <div class="card-header pb-0">
            <div class="card-actions float-end">
                <button onclick="window.location.href='{{route('admin.registrations.trashed')}}'" class="btn btn-secondary m-15"
                type="submit">Clear Results</button>
            </div>
            
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
                        <table class="table table-striped table-hover" width="100%"
                            style="width: 100%;">
                            <thead>
                                <tr>
                                    <th style="width: 20%;">Staff ID</th>
                                    <th style="width: 30%;">Name</th>
                                    <th style="width: 30%;">Unit</th>
                                    <th style="width: 20%;">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($registrations->count()>0)
                                @foreach ($registrations as $registration)
                                    <tr class="odd">
                                        <td class="dtr-control sorting_1" tabindex="0"><strong>{{$registration->staff_id}}</strong></td>
                                        <td>{{$registration->first_name}} {{$registration->last_name}}</td>
                                        <td>{{$registration->unit}}</td>
                                        <td>
                                            <a href="{{route('admin.registration.trash.restore', ['id'=>$registration->id])}}" class="btn btn-warning btn-sm">Restore</a>
                                            <button type="button" data-bs-toggle="modal" data-bs-target="#registration-{{$registration->id}}" class="btn btn-danger btn-sm">Delete</button>

                                            
                                        </td>
                                    </tr>
                                    @include('backend.modals.deleteTrash')
                                @endforeach
                                @else
                                <tr>
                                    <td colspan="4" class="text-center"><b>No Results Found</b></td>
                                </tr>
                                @endif
                                
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