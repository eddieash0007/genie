@extends('layouts.def')

@section('sidebar')
    @include('layouts.sidenav')
@endsection

@section('nav')
    @include('layouts.topnavAdmin')
@endsection

@section('content')
<style>
    .dot {
        height: 20px;
        width: 20px;
        border-radius: 50%;
        display: inline-block;
        margin-right: 10px;
    }

    .dot.loans {
        background-color: #FF6384;
    }

    .dot.ao {
        background-color: #36A2EB;
    }

    .dot.qa {
        background-color: #FFCE56;
    }

    .dot.ms {
        background-color: #E8EAED;
    }

    .dot.p {
        background-color: #9966FF;
    }

    .dot.c {
        background-color: #FF9F40;
    }

    .dot.csd {
        background-color: #1ABC9C;
    }

    .dot.co {
        background-color: #E74C3C;
    }
</style>

<div class="container-fluid p-0">

    <h1 class="h3 mb-3"><strong>Analytics</strong> Dashboard</h1>

    <div class="row">
        <div class="col-12 col-md-6 col-xxl-5 d-flex order-2 order-xxl-3">
            <div class="w-100">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col mt-0">
                                        <h5 class="card-title">Total Staff (Registered)</h5>
                                    </div>

                                    <div class="col-auto">
                                        <div class="stat text-primary">
                                            <i class="align-middle" data-feather="truck"></i>
                                        </div>
                                    </div>
                                </div>
                                <h1 class="mt-1 mb-3">{{$staff}}</h1>
                                
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col mt-0">
                                        <h5 class="card-title">National Service Personnel</h5>
                                    </div>

                                    <div class="col-auto">
                                        <div class="stat text-primary">
                                            <i class="align-middle" data-feather="users"></i>
                                        </div>
                                    </div>
                                </div>
                                <h1 class="mt-1 mb-3">{{$nsp}}</h1>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col mt-0">
                                        <h5 class="card-title">Contract Staff</h5>
                                    </div>

                                    <div class="col-auto">
                                        <div class="stat text-primary">
                                            <i class="align-middle" data-feather="dollar-sign"></i>
                                        </div>
                                    </div>
                                </div>
                                <h1 class="mt-1 mb-3">{{$contractStaff}}</h1>
                               
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col mt-0">
                                        <h5 class="card-title">Permanent Staff</h5>
                                    </div>

                                    <div class="col-auto">
                                        <div class="stat text-primary">
                                            <i class="align-middle" data-feather="shopping-cart"></i>
                                        </div>
                                    </div>
                                </div>
                                <h1 class="mt-1 mb-3">{{$permanent}}</h1>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-6 col-xxl-5 d-flex ">
            <div class="card flex-fill w-100">
                <div class="card-header">

                    <h5 class="card-title mb-0">Units</h5>
                </div>
                <div class="card-body d-flex">
                    <div class="align-self-center w-100">
                        <div class="py-3">
                            <div class="chart chart-xs">
                                <canvas id="chartjs-dashboard-pie"></canvas>
                            </div>
                        </div>

                        <table class="table mb-0">
                            <tbody>
                                
                                <tr>
                                    <td> 
                                        <div class="d-flex">
                                            <span class="dot loans"></span> Loans
                                        </div>
                                    </td>
                                    <td class="text-end">{{$loans}}</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex">
                                            <span class="dot ao"></span> Account Opening / Maintenance
                                        </div>  
                                    </td>
                                    <td class="text-end">{{$ao}}</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex">
                                            <span class="dot qa"></span> Quality Assurance
                                        </div>  
                                    </td>
                                    <td class="text-end">{{$qa}}</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex">
                                            <span class="dot ms"></span> Monitoring and Support
                                        </div>   
                                    </td>
                                    <td class="text-end">{{$ms}}</td>
                                </tr>
                                <tr>
                                    <td> 
                                        <div class="d-flex">
                                            <span class="dot p"></span> Payments
                                        </div>
                                    </td>
                                    <td class="text-end">{{$p}}</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex">
                                            <span class="dot c"></span> Clearing
                                        </div>
                                    </td>
                                    <td class="text-end">{{$c}}</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex">
                                            <span class="dot csd"></span> CSD - Account Opening / Maintenance
                                        </div>
                                    </td>
                                    <td class="text-end">{{$csd}}</td>
                                </tr>
                                <tr>
                                    <td> 
                                        <div class="d-flex">
                                            <span class="dot co"></span> Custody Operations
                                        </div>
                                    </td>
                                    <td class="text-end">{{$co}}</td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        
    </div>

    

</div>


@endsection

@section('script')
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Pie chart
        new Chart(document.getElementById("chartjs-dashboard-pie"), {
            type: "pie",
            data: {
                labels: ["Loans", "Account Opening / Maintenance", "Quality Assurance", "Monitoring and Support", "Payments", "Clearing", "CSD - Account Opening / Maintenance", "Custody Operations"],
                datasets: [{
                    data: [{{$loans}}, {{$ao}}, {{$qa}}, {{$ms}}, {{$p}}, {{$c}}, {{$csd}}, {{$co}}],
                    backgroundColor: [
                        // window.theme.primary,
                        // window.theme.warning,
                        // window.theme.danger,
                        // "#E8EAED"
                        '#FF6384', // Red
                        '#36A2EB', // Blue
                        '#FFCE56', // Yellow
                        '#E8EAED', // Green
                        '#9966FF', // Purple
                        '#FF9F40', // Orange
                        '#1ABC9C', // Teal
                        '#E74C3C'  // Magenta
                    ],
                    borderWidth: 5,
                    borderColor: window.theme.white
                }]
            },
            options: {
                responsive: !window.MSInputMethodContext,
                maintainAspectRatio: false,
                legend: {
                    display: false
                },
                cutoutPercentage: 70
            }
        });
    });
</script>
@endsection

