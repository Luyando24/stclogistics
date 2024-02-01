<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    
    <!-- theme meta -->
    <meta name="theme-name" content="quixlab" />
  
    <title>New project post</title>
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
                                    <h4>Add new project</h4>
                                    <a href="{{url('projects')}}"><button class="btn btn-primary">All projects</button></a>
                                    </div>
                                <div class="basic-form">
                                    <form action="{{url('/new_project_post')}}" method="post" enctype="multipart/form-data">

                                    @csrf

                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>Project Title</label>
                                                <input type="text" name="title" class="form-control" placeholder="project title">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Project Location</label>
                                                <input type="text" name="location" class="form-control" placeholder="project location">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Project Type</label>
                                                <input type="text" name="type" class="form-control" placeholder="project type">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Project Size</label>
                                                <input type="text" name="size" class="form-control" placeholder="project size">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Date</label>
                                                <input type="date" name="date" class="form-control" placeholder="">
                                            </div>
                                            <div class="form-group">
                                                <label>Image</label>
                                                <input type="file" name="image" class="form-control">
                                            </div>
                                        </div>
                                            
                                </div>
                                <div class="basic-form">
                                    
                                        <div class="form-group" >
                                            <label>Details:</label>
                                            <textarea style="width:600px" class="form-control h-150px" rows="6" name="details" id="comment"></textarea>
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
