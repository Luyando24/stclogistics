<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    
    <!-- theme meta -->
    <meta name="theme-name" content="quixlab" />
  
    <title>New product</title>
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
            <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                            <div style="display:flex;justify-content:space-between;">
                                    <h4>Add new product</h4>
                                    <a href="{{url('categories')}}"><button class="btn btn-primary">All categories</button></a>
                                    </div>
                                <div class="basic-form">
                                    <form action="{{url('/new_product')}}" method="post" enctype="multipart/form-data">

                                    @csrf

                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>Product name</label>
                                                <input type="text" name="title" class="form-control" placeholder="product name">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Product keywords</label>
                                                <input type="text" name="keywords" class="form-control" placeholder="keywords(separated by commas)">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Available pixels</label>
                                                <input type="text" name="all_pixel" class="form-control" placeholder="all pixels separated by commas">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Cabinet size</label>
                                                <input type="text" name="cabinet_size" class="form-control" placeholder="cabinet size">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Pixel pitch</label>
                                                <input type="text" name="pixel_pitch" class="form-control" placeholder="pixel pitch for this product">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Module size</label>
                                                <input type="text" name="module_size" class="form-control" placeholder="module size">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Outdoor or Indoor</label>
                                                <input type="text" name="environment" class="form-control" placeholder="outdoor or indoor">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Product banner title</label>
                                                <input type="text" name="banner_title" class="form-control" placeholder="product banner">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Feature title</label>
                                                <input type="text" name="feature_title" class="form-control" placeholder="product banner">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Feature description</label>
                                                <input type="text" name="feature_text" class="form-control" placeholder="product banner">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Feature image</label>
                                                <input type="file" name="detailsimage" class="form-control">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Product Image</label>
                                                <input type="file" name="image" class="form-control">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Banner image</label>
                                                <input type="file" name="banner_image" class="form-control">
                                            </div>
                                            
                                        </div>
                                        </div>
                                        <button type="submit" class="btn btn-dark">Save</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
              </div>
            </div>
            </div>
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
