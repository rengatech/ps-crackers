 @include('/partials/header')


<body class="product-color">

    <!-- top navbar -->
    @include('/partials/navbar')
    <!-- navbar end -->

    <!-- home content -->
 <div>  

    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image/carousel/carousel-2.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="image/carousel/carousel-1.png" class="d-block w-100 " alt="...">
    </div>
    <div class="carousel-item">
      <img src="image/carousel/carousel-3.png" class="d-block w-100 " alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"
    style="background-color: #8336A1;
    background-size: 18px;
    border: none;
    color: white;
    padding: 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    border-radius: 50%"
    aria-hidden="true"></span>
    <span class="visually-hidden ">Previous</span>
  </button>
 <div>
 <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
    <span class="carousel-control-next-icon "
    style="background-color: #8336A1;
   background-size: 18px;
   border: none;
   color: white;
   padding: 20px;
   text-align: center;
   text-decoration: none;
   display: inline-block;
   font-size: 16px;
   margin: 4px 2px;
   cursor: pointer;
   border-radius: 50%"
   aria-hidden="true"></span>
    <span class="visually-hidden ">Next</span>
  </button>
 </div>
</div>


    
<div class="d-flex justify-content-end price-tag1 blink1">
    <a href="image/ps-crackers.pdf"download><img src="image/logo/price list1.png" alt=""></a>
