<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dashboard</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{URL::to('assets/vendor/bootstrap/css/bootstrap.min.css')}}">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="{{URL::to('assets/vendor/font-awesome/css/font-awesome.min.css')}}">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="assets/css/fontastic.css')}}">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="{{URL::to('assets/https://fonts.googleapis.com/css?family=Roboto:300,400,500,700')}}">
    <!-- jQuery Circle-->
    <link rel="stylesheet" href="{{URL::to('assets/css/grasp_mobile_progress_circle-1.0.0.min.css')}}">
    <!-- Custom Scrollbar-->
    <link rel="stylesheet" href="{{URL::to('assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css')}}">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{URL::to('assets/css/style.default.css')}}" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{URL::to('assets/css/custom.css')}}">
    <!-- library  -->
    

    <!-- for export -->
    <link href="{{URL::to('assets1/css/plugins/dataTables/datatables.min.css')}}" rel="stylesheet">
    <link href="{{URL::to('assets1/css/style.css')}}" rel="stylesheet">
    
   
  </head>
  <body>
    <!-- Side Navbar -->
    <nav class="side-navbar">
      <div class="side-navbar-wrapper">
        <!-- Sidebar Header    -->
        <div class="sidenav-header d-flex align-items-center justify-content-center">
          <!-- User Info-->
          <div class="sidenav-header-inner text-center">
            <h2 class="h5">Infrastruktur</h2>
            <span>TREG 5</span>
          </div>
          <!-- Small Brand information, appears on minimized sidebar-->
          <div class="sidenav-header-logo"><a href="assets/index.html" class="brand-small text-center"> <strong>A</strong><strong class="text-primary"></strong></a></div>
        </div>
        <!-- Sidebar Navigation Menus-->
        @yield('menu')
      </div>
    </nav>
    <div class="page">
      <!-- navbar-->
      @include('header.navbar')
      <!-- Counts Section -->
      @yield('contant')


    <!-- Modal Profile-->
    <div class="modal fade" id="profile" tabindex="-1" role="dialog" style="z-index: 1050; display: none;" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header text-write">
                    <h4 class="modal-title">Profile</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fa fa-close"></i></span>
                    </button>
                </div>
                
            </div>
        </div>
    </div> <!-- End Modal Profile-->

    <!-- JavaScript files-->
 
    <script src="{{URL::to('assets/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{URL::to('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{URL::to('assets/js/grasp_mobile_progress_circle-1.0.0.min.js')}}"></script>
    <script src="{{URL::to('assets/vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
    <script src="{{URL::to('assets/vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{URL::to('assets/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="{{URL::to('assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script src="{{URL::to('assets/js/charts-home.js')}}"></script>

    <!-- for export all -->
    <script src="{{URL::to('assets1/js/plugins/dataTables/datatables.min.js')}}"></script>
    <script src="{{URL::to('assets1/js/plugins/dataTables/dataTables.bootstrap4.min.js')}}"></script>

    <script>
        // select update js
        $(document).on('click', '.edit', function()
        {
            var _this = $(this).parents('tr');
            $('#id').val(_this.find('.id').text());
            $('#e_name').val(_this.find('.name').text());
            $('#e_sex').val(_this.find('.sex').text());
            $('#e_dateOfBirth').val(_this.find('.dateOfBirth').text());
            $('#e_email').val(_this.find('.email').text());
            $('#e_phone').val(_this.find('.phone').text());
            $('#e_jobPosition').val(_this.find('.jobPosition').text());
            $('#e_salary').val(_this.find('.salary').text());
        });
    </script>

    <!-- validate form employee -->
    <script>
        $("#validateForm").validate({
            rules: {
                name: {
                        required: true,
                    },
                    sex: {
                        required: true,
                    },
                    dateOfBirth: {
                        required: true,
                    },
                    email: {
                        required: true,
                    },
                    phone: {
                        required: true,
                    },
                    jobPosition: {
                        required: true,
                    },
                    salary: {
                        required: true,
                    },
            
            },
            messages: {
                name: {
                        required: "Please enter full name",
                    },
                    sex: {
                        required: "Please enter sex",
                    },
                    dateOfBirth: {
                        required: "Please enter date of birth",
                    },
                    email: {
                        required: "Please enter your email",
                    },
                    phone: {
                        required: "Please enter phone",
                    },
                    jobPosition: {
                        required: "Please enter your position",
                    },
                    salary: {
                        required: "Please enter salary",
                    },
            
            },
        });
    </script>

    <!-- export Scripts -->
    <script>
        $(document).ready(function(){
            $('#example').DataTable({
                pageLength: 25,
                responsive: true,
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [
                    { extend: 'copy'},
                    {extend: 'csv'},
                    {extend: 'excel', title: 'ExampleFile'},
                    {extend: 'pdf', title: 'ExampleFile'},

                    {extend: 'print',
                     customize: function (win){
                        $(win.document.body).addClass('white-bg');
                        $(win.document.body).css('font-size', '10px');

                        $(win.document.body).find('table')
                        .addClass('compact')
                        .css('font-size', 'inherit');
                    }
                    }
                ]
            });
        });

    </script>
    <!-- Main File-->
    <script src="{{URL::to('assets/js/front.js')}}"></script>
    
  </body>
</html>
