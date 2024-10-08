@extends('layouts.def')

@section('sidebar')
    @include('layouts.sidenav')
@endsection

@section('nav')
    @include('layouts.topnavAdmin')
@endsection

@section('content')
    <h1 class="h3 mb-3">Results for '{{$query}}' in Users</h1>
   
    <div class="container-fluid p-0">



        <div class="card">
            <div class="card-header pb-0">
                <div class="card-actions float-end">
                    <button onclick="window.location.href='{{route('admin.users')}}'" class="btn btn-secondary m-15" type="submit">Clear Results</button>
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
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>  
                                        <th style="width: 80px;">Name</th>
                                        <th style="width: 95px;">Email</th>
                                        <th style="width: 121px;">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($users->count()>0)
  
                                        @foreach ($users as $user)
                                            <tr >
                                                <td class="dtr-control sorting_1" tabindex="0"><strong>{{$user->name}}</strong></td>
                                                <td>{{$user->email}}</td>
                                                    <td>
                                                        @if (Auth::id() !== $user->id)
                                                            
                                                                <button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#reset-user-{{$user->id}}">
                                                                    Reset Password
                                                                </button> 
                                                            
                                                        @else
                                                        <button type="button" class="btn btn-sm btn-warning disabled" data-bs-toggle="modal" data-bs-target="#reset-user-{{$user->id}}">
                                                            Reset Password
                                                        </button> 
                                                        @endif
            
                                                        @if (Auth::id() !== $user->id)
                                                            <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#delete-user-{{$user->id}}">
                                                            Delete User
                                                            </button>   
                                                        @else
                                                            <button type="button" class="btn btn-sm btn-danger disabled">Delete User</button>    
                                                        @endif
                                                    
                                                    </td>
                                                
                                            </tr>
                                            @include('backend.modals.deleteUser')
                                            @include('backend.modals.passwordReset')
                                        @endforeach
                                    @else
                                        <p>No Results Found</p>
                                    @endif
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        {{-- <div class="col-sm-12 col-md-5">
                            <div class="dataTables_info" id="datatables-orders_info" role="status" aria-live="polite">
                                Showing 1 to 10 of 15 entries</div>
                        </div> --}}{{$users->links()}}
                        <div class="col-sm-12 col-md-7">
                           
                            <div class="dataTables_paginate paging_simple_numbers" id="datatables-orders_paginate">
                                <ul class="pagination">
                                    
                                    {{-- <li class="paginate_button page-item previous disabled" id="datatables-orders_previous">
                                        <a aria-controls="datatables-orders" aria-disabled="true" aria-role="link"
                                            data-dt-idx="previous" tabindex="0" class="page-link">Previous</a></li>
                                    <li class="paginate_button page-item active"><a href="#"
                                            aria-controls="datatables-orders" aria-role="link" aria-current="page"
                                            data-dt-idx="0" tabindex="0" class="page-link">1</a></li>
                                    <li class="paginate_button page-item "><a href="#" aria-controls="datatables-orders"
                                            aria-role="link" data-dt-idx="1" tabindex="0" class="page-link">2</a></li>
                                    <li class="paginate_button page-item next" id="datatables-orders_next"><a href="#"
                                            aria-controls="datatables-orders" aria-role="link" data-dt-idx="next"
                                            tabindex="0" class="page-link">Next</a></li> --}}
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
        
    </div>
    
@endsection