</div>
   
    <!-- home content -->
    </div>


    <div class="container-fluid1">
        <div class="mt-5">
            <div class="">
                <h1 class="about-2 ">New Launches</h1>
            </div>
        </div>
    </div>

    <!-- top GALLERY -->

    <section class="container-fluid1 w-98 ">
        <div class="" id="product-cards" style="cursor: pointer;">
            <div class="mt-5">
                <div class="row grid-col">
                  <div class="col-12 col-lg-6 img-big-block">
                    <span></span>
                  <img src="image/grid/grid-1.jpg" alt="" width="100%" height="100%">
                  </div>
                  <div class="col-6 col-lg-3 mt-1 img-block">
                    <span></span>
                  <img src="image/grid/grid-2.webp" alt="" width="100%" height="100%">
                  </div>
                  <div class="col-6 col-lg-3 mt-1 img-block">
                    <span></span>
                  <img src="image/grid/grid-3.jpg" alt="" width="100%" height="100%">
                  </div>
                </div>
                <div class="row mt-2 grid-col">
                <div class="col-6 col-lg-3 img-block">
                    <span></span>
                <img src="image/grid/grid-2.webp" alt="" width="100%" height="100%">
                  </div>
                  <div class="col-6 col-lg-3 img-block">
                    <span></span>
                  <img src="image/grid/grid-3.jpg" alt="" width="100%" height="100%" >
                  </div>
                  <div class="col-12 col-lg-6 mt-1 img-big-block">
                    <span></span>
                   <img src="image/grid/grid-1.jpg" alt="" width="100%" height="100%" >
                  </div>
                </div>
              </div>
            {{-- <div class="row" style="margin-top: 30px;">
                <div class="col-md-3 py-3 py-md-0">
                    <div class="card">
                      <a class="card" href="#">  <img src="image/gallery/kids-gun-ps.jpg" alt=""></a>
                        <div class="card-body">
                            <h3>KIDS GUNS</h3>
                            <!-- <p>Lorem ipsum dolor sit amet.</p>
                            <div class="star">
                                <i class="fas fa-star checked"></i>
                                <i class="fas fa-star checked"></i>
                                <i class="fas fa-star checked"></i>
                                <i class="fas fa-star checked"></i>
                                <i class="fas fa-star checked"></i>
                            </div> -->
                            <!-- <h5>$32.60 <strike>$50</strike> <span><i class="fa-solid fa-cart-shopping"></i></span></h5> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-3 py-3 py-md-0">
                    <div class="card">
                        <img src="image/gallery/flower-pot-ps.jpg" alt="">
                        <div class="card-body">
                            <h3>Flower Pot</h3>
                            <!-- <p>Lorem ipsum dolor sit amet.</p>
                            <div class="star">
                                <i class="fas fa-star checked"></i>
                                <i class="fas fa-star checked"></i>
                                <i class="fas fa-star checked"></i>
                                <i class="fas fa-star checked"></i>
                                <i class="fas fa-star checked"></i>
                            </div> -->
                            <!-- <h5>$56.50 <strike>$60</strike> <span><i class="fa-solid fa-cart-shopping"></i></span></h5> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-3 py-3 py-md-0">
                    <div class="card">
                        <img src="image/gallery/sparklers-ps.jpg" alt="">
                        <div class="card-body">
                            <h3>Sparklers</h3>
                            <!-- <p>Lorem ipsum dolor sit amet.</p>
                            <div class="star">
                                <i class="fas fa-star checked"></i>
                                <i class="fas fa-star checked"></i>
                                <i class="fas fa-star checked"></i>
                                <i class="fas fa-star checked"></i>
                                <i class="fas fa-star checked"></i>
                            </div> -->
                            <!-- <h5>$150.5 <strike>$160.50</strike> <span><i class="fa-solid fa-cart-shopping"></i></span></h5> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-3 py-3 py-md-0">
                    <div class="card">
                        <img src="image/gallery/rocket-ps.jpg" alt="">
                        <div class="card-body">
                            <h3>Rocket</h3>
                            <!-- <p>Lorem ipsum dolor sit amet.</p>
                            <div class="star">
                                <i class="fas fa-star checked"></i>
                                <i class="fas fa-star checked"></i>
                                <i class="fas fa-star checked"></i>
                                <i class="fas fa-star checked"></i>
                                <i class="fas fa-star checked"></i>
                            </div> -->
                            <!-- <h5>$50.60 <strike>$56.90</strike> <span><i class="fa-solid fa-cart-shopping"></i></span></h5> -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="row" style="margin-top: 30px;">
                <div class="col-md-3 py-3 py-md-0">
                    <div class="card">
                        <img src="image/gallery/sky-shots-ps.jpg" alt="">
                        <div class="card-body">
                            <h3>Sky Shots </h3>
                            <!-- <p>Lorem ipsum dolor sit amet.</p>
                            <div class="star">
                                <i class="fas fa-star checked"></i>
                                <i class="fas fa-star checked"></i>
                                <i class="fas fa-star checked"></i>
                                <i class="fas fa-star checked"></i>
                                <i class="fas fa-star checked"></i>
                            </div> -->
                            <!-- <h5>$5.60 <strike>$10.50</strike> <span><i class="fa-solid fa-cart-shopping"></i></span></h5> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-3 py-3 py-md-0">
                    <div class="card">
                        <img src="image/gallery/ground-chakkar-ps.jpg" alt="">
                        <div class="card-body">
                            <h3>Ground Chakkar </h3>
                            <!-- <p>Lorem ipsum dolor sit amet.</p>
                            <div class="star">
                                <i class="fas fa-star checked"></i>
                                <i class="fas fa-star checked"></i>
                                <i class="fas fa-star checked"></i>
                                <i class="fas fa-star checked"></i>
                                <i class="fas fa-star checked"></i>
                            </div> -->
                            <!-- <h5>$5.60 <strike>$10.50</strike> <span><i class="fa-solid fa-cart-shopping"></i></span></h5> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-3 py-3 py-md-0">
                    <div class="card">
                        <img src="image/gallery/lar-ps.jpg" alt="">
                        <div class="card-body">
                            <h3>lar</h3>
                            <!-- <p>Lorem ipsum dolor sit amet.</p>
                            <div class="star">
                                <i class="fas fa-star checked"></i>
                                <i class="fas fa-star checked"></i>
                                <i class="fas fa-star checked"></i>
                                <i class="fas fa-star checked"></i>
                                <i class="fas fa-star checked"></i>
                            </div> -->
                            <!-- <h5>$3.2 <strike>$5.60</strike> <span><i class="fa-solid fa-cart-shopping"></i></span></h5> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-3 py-3 py-md-0">
                    <div class="card">
                        <img src="image/gallery/combo-ps.jpg" alt="">
                        <div class="card-body">
                            <h3>Combo</h3>
                            <!-- <p>Lorem ipsum dolor sit amet.</p>
                            <div class="star">
                                <i class="fas fa-star checked"></i>
                                <i class="fas fa-star checked"></i>
                                <i class="fas fa-star checked"></i>
                                <i class="fas fa-star checked"></i>
                                <i class="fas fa-star checked"></i>
                            </div> -->
                            <!-- <h5>$10.50 <strike>$15.60</strike> <span><i class="fa-solid fa-cart-shopping"></i></span></h5> -->
                        </div>
                    </div>
                </div>
            </div> --}}
            
        </div>
    </section>

    <section class="mt-5">
        {{-- <div class="d-flex justify-content-between r-m"> --}}
             {{-- <img src="/image/rockets/r4.png" alt="" height="150px">
            <img src="/image/rockets/r3.png" alt="" height="150px"> --}}
            
         
            <div class="d-flex justify-content-evenly bg-warning">
              <img src="image/rockets/r3.png" alt="" class="img-11">
                <h1 class="about-3">Minimum Order Value ₹4000</h1>
                <img src="image/rockets/r4.png" alt="" class="img-11">
            </div>
    

