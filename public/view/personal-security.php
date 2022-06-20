<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="../../logo-brand.png" type="image/x-icon">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-icons/3.0.1/iconfont/material-icons.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
<link rel="stylesheet" href="../../src/css/personal-info.css">
<link rel="stylesheet" href="../../src/css/book-index-nav.css">
<link rel="stylesheet" href="../../src/css/book-login.css">
<script src="../../src/js/security.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light ">
        <h3 class="p-4"><a class="text-secondary font-weight-bold brand" href="../public/index.html">Library Management</a></h3>
        <button class="navbar-toggler bg-light" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ml-auto p-4">
            <a class="nav-item nav-link  ml-4 " href="../../index.html">Home </a>
            <a class="nav-item nav-link  ml-4" href="../public/html/categories.html">Categories</a>
            <a class="nav-item nav-link nav-last  ml-4" href="../public/html/books.html">Books</a>
            <!-- <a href="../public/html/login.html"><button class="btn ml-4 loginBtn">Login</button></a> -->
           
            <div class="dropdown">
              <button class="btn btn- dropdown-toggle active" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <img src="https://thumbs.dreamstime.com/b/vector-icon-user-avatar-web-site-mobile-app-man-face-flat-style-social-network-profile-45836554.jpg" class="avatar rounded-circle" style="width: 35px;" alt="Avatar"> Junmar Layaog
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenu2" style="z-index: 1;"> 
                <div class="account-info-header border-bottom">
                  <!-- <p class="my-0  pt-2 pl-3">Brian Glover</p> -->
                   <p class="my-0 pl-3 pb-2 text-secondary"><small>USC ID: 3004877</small></p>
                </div>
                  <a href="#" class="dropdown-item"><i class="fa fa-user-o m-2"></i> Account</a></a>
        <a href="#" class="dropdown-item text-danger"><i class="fa fa-sign-out m-2"></i> Logout</a></a>
              </div>
            </div>
            <!-- <a class="nav-item nav-link disabled" href="#">Disabled</a> -->
          </div>
    
        </div>
      </nav>
        <ol class="breadcrumb bg-transparent" style="margin-left: 90px;">
          <li class="breadcrumb-item"><a href="../html/user-account.html">Account</a></li>
          <li class="breadcrumb-item active" aria-current="page">Personal Security</li>
        </ol>
    <div class="container register">
      
        <div class="row">

            <div class="col-md-3 register-left">
                <img src="https://cdn3.iconfinder.com/data/icons/vector-icons-6/96/256-512.png" alt=""/>
                <h3>Personal Security</h3>
                <p>Manage Your Personal Information Here</p>
                     </div>
            
            <div class="col-md-9 register-right">
                <!-- <div class="container-fluid"> -->
                    <div class="row register-heading">
                        <div class="col-sm-6">
                            <h3  class="register-heading">Account Settings</h3>
                        </div>
                        <div class="col-sm-6">
                            <button class="btn btn-info change-pass">Change Password</button>
                        </div>
                    <!-- </div> -->
                   
                    
                </div>
               
              


                <form id="p-form">
                    <div class="field mt-4">
                        <label for="" class="ml-4 small">USC ID Number</label>
                        <input type="text" required  class="holder num1" readonly value="19104918">
                        <!-- <label title="USC ID Number" data-title="USC ID Number"></label> -->
                       
                    </div>
                    
                    <div class="field mt-2">
                        <label for="" class="ml-4 small old-pass">Password</label>
                      <input type="password" required  class="holder password" value="JunmarLayaog">
                      <!-- <label title="Username" data-title="Username"></label> -->
                  </div>

                  <div class="field  pass mt-2">
                      <label for="" class="ml-4 mt-2 small ">New Password</label>
                    <input type="text" required   class="holder num1" >
                   
                </div>

                <div class="field pass mt-2">
                  <label for="" class="ml-4 mt-2 small ">Confirm Password</label>
                <input type="text" required   class="holder num1"  >
               
            </div>
              
          
  
                  
                    <button disabled class="btn btn-primary float-right btn-change mt-4 mb-4"
                      type="submit">Update Password</button>
                   
                  </form>





                </div>
            </div>
        </div>



        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Change Profile Picture</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                          <label for="exampleFormControlFile1">Choose Profile</label>
                          <input type="file" class="form-control-file" id="exampleFormControlFile1">
                        </div>
                      </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-warning" data-dismiss="modal">Cancel</button>
                  <button type="button" class="btn btn-primary">Upload Now</button>
                </div>
              </div>
            </div>
          </div>


    </div>
    <script>
        $(document).ready(function(){
            $(".holder").prop('disabled',true)

            $(".edit").click(function(){
            $(".holder").prop('disabled',false)
            $('.username').focus()
        })
        })
       

    </script>
</body>
</html>
