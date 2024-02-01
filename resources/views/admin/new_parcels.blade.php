<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    
    <!-- theme meta -->
    <meta name="theme-name" content="quixlab" />
  
    <title>Products</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <!-- Pignose Calender -->
    
    <!-- Custom Stylesheet -->
    @include('admin.admincss')

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    
    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <div class="brand-logo">
                <a href="index.html">
                    <b class="logo-abbr"><img src="images/logo.png" alt=""> </b>
                    <span class="logo-compact"><img src="./images/logo-compact.png" alt=""></span>
                    <span class="brand-title">
                        <img src="images/logo-text.png" alt="">
                    </span>
                </a>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->
       
        <!--**********************************
            Header start
        ***********************************-->
        @include('admin.nav')
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        @include('admin.sidenav')
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
        <div class="container-fluid mt-3"> 
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                            <div style="display:flex;justify-content:space-between;">
                                    <h4>Parcels awaiting delivery</h4>
                                   
                                    </div>
                                    <hr />                  
                                </div>
                                <div class="active-member">
                                    <div class="table-responsive">
                                        <table class="table table-xs mb-0">
                                            <thead>
                                                <tr>
                                                    <th>Customer</th>
                                                    <th>Email</th>
                                                    <th>Phone</th>
                                                    <th>Forwarding address</th>
                                                    <th>Delivery address</th>
                                                    <th>Product</th>
                                                    <th>Quantity</th>
                                                    <th>Unit price</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            
                                            <tbody>
                                              <!--Fetch parcel info-->
                                               @foreach($newParcels as $new_parcel)
                                                <tr>
                                                    <td>{{$new_parcel->name}}</td>
                                                    <td>{{$new_parcel->email}}</td>
                                                    <td>{{$new_parcel->phone}}</td>
                                                    <td>{{$new_parcel->china_address}}</td>
                                                    <td>{{$new_parcel->destination_address}}</td>
                                                    <td>{{$new_parcel->product_info}}</td>
                                                    <td>{{$new_parcel->qty}}</td>
                                                    <td>{{$new_parcel->product_price}} USD</td>
                                                    <td><a href="{{url('/view-order', $new_parcel->id)}}"><button class="btn btn-primary">View</button> </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>                        
                    </div>
                </div>
              </div>
            </div>
        <div class="container-fluid mt-3">

            </div>
            <!-- #/ container -->
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
        
        
        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright &copy; Designed & Developed by <a href="https://themeforest.net/user/quixlab">Quixlab</a> 2018</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->
    </div>
    @include('admin.adminjs')

</body>

</html>