</section>

    <!-- top GALLERY -->

    <!-- banner -->    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <div class="fire-1">
    <lottie-player src="/lottie/skyshots.json"  background="transparent"  speed="1"  style="width: 300px; height: 300px;"  loop  autoplay></lottie-player>
</div>
    <div class="banner">                
        <div class="content">
            <h1>Get Up To 50% Off</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, animi?</p>
            <div id="bannerbtn"><button>SHOP NOW</button></div>
        </div>
    </div>
    <!-- banner -->

    <!-- product cards -->

    <div class="container-fluid1">
        <div class="mt-5">
            <div class="">
                <h1 class="about-2">Products</h1>
            </div>
        </div>
    </div>

    <section class="">
    <div class="container" id="product-cards">


        <div class="row" style="margin-top: 30px;">
            <div class="col-md-3 py-3 py-md-0">
                <div class="card">
                  <a class="card" href="/kids-gun">  <img src="image/gallery/kids-gun-ps.jpg" alt=""></a>
                    <div class="card-body">
                        <h3>Kids Guns</h3>
                        <!-- <p>Lorem ipsum dolor sit amet.</p>
                        <div class="star">
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                        </div> -->
                        <!-- <h5>$32.60 <strike>$50</strike> <span><i class="fa-solid fa-cart-shopping"></i></span></h5> -->
                    </div>
                </div>
            </div>
            <div class="col-md-3 py-3 py-md-0">
                <div class="card">
                  <a href="/flower-pot">  <img src="image/gallery/flower-pot-ps.jpg" alt=""></a>
                    <div class="card-body">
                        <h3>Flower Pot</h3>
                        <!-- <p>Lorem ipsum dolor sit amet.</p>
                        <div class="star">
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                        </div> -->
                        <!-- <h5>$56.50 <strike>$60</strike> <span><i class="fa-solid fa-cart-shopping"></i></span></h5> -->
                    </div>
                </div>
            </div>
            <div class="col-md-3 py-3 py-md-0">
                <div class="card">
                   <a href="/sparklers"> <img src="image/gallery/sparklers-ps.jpg" alt=""></a>
                    <div class="card-body">
                        <h3>Sparklers</h3>
                        <!-- <p>Lorem ipsum dolor sit amet.</p>
                        <div class="star">
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                        </div> -->
                        <!-- <h5>$150.5 <strike>$160.50</strike> <span><i class="fa-solid fa-cart-shopping"></i></span></h5> -->
                    </div>
                </div>
            </div>
            <div class="col-md-3 py-3 py-md-0">
                <div class="card">
                   <a href="/rocket"> <img src="image/gallery/rocket-ps.jpg" alt=""></a>
                    <div class="card-body">
                        <h3>Rocket</h3>
                        <!-- <p>Lorem ipsum dolor sit amet.</p>
                        <div class="star">
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                        </div> -->
                        <!-- <h5>$50.60 <strike>$56.90</strike> <span><i class="fa-solid fa-cart-shopping"></i></span></h5> -->
                    </div>
                </div>
            </div>
        </div>

        <div class="row" style="margin-top: 30px;">
            <div class="col-md-3 py-3 py-md-0">
                <div class="card">
                   <a href="/skyshot"><img src="image/gallery/sky-shots-ps.jpg" alt=""></a> 
                    <div class="card-body">
                        <h3>Sky Shots </h3>
                        <!-- <p>Lorem ipsum dolor sit amet.</p>
                        <div class="star">
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                        </div> -->
                        <!-- <h5>$5.60 <strike>$10.50</strike> <span><i class="fa-solid fa-cart-shopping"></i></span></h5> -->
                    </div>
                </div>
            </div>
            <div class="col-md-3 py-3 py-md-0">
                <div class="card">
                 <a href="/ground-chakkar">  <img src="image/gallery/ground-chakkar-ps.jpg" alt=""></a> 
                    <div class="card-body">
                        <h3>Ground Chakkar </h3>
                        <!-- <p>Lorem ipsum dolor sit amet.</p>
                        <div class="star">
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                        </div> -->
                        <!-- <h5>$5.60 <strike>$10.50</strike> <span><i class="fa-solid fa-cart-shopping"></i></span></h5> -->
                    </div>
                </div>
            </div>
            <div class="col-md-3 py-3 py-md-0">
                <div class="card">
                   <a href="/lar"> <img src="image/gallery/lar-ps.jpg" alt=""></a>
                    <div class="card-body">
                        <h3>lar</h3>
                        <!-- <p>Lorem ipsum dolor sit amet.</p>
                        <div class="star">
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                        </div> -->
                        <!-- <h5>$3.2 <strike>$5.60</strike> <span><i class="fa-solid fa-cart-shopping"></i></span></h5> -->
                    </div>
                </div>
            </div>
            <div class="col-md-3 py-3 py-md-0">
                <div class="card">
                  <a href="/combo"><img src="image/gallery/combo-ps.jpg" alt=""></a> 
                    <div class="card-body">
                        <h3>Combo</h3>
                        <!-- <p>Lorem ipsum dolor sit amet.</p>
                        <div class="star">
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                        </div> -->
                        <!-- <h5>$10.50 <strike>$15.60</strike> <span><i class="fa-solid fa-cart-shopping"></i></span></h5> -->
                    </div>
                </div>
            </div>
        </div>
        <!-- bootstrap card end 1-->


        <!-- <div id="bannerbtn"><button>SHOP NOW</button></div> -->
        <div class="center-3 mt-5">
        <div id="bannerbtn-1"><button>View More</button></div>
          </div>
    </div>
    </section>


    <section class="mt-5">
        {{-- <div class="d-flex justify-content-between r-m"> --}}
             {{-- <img src="/image/rockets/r4.png" alt="" height="150px">
            <img src="/image/rockets/r3.png" alt="" height="150px"> --}}
            
         
            <div class="d-flex justify-content-around bg-warning">
               <lottie-player src="./lottie/fireworks.json"  background="transparent"  speed="1"  style="width: 180px; height: 180px;"  loop  autoplay></lottie-player>
                <h1 class="about-4">Buy Now & Get Upto 80% Off</h1>
               <lottie-player src="./lottie/fireworks.json"  background="transparent"  speed="1"  style="width: 180px; height: 180px;"  loop  autoplay></lottie-player>
            </div>
    

