    <!-- top navbar -->
    <div class="top-navbar">
        <div class="top-icons">
            <!-- <i class="fa-brands fa-twitter    text-white"></i> -->
            <i class="fa-brands fa-facebook-f  text-white"></i>
            <i class="fa-brands fa-instagram   text-white"></i>
        </div>
        <div class="other-links">


        <a href="login"> <button id="btn-signup" class="mr-1">Login</button></a>
        <a href="signup"> <button id="btn-signup" >Sign up</button></a>
           {{-- <a href="order"> <i class="fa-solid fa-user text-white"></i></a> --}}
        <i class="fa-solid fa-cart-shopping text-white "></i>

        </div>
    </div>
    <!-- top navbar -->


    <!-- navbar -->
    <nav class=" navbar navbar-1 navbar-expand-lg  " id="navbar">
        <div class="container-fluid">
            <a class="navbar-brand" style="margin-right: 0px" href="index.php">
                <img src="image/logo/logo-3.png" class="logo-h" alt="" width="180px">

            </a>
            <a class="navbar-brand" href="index.php">
                <img src="image/logo/logo-e3.png" class="logo-e" alt="">

            </a>
            <!-- <h1 class="ps-name">Pandi Selvi <span>Traders</span> </h1> -->

            <button class="navbar-toggler  container-3"  type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                onclick="myFunction(this)" >
                <div class="bar1"></div>
              <div class="bar2"></div>
              <div class="bar3"></div>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent" style="width: 0 ">
            <?php  $active_page=basename($_SERVER['PHP_SELF'], ".php");    ?>
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 nav-links-1 ">
                    <li class="nav-item">
                        <a class="nav-link  <?php echo $active_page === 'index' ? 'active-1' : ''; ?>" aria-current="page" href="/">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link  <?php echo $active_page === 'about' ? 'active-1' : ''; ?>" href="about">About us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  <?php echo $active_page === 'order-list' ? 'active-1' : ''; ?>" href="order-list">Order List</a>
                    </li>
                     <li class="nav-item">
                        <a class="nav-link  <?php echo $active_page === 'gallery' ? 'active-1' : ''; ?>" href="gallery">Products

                        </a>
                    </li>

                     <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="/" id="navbarDropdown"  data-bs-toggle="dropdown"
                      aria-expanded="false">
                          Collection

                        </a>
                        <div class="dropdown-menu cl" aria-labelledby="navbarDropdown">
                          <ul>
                            <li><a class="dropdown-item" style="color:#63459B" href="flowerpot-3">Flower Pots</a></li>
                            <li><a class="dropdown-item" href="flowerpot-3">Flower Pots Small</a></li>
                            <li><a class="dropdown-item" href="flowerpot-3">Flower Pots Big</a></li>
                            <li><a class="dropdown-item" href="flowerpot-3">Flower Pots Special</a></li>
                            <li><a class="dropdown-item" href="flowerpot-3">Super Deluxe (5 Pcs)</a></li>
                            <li><a class="dropdown-item" href="flowerpot-3">Colour Koti Red&green(5 Pcs)</a></li>
                          </ul>
                          <ul>
                            <li><a class="dropdown-item" style="color:#63459B" href="#">Kids crackers</a></li>
                            <li><a class="dropdown-item" href="#">1 1/2 Twinkling Star</a></li>
                            <li><a class="dropdown-item" href="#">4 '' Twinkling Star</a></li>
                            <li><a class="dropdown-item" href="#">Magic Pops</a></li>
                            <li><a class="dropdown-item" href="#">Ultra Candle</a></li>
                            <li><a class="dropdown-item" href="#">Zee Boom Baa</a></li>
                          </ul>
                          <ul>
                            <li><a class="dropdown-item" style="color:#63459B"  href="#">Sound Crackers</a></li>
                            <li><a class="dropdown-item" href="#">Auto Bomb</a></li>
                            <li><a class="dropdown-item" href="#">Hydro Bomb</a></li>
                            <li><a class="dropdown-item" href="#">Classic bomb</a></li>
                            <li><a class="dropdown-item" href="#">Digital Bomb</a></li>
                            <li><a class="dropdown-item" href="#">ds Bomb</a></li>
                          </ul>
                          <ul>
                            <li><a class="dropdown-item"  style="color:#63459B" href="#">Sparklers</a></li>
                            <li><a class="dropdown-item" href="#">7cm Colors </a></li>
                            <li><a class="dropdown-item" href="#">10cm red</a></li>
                            <li><a class="dropdown-item" href="#">15cm elctic</a></li>
                            <li><a class="dropdown-item" href="#">30cm green</a></li>
                            <li><a class="dropdown-item" href="#">50cm green</a></li>
                          </ul>
                        </div>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="/" id="navbarDropdown"  data-bs-toggle="dropdown"
                          aria-expanded="false">
                          Fancy
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <ul>
                            <li><a class="dropdown-item"  style="color:#63459B" href="product">Fancy </a></li>
                            <li><a class="dropdown-item" href="#">Chotta Fancy </a></li>
                            <li><a class="dropdown-item" href="#">2 '' Fancy (3 Pcs)</a></li>
                            <li><a class="dropdown-item" href="#">2 '' Fancy (single )</a></li>
                            <li><a class="dropdown-item" href="#">3 '' Fancy (single )</a></li>
                            <li><a class="dropdown-item" href="#">5 '' Fancy (single )</a></li>
                          </ul>
                          <ul>
                            <li><a class="dropdown-item" style="color:#63459B" href="#">Multi-Fancy</a></li>
                            <li><a class="dropdown-item" href="#">12 Shot</a></li>
                            <li><a class="dropdown-item" href="#">25 Shot </a></li>
                            <li><a class="dropdown-item" href="#">30 Shot</a></li>
                            <li><a class="dropdown-item" href="#">60 Shot</a></li>
                            <li><a class="dropdown-item" href="#">120 Shot</a></li>
                          </ul>

                        </div>
                      </li>
                      {{-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="/" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                          aria-expanded="false">
                          Ground crackers
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <ul>
                            <li><a class="dropdown-item " style="color:#63459B" href="#">Ground Chakkar</a></li>
                            <li><a class="dropdown-item" href="#">Chakkar Deluxe</a></li>
                            <li><a class="dropdown-item" href="#">Chakkar small</a></li>
                            <li><a class="dropdown-item" href="#">Chakkar big</a></li>
                            <li><a class="dropdown-item" href="#">chakkar special</a></li>
                          </ul>
                        </div>
                      </li> --}}
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="/" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                          aria-expanded="false">
                          Account
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <ul>
                            <li><a class="dropdown-item" href="#">Account</a></li>
                            <li><a class="dropdown-item" href="address">Address</a></li>
                            <li><a class="dropdown-item" href="order">Orders</a></li>
                            <li><a class="dropdown-item" href="account-details">Account Details</a></li>
                            <li><a class="dropdown-item" href="change-password">Change Password</a></li>
                            <li><a class="dropdown-item" href="/">Log Out</a></li>
                          </ul>
                        </div>
                      </li>
                    </li>



                    <li class="nav-item">
                        <a class="nav-link  <?php echo $active_page === 'contact' ? 'active-1' : ''; ?>" href="contact">Contact us</a>
                    </li>
                </div>
                     <!-- START: RUBY DEMO HEADER -->
{{-- <div class="ruby-menu-demo-header"> --}}

    {{-- <div class="ruby-wrapper"> --}}
      {{-- <button class="c-hamburger c-hamburger--htx visible-xs">
        <span>toggle menu</span>
      </button> --}}
      {{-- <ul class="ruby-menu">
        <li><a href="#">Classic</a>
          <ul class="">
            <li><a href="#">2nd Level #1</a></li>
            <li><a href="#">2nd Level #2</a></li>
            <li><a href="#">2nd Level #3</a>
              <ul>
                <li><a href="#"><i class="fa fa-university" aria-hidden="true"></i>3rd Level #1</a>
                  <ul>
                    <li><a href="#">4th Level #1</a></li>
                    <li><a href="#">4th Level #2</a></li>
                  </ul>
                  <span class="ruby-dropdown-toggle"></span>
                </li>
                <li><a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i>3rd Level #2</a></li>
                <li><a href="#"><i class="fa fa-users" aria-hidden="true"></i>3rd Level #3</a>
                  <ul>
                    <li><a href="#"><i class="fa fa-paper-plane" aria-hidden="true"></i>4th Level #1</a></li>
                    <li><a href="#"><i class="fa fa-print" aria-hidden="true"></i>4th Level #2</a></li>
                    <li><a href="#"><i class="fa fa-shopping-bag" aria-hidden="true"></i>4th Level #3</a></li>
                  </ul>
                  <span class="ruby-dropdown-toggle"></span>
                </li>
              </ul>
              <span class="ruby-dropdown-toggle"></span>
            </li>
            <li class="ruby-open-to-left"><a href="#">2nd Level #4</a>
              <ul>
                <li><a href="#">3rd Level #1</a></li>
                <li><a href="#">3rd Level #2</a></li>
                <li><a href="#">3rd Level #3</a></li>
              </ul>
              <span class="ruby-dropdown-toggle"></span>
            </li>
            <li><a href="#">2nd Level #5</a></li>
          </ul>
          <span class="ruby-dropdown-toggle"></span>
        </li>

        <li class="ruby-menu-mega"><a href="#">Mega</a>
          <div class="ruby-grid ruby-grid-lined">
            <div class="ruby-row">
              <div class="ruby-col-2">
                <h3 class="ruby-list-heading">Normal List</h3>
                <ul>
                  <li><a href="#">Menu Item #1</a></li>
                  <li><a href="#">Menu Item #2</a></li>
                  <li><a href="#">Menu Item #3</a></li>
                  <li><a href="#">Menu Item #4</a></li>
                  <li><a href="#">Menu Item #5</a></li>
                </ul>
              </div>
              <div class="ruby-col-2 hidden-md">
                <h3 class="ruby-list-heading">List with Icons</h3>
                <ul>
                  <li><a href="#"><i class="fa fa-motorcycle" aria-hidden="true"></i>Menu Item #1</a></li>
                  <li><a href="#"><i class="fa fa-music" aria-hidden="true"></i>Menu Item #2</a></li>
                  <li><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i>Menu Item #3</a></li>
                  <li><a href="#"><i class="fa fa-sliders" aria-hidden="true"></i>Menu Item #4</a></li>
                  <li><a href="#"><i class="fa fa-search" aria-hidden="true"></i>Menu Item #5</a></li>
                </ul>
              </div>
              <div class="ruby-col-3 ruby-col-4-md">
                <h3 class="ruby-list-heading">List with Images + Desc</h3>
                <ul class="ruby-list-with-images">
                  <li><a href="#"><img src="img/c-1.png">Menu Item #1</a><span class="ruby-list-desc">Lorem ipsum dolor sit</span></li>
                  <li><a href="#"><img src="img/c-2.png">Menu Item #2</a><span class="ruby-list-desc">Lorem ipsum dolor sit</span></li>
                  <li><a href="#"><img src="img/c-3.png">Menu Item #3</a><span class="ruby-list-desc">Lorem ipsum dolor sit</span></li>
                </ul>
              </div>
              <div class="ruby-col-5">
                <h3 class="ruby-list-heading">Multiple Lists with Icons</h3>
                <div class="ruby-row">
                  <div class="ruby-col-4 ruby-col-6-md">
                    <ul>
                      <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i>Menu Item</a></li>
                      <li><a href="#"><i class="fa fa-signal" aria-hidden="true"></i>Menu Item</a></li>
                      <li><a href="#"><i class="fa fa-send" aria-hidden="true"></i>Menu Item</a></li>
                      <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i>Menu Item</a></li>
                      <li><a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i>Menu Item</a></li>
                    </ul>
                  </div>
                  <div class="ruby-col-4 ruby-col-6-md" style="padding-left:10px">
                    <ul>
                      <li><a href="#"><i class="fa fa-rocket" aria-hidden="true"></i>Menu Item</a></li>
                      <li><a href="#"><i class="fa fa-warning" aria-hidden="true"></i>Menu Item</a></li>
                      <li><a href="#"><i class="fa fa-upload" aria-hidden="true"></i>Menu Item</a></li>
                      <li><a href="#"><i class="fa fa-umbrella" aria-hidden="true"></i>Menu Item</a></li>
                      <li><a href="#"><i class="fa fa-trophy" aria-hidden="true"></i>Menu Item</a></li>
                    </ul>
                  </div>
                  <div class="ruby-col-4 hidden-md" style="padding-left:15px">
                    <ul>
                      <li><a href="#"><i class="fa fa-map-o" aria-hidden="true"></i>Menu Item</a></li>
                      <li><a href="#"><i class="fa fa-image" aria-hidden="true"></i>Menu Item</a></li>
                      <li><a href="#"><i class="fa fa-legal" aria-hidden="true"></i>Menu Item</a></li>
                      <li><a href="#"><i class="fa fa-paint-brush" aria-hidden="true"></i>Menu Item</a></li>
                      <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i>Menu Item</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <span class="ruby-dropdown-toggle"></span>
        </li>



        <li class="ruby-menu-mega-shop"><a href="#">Shop</a>
          <div style="height: 263px;" class="">
            <ul>
              <li class="ruby-active-menu-item"><a href="#">Clothing</a>
                <div class="ruby-grid ruby-grid-lined">
                  <div class="ruby-row">
                    <div class="ruby-col-2">
                      <h3 class="ruby-list-heading">TOPS</h3>
                      <ul>
                        <li><a href="#">Menu Item #1</a></li>
                        <li><a href="#">Menu Item #2</a></li>
                        <li><a href="#">Menu Item #3</a></li>
                        <li><a href="#">Menu Item #4</a></li>
                        <li><a href="#">Menu Item #5</a></li>
                      </ul>
                    </div>
                    <div class="ruby-col-2">
                      <img src="img/outerwear-2.jpg">
                    </div>
                    <div class="ruby-col-2">
                      <h3 class="ruby-list-heading">BOTTOM</h3>
                      <ul>
                        <li><a href="#">Menu Item #1</a></li>
                        <li><a href="#">Menu Item #2</a></li>
                        <li><a href="#">Menu Item #3</a></li>
                        <li><a href="#">Menu Item #4</a></li>
                        <li><a href="#">Menu Item #5</a></li>
                      </ul>
                    </div>
                    <div class="ruby-col-2">
                      <h3 class="ruby-list-heading">NIGHTWEAR</h3>
                      <ul>
                        <li><a href="#">Menu Item #1</a></li>
                        <li><a href="#">Menu Item #2</a></li>
                        <li><a href="#">Menu Item #3</a></li>
                        <li><a href="#">Menu Item #4</a></li>
                        <li><a href="#">Menu Item #5</a></li>
                      </ul>
                    </div>
                    <div class="ruby-col-2">
                      <img src="img/outerwear-3.jpg">
                    </div>
                    <div class="ruby-col-2">
                      <h3 class="ruby-list-heading">SWIMWEAR</h3>
                      <ul>
                        <li><a href="#">Menu Item #1</a></li>
                        <li><a href="#">Menu Item #2</a></li>
                        <li><a href="#">Menu Item #3</a></li>
                        <li><a href="#">Menu Item #4</a></li>
                        <li><a href="#">Menu Item #5</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <span class="ruby-dropdown-toggle"></span>
              </li>
              <li><a href="#">Outerwear</a>
                <div class="ruby-grid ruby-grid-lined">
                  <div class="ruby-row">
                    <div class="ruby-col-3">
                      <img src="img/outerwear.jpg">
                    </div>
                    <div class="ruby-col-3">
                      <h3 class="ruby-list-heading">COATS</h3>
                      <ul>
                        <li><a href="#">Menu Item #1</a></li>
                        <li><a href="#">Menu Item #2</a></li>
                        <li><a href="#">Menu Item #3</a></li>
                        <li><a href="#">Menu Item #4</a></li>
                        <li><a href="#">Menu Item #5</a></li>
                        <li><a href="#">Menu Item #6</a></li>
                        <li><a href="#">Menu Item #7</a></li>
                      </ul>
                    </div>
                    <div class="ruby-col-3">
                      <h3 class="ruby-list-heading">JACKETS</h3>
                      <ul>
                        <li><a href="#">Menu Item #1</a></li>
                        <li><a href="#">Menu Item #2</a></li>
                        <li><a href="#">Menu Item #3</a></li>
                        <li><a href="#">Menu Item #4</a></li>
                        <li><a href="#">Menu Item #5</a></li>
                        <li><a href="#">Menu Item #6</a></li>
                        <li><a href="#">Menu Item #7</a></li>
                      </ul>
                    </div>
                    <div class="ruby-col-3">
                      <h3 class="ruby-list-heading">LEATHER</h3>
                      <ul>
                        <li><a href="#">Menu Item #1</a></li>
                        <li><a href="#">Menu Item #2</a></li>
                        <li><a href="#">Menu Item #3</a></li>
                        <li><a href="#">Menu Item #4</a></li>
                        <li><a href="#">Menu Item #5</a></li>
                        <li><a href="#">Menu Item #6</a></li>
                        <li><a href="#">Menu Item #7</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <span class="ruby-dropdown-toggle"></span>
              </li>
              <li><a href="#">Bags &amp; Shoes</a>
                <div class="ruby-grid ruby-grid-lined">
                  <div class="ruby-row">
                    <div class="ruby-col-3">
                      <img src="img/bags.jpg">
                    </div>
                    <div class="ruby-col-3">
                      <h3 class="ruby-list-heading">BAGS</h3>
                      <ul>
                        <li><a href="#">Menu Item #1</a></li>
                        <li><a href="#">Menu Item #2</a></li>
                        <li><a href="#">Menu Item #3</a></li>
                        <li><a href="#">Menu Item #4</a></li>
                        <li><a href="#">Menu Item #5</a></li>
                      </ul>
                    </div>
                    <div class="ruby-col-3">
                      <h3 class="ruby-list-heading">SHOES</h3>
                      <ul>
                        <li><a href="#">Menu Item #1</a></li>
                        <li><a href="#">Menu Item #2</a></li>
                        <li><a href="#">Menu Item #3</a></li>
                        <li><a href="#">Menu Item #4</a></li>
                        <li><a href="#">Menu Item #5</a></li>
                      </ul>
                    </div>
                    <div class="ruby-col-3">
                      <img src="img/shoes.jpg">
                    </div>
                  </div>
                </div>
                <span class="ruby-dropdown-toggle"></span>
              </li>
              <li><a href="#">Accessories</a>
                <div class="ruby-grid ruby-grid-lined">
                  <div class="ruby-row">
                    <div class="ruby-col-3">
                      <img src="img/eyewear.jpg">
                      <h3 class="ruby-list-heading" style="margin-top: 16px;">EYEWEAR</h3>
                      <ul>
                        <li><a href="#">Menu Item #1</a></li>
                        <li><a href="#">Menu Item #2</a></li>
                        <li><a href="#">Menu Item #3</a></li>
                        <li><a href="#">Menu Item #4</a></li>
                      </ul>
                    </div>
                    <div class="ruby-col-3">
                      <img src="img/jewellery.jpg">
                      <h3 class="ruby-list-heading" style="margin-top: 16px;">JEWELLERY</h3>
                      <ul>
                        <li><a href="#">Menu Item #1</a></li>
                        <li><a href="#">Menu Item #2</a></li>
                        <li><a href="#">Menu Item #3</a></li>
                        <li><a href="#">Menu Item #4</a></li>
                      </ul>
                    </div>
                    <div class="ruby-col-3">
                      <img src="img/watches.jpg">
                      <h3 class="ruby-list-heading" style="margin-top: 16px;">WATCHES</h3>
                      <ul>
                        <li><a href="#">Menu Item #1</a></li>
                        <li><a href="#">Menu Item #2</a></li>
                        <li><a href="#">Menu Item #3</a></li>
                        <li><a href="#">Menu Item #4</a></li>
                      </ul>
                    </div>
                    <div class="ruby-col-3">
                      <img src="img/textile.jpg">
                      <h3 class="ruby-list-heading" style="margin-top: 16px;">OTHERS</h3>
                      <ul>
                        <li><a href="#">Menu Item #1</a></li>
                        <li><a href="#">Menu Item #2</a></li>
                        <li><a href="#">Menu Item #3</a></li>
                        <li><a href="#">Menu Item #4</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <span class="ruby-dropdown-toggle"></span>
              </li>
              <li><a href="#">Collections</a>
                <div class="ruby-grid ruby-grid-lined">
                  <div class="ruby-row">
                    <div class="ruby-col-3">
                      <img src="img/collection-accessori.jpg">
                    </div>
                    <div class="ruby-col-3">
                      <img src="img/collection-bridal.jpg">
                    </div>
                    <div class="ruby-col-3">
                      <img src="img/collection-cube.jpg">
                    </div>
                    <div class="ruby-col-3">
                      <img src="img/collection-elegante.jpg">
                    </div>
                  </div>
                  <div class="ruby-row">
                    <div class="ruby-col-3">
                      <img src="img/collection-maxmara.jpg">
                    </div>
                    <div class="ruby-col-3">
                      <img src="img/collection-sfilata.jpg">
                    </div>
                    <div class="ruby-col-3">
                      <img src="img/collection-shine.jpg">
                    </div>
                    <div class="ruby-col-3">
                      <img src="img/collection-s-maxmara.jpg">
                    </div>
                  </div>
                </div>
                <span class="ruby-dropdown-toggle"></span>
              </li>
            </ul>
          </div>
          <span class="ruby-dropdown-toggle"></span>
        </li>


      </ul> --}}
    {{-- </div> --}}


  {{-- </div> --}}

            </div>
        </nav>


                </ul>

                <!-- <form class="d-flex">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit" id="search-btn">Search</button>
                </form> -->







       {{-- navbar end  --}}




