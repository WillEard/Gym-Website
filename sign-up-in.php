

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign Up/In</title>

        <!--Bootstrap 5.0.2 CSS-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <!--Custom Styling-->
        <link rel="stylesheet" href="styles/navbar-style.css">
    </head>
    <body style="overflow: hidden;">

    <!--Navbar-->
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark py-3 navbar-scrolled rounded-bottom fixed-top container">
            <div class="container-fluid">
                <svg width="30" height="24" class="d-inline-block align-text-top mx-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#FFFFFF" d="M96 64c0-17.7 14.3-32 32-32h32c17.7 0 32 14.3 32 32V224v64V448c0 17.7-14.3 32-32 32H128c-17.7 0-32-14.3-32-32V384H64c-17.7 0-32-14.3-32-32V288c-17.7 0-32-14.3-32-32s14.3-32 32-32V160c0-17.7 14.3-32 32-32H96V64zm448 0v64h32c17.7 0 32 14.3 32 32v64c17.7 0 32 14.3 32 32s-14.3 32-32 32v64c0 17.7-14.3 32-32 32H544v64c0 17.7-14.3 32-32 32H480c-17.7 0-32-14.3-32-32V288 224 64c0-17.7 14.3-32 32-32h32c17.7 0 32 14.3 32 32zM416 224v64H224V224H416z"/></svg>
                <a class="navbar-brand fw-bold" href="index.php">The Gym</a> 
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link text-light" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="index.php#gym-groups">Gym Groups</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="index.php#pricing">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light fw-bold" href="sign-up-in.php">Sign In</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    
    <img class="bg-img " src="https://images.unsplash.com/photo-1571902943202-507ec2618e8f?q=100&w=2875&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="BG image">

    <div class="container col-xl-10 col-xxl-8 px-5 py-2">
        <?php
            if (isset($_GET["error"]))
            {
                // SIGN UP
                if ($_GET["error"] == "emptyinput(s)")
                {
                    echo "<div class='mx-auto alert alert-danger' role='alert'>Error: Empty Fields!</div>";
                }

                if ($_GET["error"] == "invalidusername")
                {
                    echo "<div class='mx-auto alert alert-danger' role='alert'>Error: Invalid Username!</div>";
                }

                if ($_GET["error"] == "invalidemail")
                {
                    echo "<div class='mx-auto alert alert-danger' role='alert'>Error: Invalid Email!</div>";
                }

                if ($_GET["error"] == "incorrectpass")
                {
                    echo "<div class='mx-auto alert alert-danger' role='alert'>Error: Passwords do not match!</div>";
                }

                if ($_GET["error"] == "usernameoremailtaken")
                {
                    echo "<div class='mx-auto alert alert-danger' role='alert'>Error: Username or Email already in use!</div>";
                }

                // SIGN IN
                if ($_GET["error"] == "usernotfound")
                {
                    echo "<div class='mx-auto alert alert-danger' role='alert'>Error: User does not exist!</div>";
                }

                if ($_GET["error"] == "stmtfailed")
                {
                    echo "<div class='mx-auto alert alert-danger' role='alert'>Error: Internal error!</div>";
                }
            }
        ?>
    </div>

    <!--Sign In-->
    <div id="sign-in" class="container col-xl-10 col-xxl-8 px-4 py-3">
        <div class="row align-items-center g-lg-5 py-5">
            <div class="col-lg-7 text-center text-light text-lg-start">
                <h1 class="display-4 fw-bold lh-1 mb-3">Sign in.</h1>
                <p class="col-lg-10 fs-4">To carry on your journey.</p>
            </div>
            <div class="col-md-10 mx-auto col-lg-5">
                <form class="p-4 p-md-5 border rounded-3 bg-light" action="form-data-handling/signin.inc.php" method="POST" novalidate>
                    <div class="form-floating mb-3">
                        <input name="username-SI" type="text" class="form-control" id="floatingUsername-SI" placeholder="name@example.com">
                        <label for="floatingUsername-SI">Username</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input name="password-SI" type="password" class="form-control" id="floatingPassword-SI" placeholder="Password">
                        <label for="floatingPassword-SI">Password</label>
                    </div>
                    <div class="checkbox mb-3">
                        <label>
                        <input type="checkbox" value="remember-me"> Remember me
                        </label>
                    </div>
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign In</button>
                    <hr class="my-4">
                    <div class="text-center">
                        <button id="sign-up-button" class="btn btn-secondary btn-md">Or sign up first.</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--Sign Up-->
    <div id="sign-up" class="container col-xl-10 col-xxl-8 px-4 py-3">
        <div class="row align-items-center g-lg-5 py-5">
            <div class="col-lg-7 text-center text-light text-lg-start">
                <h1 class="display-4 fw-bold lh-1 mb-3">Sign up.</h1>
                <p class="col-lg-10 fs-4">To start your journey.</p>
            </div>
            <div class="col-md-10 mx-auto col-lg-5">
                <form class="p-4 p-md-5 border rounded-3 bg-light" action="form-data-handling/signup.inc.php" method="POST" novalidate>
                    <div class="form-floating mb-3">
                        <input name="email-SU" type="email" class="form-control" id="floatingEmail-SU" placeholder="name@example.com">
                        <label for="floatingEmail-SU">Email</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input name="username-SU" type="text" class="form-control" id="floatingUsername-SU" placeholder="name@example.com">
                        <label for="floatingUsername-SU">Username</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input name="password-SU" type="password-SU" class="form-control" id="floatingPassword-SU" placeholder="Password">
                        <label for="floatingPassword-SU">Password</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input name="passwordConfirm-SU" type="password" class="form-control" id="floatingPasswordConfirm-SU" placeholder="Password">
                        <label for="floatingPasswordConfirm-SU">Confirm Password</label>
                    </div>
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign up</button>
                    <hr class="my-4">
                    <div class="text-center">
                        <button id="sign-in-button" class="btn btn-secondary btn-md">Or sign in here.</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--Boostrap 5.0.2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!--jQuery 3.7.1 JS -->
    <script src="https://code.jquery.com/jquery-3.7.1.slim.js" integrity="sha256-UgvvN8vBkgO0luPSUl2s8TIlOSYRoGFAX4jlCIm9Adc=" crossorigin="anonymous"></script>
    <!--FontAwesome Icons JS-->
    <script src="https://kit.fontawesome.com/0f0e243b3e.js" crossorigin="anonymous"></script>

    <!--Custom Sign-Up-In Script-->
    <script src="scripts/sign-up-in.js"></script>

    </body>
</html>