</section>
    <!-- product cards -->

    <!-- product -->
    <div class="container" style="margin-top: 100px;">
        <hr>
    </div>
    <div class="container">
        <!-- offer -->
    <div class="container " id="offer">
        <div class="d-flex justify-content-around Offer-1">
            <div class="text-center">
                <i class="fa-solid fa-cart-shopping"></i>
                <h5>Free Shipping</h5>
                <p>On order over $100</p>
            </div>
            <div class="text-center">
                <i class="fa-solid fa-truck"></i>
                <h5>Fast Delivery</h5>
                <p>World wide</p>
            </div>
            <div class="text-center ">
                <i class="fa-solid fa-thumbs-up"></i>
                <h5>Big Choice</h5>
                <p>Of product</p>
            </div>
        </div>
    </div>
    <!-- offer -->

        <hr>
    </div>
    <!-- product -->


    <!-- company logo section starts  -->
    <!-- <div class="company-logo-section section-fluid-270 section-top-gap-100">
        <div class="box-wrapper">
            <div class="company-logo-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="company-slider company-slider-bg">
                                <div class="swiper-container">
                                    <div class="swiper-wrapper">
                                        <a href="#" class="company-slider-single-item swiper-slide">
                                            <div class="image">
                                                <img src="img/logo/l1.png" alt="" class="img-fluid">
                                            </div>
                                        </a>
                                        <a href="#" class="company-slider-single-item swiper-slide">
                                            <div class="image">
                                                <img src="img/logo/l2.png" alt="" class="img-fluid">
                                            </div>
                                        </a>
                                        <a href="#" class="company-slider-single-item swiper-slide">
                                            <div class="image">
                                                <img src="img/logo/l3.png" alt="" class="img-fluid">
                                            </div>
                                        </a>
                                        <a href="#" class="company-slider-single-item swiper-slide">
                                            <div class="image">
                                                <img src="img/logo/l4.png" alt="" class="img-fluid">
                                            </div>
                                        </a>
                                        <a href="#" class="company-slider-single-item swiper-slide">
                                            <div class="image">
                                                <img src="img/logo/l5.png" alt="" class="img-fluid">
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- company logo section ends -->

  
{{-- 

    <section>
        <div class="container d-flex justify-content-between">
            
<lottie-player src="/lottie/patnership"  background="transparent"  speed="1"  style="width: 200px; height: 200px;"  loop autoplay></lottie-player>


            <lottie-player src="/lottie/price-list"  background="transparent"  speed="1"  style="width: 200px; height: 200px;"  loop autoplay></lottie-player>
            
            <lottie-player src="/lottie/safe-to-use"  background="transparent"  speed="1"  style="width: 200px; height: 200px;"  loop autoplay></lottie-player>
        </div>
        <div class="container  d-flex justify-content-between">
            <h2>Customer Satisifaction</h2>
            <h2>Genunine Price</h2>
            <h2>Safe to use</h2>
        </div>
       
    </section> --}}

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
      


    @include('/partials/footer')

</body>

</html>