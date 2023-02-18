@include('/partials/header')
<body class="login-bg">
@include('/partials/navbar')



    
  <!-- signup-->
<section class="vh-50" style="background-color: #fff">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-12">
        <div class="text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4"  style="color:#63459B">Sign up</p>
                <form class="mx-1 mx-md-4">
                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-user fa-lg me-3 fa-fw" style="color:#63459B"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" id="form3Example1c" placeholder="Your Name" class="form-control" />
                    </div>
                  </div>
                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw" style="color:#63459B"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="email" id="form3Example3c" placeholder="Your Email" class="form-control" />
                      <!-- <label class="form-label" for="form3Example3c">Your Email</label> -->
                    </div>
                  </div>
                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-lock fa-lg me-3 fa-fw" style="color:#63459B"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="password" id="form3Example4c" placeholder="Password" class="form-control" />
                      <!-- <label class="form-label" for="form3Example4c">Password</label> -->
                    </div>
                  </div>
                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-key fa-lg me-3 fa-fw" style="color:#63459B"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="password" id="form3Example4cd"  placeholder="Confirm password" class="form-control" />
                      <!-- <label class="form-label" for="form3Example4cd" >Repeat your password</label> -->
                    </div>
                  </div>
                  <div class="form-check d-flex justify-content-center mb-5">
                    <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3c" />
                    <label class="form-check-label" for="form2Example3">
                      I agree all statements in <a href="#!">Terms of service</a>
                    </label>
                  </div>
                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <button type="button" class="btn btn-lg " style=" color:#fff; background-color:#63459B; width: 130px;">Sign up</button>
                  </div>
                  <hr class="my-4">

                    <button class="btn btn-lg btn-block" style="background-color: #4285F4;; color:#fff"type="submit"><i class="fab fa-google me-2"></i> Sign in with google</button>
                     <button class="btn btn-lg btn-block  mb-2" style="background-color: #3B5998; color:#fff"
                        type="submit"><i class="fab fa-facebook-f me-2"></i>Sign in with facebook</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
        <!-- signup-->






      <section class="wrapper container justify-content-around mt-5" style="background-color: #63459b1c;height: 10rem;">
        <div class="content">
          <header>
            <h2 class="heading " style="color: #7156A5">Subscribe to our <br>newsletter and stay updated<h2>
            </header>
          <section>
          </section>
          <footer class="wrapper-1">
            <input type="email" class="rounded-1" placeholder="Enter your email">
            <button class="rounded-1">Subscribe</button>
          </footer>
        </div>
      </section>

  


<!-- footer -->
@include('/partials/footer')
</body>
</html>