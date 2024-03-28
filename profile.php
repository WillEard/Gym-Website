<?php
    session_start();

    // If not logged in
    if(!isset($_SESSION["username"])){ 
        header("Location: index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!--Custom Styling-->
    <link rel="stylesheet" href="styles/navbar-style.css">
</head>
<body>
    <!--Navbar-->
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark py-3 navbar-scrolled rounded-bottom fixed-top container">
            <div class="container-fluid">
                <svg width="30" height="24" class="d-inline-block align-text-top mx-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#FFFFFF" d="M96 64c0-17.7 14.3-32 32-32h32c17.7 0 32 14.3 32 32V224v64V448c0 17.7-14.3 32-32 32H128c-17.7 0-32-14.3-32-32V384H64c-17.7 0-32-14.3-32-32V288c-17.7 0-32-14.3-32-32s14.3-32 32-32V160c0-17.7 14.3-32 32-32H96V64zm448 0v64h32c17.7 0 32 14.3 32 32v64c17.7 0 32 14.3 32 32s-14.3 32-32 32v64c0 17.7-14.3 32-32 32H544v64c0 17.7-14.3 32-32 32H480c-17.7 0-32-14.3-32-32V288 224 64c0-17.7 14.3-32 32-32h32c17.7 0 32 14.3 32 32zM416 224v64H224V224H416z"/></svg>
                <a class="navbar-brand fw-bold" href="#">The Gym</a> 
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link text-light fw-bold" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="index.php#gym-groups">Gym Groups</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="index.php#pricing">Pricing</a>
                        </li>
                        <?php
                          if (isset($_SESSION["username"]))
                          {
                            echo '<div class="btn-group">
                            <button type="button" class="btn btn-info">'. $_SESSION["username"]. '</button>
                            <button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                              <span class="visually-hidden">Toggle Dropdown</span>
                            </button>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="#">Book a session</a></li>
                              <li><a class="dropdown-item" href="#">Gym Plan</a></li>
                              <li><hr class="dropdown-divider"></li>
                              <li class="nav-item"> <a class="dropdown-item text-dark" href="form-data-handling/signout.inc.php">Sign Out</a> </li>
                              </ul>
                          </div>';
                          }
                          else
                          {
                            echo '<li class="nav-item"> <a class="nav-link text-light" href="sign-up-in.php">Sign In</a> </li>';
                          }
                        ?>
                        
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="container py-5"></div>
        <div class="container-fluid" style="overflow-x: hidden;">
            <div style="margin-top: 10px;" class="row extra_margin">
                <div class="col-md-4">
                    <div class="text-center">
                        <h2>Profile</h2>
                        <hr/>
                        <img class="img-fluid" src="https://via.placeholder.com/165" alt="Profile Image"><br><br>

                        <div class="file btn btn-md btn-primary col-md-6 disabled">Change Profile Picture
			                <input style="opacity: 0; position: absolute;" type="file" name="file"/> 
						</div> 
                        <hr/>
                        <div class="container">
                            <button class="btn btn-md btn-warning col-md-8 my-1">Change Password</button> 
                            <button class="btn btn-md btn-warning col-md-8 my-1">Update Phone Number</button> 
                            <button class="btn btn-md btn-danger col-md-8 my-1">Cancel Membership</button> 
                            <button class="btn btn-md btn-danger col-md-8 my-1">Terminate Account</button> 
                        </div>    
                    </div>
                </div>
                <div class="col-md-8">
                    <h2 class="mx-auto">Account Information</h2>
                    <hr/>
                    <form>
                        <div class="row">
                            <div class="form-group col-md-5">
                                <label>Full Name:</label>
                                <input type='text' class='form-control' placeholder='First Name' readonly>
                           </div>
                           <div class="form-group col-md-5">
                                <label for="">Username:</label>
                                <input type='text' class='form-control' placeholder='<?php echo $_SESSION['username']?>' readonly>
                            </div>
                        </div>
                        <div class="row my-3">
                            <div class="form-group col-md-5">
                                <label>Email Address:</label>
                                <input type='email' class='form-control' placeholder='Email Address' readonly>
                            </div>
                            <div class="form-group col-md-5">
                                <label for="">Phone Number:</label>
                                <input type='text' class='form-control' placeholder='+XX XXXX XXX XXX' readonly>
                            </div>
                        </div>
                        <div class="row my-3 py-1">
                            <div class="form-group col-md-5">
                                <label>Your Plan:</label>
                                <input type='text' class='form-control' placeholder='Lite/Premium' readonly>
                            </div>
                            <div class="form-group col-md-5">
                                <label>Password:</label>
                                <input type='text' class='form-control' placeholder='**********' readonly>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="form-group col-md-5 text-center">
                                <div class="modal fade" id="PasswordModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Change Password</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <h5 class="text-center mx-auto">Warning</h5>
                                            <h6 class="text-center text-danger">This can only be done once every 24 Hours.</h6>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button onclick="window.location.href='php-includes/ChangePasswordProcess.php';" type="button" class="btn btn-warning">Change Password</button>
                                        </div>
                                        </div>
                                    </div>
                                </div>                      
                            </div>
                            <div class="modal fade" id="DeleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Terminate Account</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <h5 class="text-center mx-auto">Are you sure you want to delete your account?</h5>
                                        <h6 class="text-center text-danger">All data will be permanently lost.</h6>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button onclick="window.location.href='php-includes/DeleteProcessLoading.php';" type="button" class="btn btn-danger">Delete Account</button>
                                    </div>
                                    </div>
                                </div> 
                            </div>  
                                <hr/>
                            </div>
                            <div class="row">
                                <h2>Previous Workouts</h2>
                                <div class="alert alert-warning col-md-6 text-center" role="alert">
                                    You currently have no previous work outs! Book one <a href="#">here.</a>
                                </div>
                            </div>
                        </div>
                    </form>                    
                </div>
            </div>
            </div>
        </div>
    </body>
</html>

    