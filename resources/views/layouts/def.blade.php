<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
    <meta name="author" content="AdminKit">
    <meta name="keywords"
        content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" href="img/icons/icon-48x48.png" />

    <link rel="canonical" href="https://demo-basic.adminkit.io/pages-blank.html" />

    <title>CPC Register</title>

    
    <link href="{{asset('backend/app.css')}}" rel="stylesheet">
    <link href="{{asset('backend/toastr.css')}}" rel="stylesheet">
    <script src="{{asset('backend/jquery.min.js')}}"></script>
    <script src="{{asset('backend/toastr.js')}}"></script>
      
    <link href="{{asset('backend/all.min.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>

    <div class="wrapper">
        @yield('sidebar')

        <div class="main">
           
            
          
            @yield('nav')


            <main class="content">
                <div class="container-fluid p-0">

                    {{-- <h1 class="h3 mb-3">Blank Page</h1> --}}

                    @yield('content')
                    

                </div>
            </main>

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row text-muted">
                        <div class="col-6 text-start">
                            <p class="mb-0">
                                {{-- CPC &copy; --}}
                            </p>
                        </div>
                        {{-- <div class="col-6 text-end">
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <a class="text-muted" href="https://adminkit.io/" target="_blank">Support</a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="text-muted" href="https://adminkit.io/" target="_blank">Help Center</a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="text-muted" href="https://adminkit.io/" target="_blank">Privacy</a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="text-muted" href="https://adminkit.io/" target="_blank">Terms</a>
                                </li>
                            </ul>
                        </div> --}}
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <script src="{{asset('backend/app.js')}}"></script>
    <script>
        @if(session('success'))
            toastr.success('{{ session('success') }}', 'Success', {
                positionClass: 'toast-top-right',
                closeButton: true,
                progressBar: true,
                timeOut: 3000 // Duration in milliseconds
            });
        @elseif(session('error'))
            toastr.error('{{ session('error') }}', 'Error', {
                    positionClass: 'toast-top-right',
                    closeButton: true,
                    progressBar: true,
                    timeOut: 3000 // Duration in milliseconds
                });
        @endif
    </script>

    @yield('script')

</body>

</html>
