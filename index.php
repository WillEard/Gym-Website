<?php
    session_start();
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
    
    <img class="bg-img " src="https://images.unsplash.com/photo-1571902943202-507ec2618e8f?q=100&w=2875&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="BG image">

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
                            <a class="nav-link text-light fw-bold" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="#gym-groups">Gym Groups</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="#pricing">Pricing</a>
                        </li>
                        <?php
                          if (isset($_SESSION["username"]))
                          {
                            echo '<li class="nav-item"> <a class="nav-link text-light" href="form-data-handling/signout.inc.php">Sign Out</a> </li>';
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

    
    
    <!--Hero-->
    <div class="container px-4 py-5 my-5 text-center text-light hero">
        <h1 class="display-5 fw-bold">The Gym<svg lass="d-block mx-auto mb-4" width="72" height="57" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#FFFFFF" d="M320 48a48 48 0 1 0 -96 0 48 48 0 1 0 96 0zM125.7 175.5c9.9-9.9 23.4-15.5 37.5-15.5c1.9 0 3.8 .1 5.6 .3L137.6 254c-9.3 28 1.7 58.8 26.8 74.5l86.2 53.9-25.4 88.8c-4.9 17 5 34.7 22 39.6s34.7-5 39.6-22l28.7-100.4c5.9-20.6-2.6-42.6-20.7-53.9L238 299l30.9-82.4 5.1 12.3C289 264.7 323.9 288 362.7 288H384c17.7 0 32-14.3 32-32s-14.3-32-32-32H362.7c-12.9 0-24.6-7.8-29.5-19.7l-6.3-15c-14.6-35.1-44.1-61.9-80.5-73.1l-48.7-15c-11.1-3.4-22.7-5.2-34.4-5.2c-31 0-60.8 12.3-82.7 34.3L57.4 153.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l23.1-23.1zM91.2 352H32c-17.7 0-32 14.3-32 32s14.3 32 32 32h69.6c19 0 36.2-11.2 43.9-28.5L157 361.6l-9.5-6c-17.5-10.9-30.5-26.8-37.9-44.9L91.2 352z"/></svg></h1>
        <h1 class="display-6 fw-bold">Little to apply, a lot to gain.</h1>
        <div class="col-lg-6 mx-auto">
        <p class="lead mb-4">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptas minus voluptates, non est aperiam vitae repudiandae, voluptatem eveniet molestias ratione repellendus modi atque, sapiente dolor consectetur explicabo nobis dignissimos dolore.</p>
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                <button type="button" class="btn btn-info text-light btn-lg px-4 gap-3">Join Today</button>
            </div>  
        </div>
    </div>

    <!--Login-->
    <div class="container-fluid bg-info col-xl-10 col-xxl-8 px-5 py-5">
      <div class="row align-items-center g-lg-5 py-5">
        <div class="col-lg-7 text-center text-lg-start">
          <h1 class="display-4 fw-bold lh-1 mb-3">Get back to it.</h1>
          <p class="col-lg-10 fs-4">Catch where you left off.</p>
        </div>
        <div class="col-md-10 mx-auto col-lg-5">
          <form class="p-4 p-md-5 border rounded-3 bg-light">
            <div class="form-floating mb-3">
              <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
              <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating mb-3">
              <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
              <label for="floatingPassword">Password</label>
            </div>
            
            <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
            <hr class="my-4">
            <small class="text-muted">Or click <a href="#">here</a> to sign uo.</small>
            </form>
        </div>
      </div>
    </div>


    <!--Explore Jumbo-->
    <div class="container my-5 fade-in-up-on-scroll"></div>
      <div class="container col-xxl-8 px-4 py-5">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
          <div class="col-10 col-sm-8 col-lg-6 mx-auto">
            <img src="https://images.unsplash.com/photo-1580261450046-d0a30080dc9b?q=80&w=2746&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="d-block mx-lg-auto img-fluid rounded" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
          </div>
          <div class="col-lg-6">
            <h1 class="display-5 fw-bold lh-1 mb-3">Achieve Greatness.</h1>
            <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate beatae architecto quidem ratione eos ad reprehenderit, voluptatum culpa perferendis corrupti, provident hic, aperiam animi eaque! Pariatur odio et suscipit facere!</p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start">
              <button type="button" class="btn btn-info text-light btn-lg px-4 me-md-2">Explore</button>
            </div>
          </div>
        </div>
    </div>

    <!--Gym Locations-->
    <div id="gym-groups" class="container bg-info rounded fade-in-up-on-scroll justify-content-center">
      <div class="container px-4 py-5 text-center mx-auto" id="custom-cards">
        <h2 class="pb-2 text-light">Gym Locations</h2>

          <div class="row justify-content-center row-cols-sm-4 mx-auto text-center justify-content-center g-4 py-5 mx-auto">
            <div class="col">
              <div class="card" style="width: 18rem;">
                <img src="https://images.unsplash.com/photo-1561214078-f3247647fc5e?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">London</h5>
                  <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusamus vel laboriosam ad itaque, asperiores adipisci aliquid voluptate, maxime consectetur culpa, amet esse? Sapiente non optio similique nam fugiat pariatur blanditiis.</p>
                  <a href="#" class="btn btn-primary">Explore</a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card" style="width: 18rem;">
                <img src="https://images.unsplash.com/photo-1540497077202-7c8a3999166f?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Birmingham</h5>
                  <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eveniet aliquid maiores dolorum molestias delectus deleniti possimus illo neque doloribus porro, in quia. Officia temporibus error vero asperiores quidem dignissimos deserunt.</p>
                  <a href="#" class="btn btn-primary">Explore</a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card" style="width: 18rem;">
                <img src="https://images.unsplash.com/photo-1534438327276-14e5300c3a48?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Manchester</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptates amet quibusdam magnam maxime voluptate ad culpa, voluptas nesciunt quidem atque. Autem quibusdam laborum voluptate sapiente similique, assumenda ea blanditiis cum.</p>
                  <a href="#" class="btn btn-primary">Explore</a>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
    

    <!--Pricing-->
    <div class="container py-3 fade-in-up-on-scroll">

        <div id="pricing" class="pricing-header p-3 pb-md-4 mx-auto text-center">
          <h1 class="display-4 fw-normal text-body-emphasis">Pricing</h1>
          <p class="fs-5 text-body-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim itaque tempora sapiente at nihil mollitia, facere facilis alias delectus, beatae obcaecati ullam quo asperiores voluptatibus iste cupiditate pariatur? Dolorem, culpa.</p>
        </div>
  
        <div class="container">
            <div class="row justify-content-center row-cols-1 row-cols-md-3 mb-3 text-center">
              <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm">
                  <div class="card-header py-3">
                    <h4 class="my-0 fw-normal">Lite</h4>
                  </div>
                  <div class="card-body">
                    <h1 class="card-title pricing-card-title">£19.99<small class="text-body-secondary fw-light">/mo</small></h1>
                    <ul class="list-unstyled mt-3 mb-4">
                      <li>10 users included</li>
                      <li>2 GB of storage</li>
                      <li>Email support</li>
                      <li>Help center access</li>
                    </ul>
                    <button type="button" class="w-100 btn btn-lg btn-outline-primary">Choose Plan</button>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm border-primary">
                  <div class="card-header py-3 text-bg-primary border-primary">
                    <h4 class="my-0 fw-normal">Premium</h4>
                  </div>
                  <div class="card-body">
                    <h1 class="card-title pricing-card-title">£34.99<small class="text-body-secondary fw-light">/mo</small></h1>
                    <ul class="list-unstyled mt-3 mb-4">
                      <li>30 users included</li>
                      <li>15 GB of storage</li>
                      <li>Phone and email support</li>
                      <li>Help center access</li>
                    </ul>
                    <button type="button" class="w-100 btn btn-lg btn-primary">Choose Plan</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>


    <!--Footer-->
    <div class="container-fluid bg-info">
      <footer class="py-5">
        <div class="row">
          <div class="col-6 col-md-2 mb-3">
            <h5>Navigation</h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Gym Groups</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Sign In</a></li>
            </ul>
          </div>

          <div class="col-6 col-md-2 mb-3">
            <h5>Help</h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQ's</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
            </ul>
          </div>

          <div class="col-6 col-md-2 mb-3">
            <h5>Legal</h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Policies</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Terms & Conditions</a></li>
            </ul>
          </div>

          <div class="col-md-5 offset-md-1 mb-3">
            <form>
              <h5>Subscribe to our newsletter</h5>
              <p>Monthly digest of what's new and exciting from us.</p>
              <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                <label for="newsletter1" class="visually-hidden">Email address</label>
                <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
                <button class="btn btn-primary" type="button">Subscribe</button>
              </div>
            </form>
          </div>
        </div>

        <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
          <p>© 2024 The Gym, Inc. All rights reserved.</p>
          <ul class="list-unstyled d-flex">
            <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"></use></svg></a></li>
            <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"></use></svg></a></li>
            <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"></use></svg></a></li>
          </ul>
        </div>
      </footer>
    </div>
    
    <!--Boostrap 5.0.2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!--jQuery 3.7.1 JS -->
    <script src="https://code.jquery.com/jquery-3.7.1.slim.js" integrity="sha256-UgvvN8vBkgO0luPSUl2s8TIlOSYRoGFAX4jlCIm9Adc=" crossorigin="anonymous"></script>
    <!--FontAwesome Icons JS-->
    <script src="https://kit.fontawesome.com/0f0e243b3e.js" crossorigin="anonymous"></script>
  
    <!--Custom scrolling effcet Script-->
    <script src="scripts/index.js"></script>
  </body>
</html>