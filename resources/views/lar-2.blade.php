<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PS CRACKERS</title>
    <link rel="shortcut icon" type="image" href="./image/logo2.p">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="addcart.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <!-- bootstrap links -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- bootstrap links -->
    <!-- fonts links -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <!-- fonts links -->
    <!-- bootstrap shopping cards css -->
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap shopping cards css end-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
  </head>

<body>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
<?php include('navbar.php');?>


    <style>
        .text-bold {
            font-weight: 800;
        }

        text-color {
            color: #0093c4;
        }

        /* Main image - left */
        .main-img img {
            width: 100%;
        }

        /* Preview images */
        .previews img {
            width: 100%;
            height: 140px;
        }

        .main-description .category {
            text-transform: uppercase;
            color: #0093c4;
        }

        .main-description .product-title {
            font-size: 2.5rem;
        }

        .old-price-discount {
            font-weight: 600;
        }

        .new-price {
            font-size: 2rem;
        }

        .details-title {
            text-transform: uppercase;
            font-weight: 600;
            font-size: 1.2rem;
            color: #757575;
        }

        .buttons .block {
            margin-right: 5px;
        }

        .quantity input {
            border-radius: 0;
            height: 40px;

        }


        .custom-btn {
            text-transform: capitalize;
            background-color: #0093c4;
            color: white;
            width: 150px;
            height: 40px;
            border-radius: 0;
        }

        .custom-btn:hover {
            background-color: #0093c4 !important;
            font-size: 18px;
            color: white !important;
        }

        .similar-product img {
            height: 400px;
        }

        .similar-product {
            text-align: left;
        }

        .similar-product .title {
            margin: 17px 0px 4px 0px;
        }

        .similar-product .price {
            font-weight: bold;
        }


        /* Small devices (landscape phones, less than 768px) */
        @media (max-width: 767.98px) {

            /* Make preview images responsive  */
            .previews img {
                width: 100%;
                height: auto;
            }

        }
    </style>


    <div class="container my-5">
        <div class="row">
            <div class="col-md-5">
                <div class="main-img">
                <img class="img-fluid" src="image/lar/lar-4.jpg" >
                    
                    <div class="row my-3 previews">
                        <div class="col-md-3">
                    
                            <img class="w-100" src="image/lar/lar-4.jpg" >
                        </div>
                        <div class="col-md-3">
                        <img class="w-100" src="image/lar/lar-3.webp" >
                        </div>
                        <div class="col-md-3">
                        <img class="w-100" src="image/lar/lar-1.png" >
                        </div>
                        <div class="col-md-3">
                        <img class="w-100" src="image/lar/lar-2.jpg" >
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="main-description px-2">
                    <div class="category text-bold">
                        Category: Flowerpot
                    </div>
                    <div class="product-title text-bold my-3">
                      Flowerpot
                    </div>


                    <div class="price-area my-4">
                        <p class="old-price mb-1"><del>RS.100</del>
                            <span class="old-price-discount text-danger">(20% off)</span></p>
                        <p class="new-price text-bold mb-1">RS.80</p>
                        <p class="text-secondary mb-1">(Additional tax may apply on checkout)</p>

                    </div>


                    <div class="buttons d-flex my-5">
                        <div class="block">
                            <a href="#" class="shadow btn custom-btn ">Wishlist</a>
                        </div>
                        <div class="block">
                            <button class="shadow btn custom-btn">Add to cart</button>
                        </div>

                        <div class="block quantity">
                            <input type="number" class="form-control" id="cart_quantity" value="1" min="0" max="5" placeholder="Enter email" name="cart_quantity">
                        </div>
                    </div>




                </div>

                <div class="product-details my-4">
                    <p class="details-title text-color mb-1">Product Details</p>
                    <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat excepturi
                        odio recusandae aliquid ad impedit autem commodi earum voluptatem laboriosam? </p>
                </div>
                <div class="product-details my-4">
                    <p class="details-title text-color mb-2">Material & Care</p>
                    <ul>
                        <li>Cotton</li>
                        <li>Machine-wash</li>
                    </ul>
                </div>
              
            </div>
        </div>
    </div>

    <!-- product cards -->
    <div class="container" id="product-cards">
        <h1 class="text-center">PRODUCT</h1>

        <!-- bootstrap card -1-->
        <div class="wrapper">
            <div class="container">
                <div class="row g-1">
                    <div class="col-md-3">
                        <div class="card p-3">
                            <div class="text-center">
                                <img src="image/product/s4.png" width="200">
                            </div>
                            <div class="product-details">
                                <span class="font-weight-bold d-block">$ 7.00</span>
                                <span>Red Redish</span>
                                <div class="buttons d-flex flex-row">
                                    <div class="cart"><i class="fa fa-shopping-cart"></i></div> <button
                                        class="btn btn-warning cart-button btn-block"><span class="dot">1</span>Add to
                                        cart </button>
                                </div>
                                <!-- <div class="weight">
                                    <small>1 piece 2.5kg</small>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card p-3">
                            <div class="text-center">
                                <img src="image/product/s4.png" width="200">
                            </div>
                            <div class="product-details">
                                <span class="font-weight-bold d-block">$ 7.00</span>
                                <span>Red Redish</span>
                                <div class="buttons d-flex flex-row">
                                    <div class="cart"><i class="fa fa-shopping-cart"></i></div> <button
                                        class="btn btn-warning cart-button btn-block"><span class="dot">1</span>Add to
                                        cart </button>
                                </div>
                                <!-- <div class="weight">
                                    <small>1 piece 2.5kg</small>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card p-3">
                            <div class="text-center">
                                <img src="image/product/s5.png" width="200">
                            </div>
                            <div class="product-details">
                                <span class="font-weight-bold d-block">$ 7.00</span>
                                <span>Red Redish</span>
                                <div class="buttons d-flex flex-row">
                                    <div class="cart"><i class="fa fa-shopping-cart"></i></div> <button
                                        class="btn btn-warning cart-button btn-block"><span class="dot">1</span>Add to
                                        cart </button>
                                </div>
                                <!-- <div class="weight">
                                    <small>1 piece 2.5kg</small>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card p-3">
                            <div class="text-center">
                                <img src="image/product/s6.png" width="200">
                            </div>
                            <div class="product-details">
                                <span class="font-weight-bold d-block">$ 7.00</span>
                                <span>Red Redish</span>
                                <div class="buttons d-flex flex-row">
                                    <div class="cart"><i class="fa fa-shopping-cart"></i></div> <button
                                        class="btn btn-warning cart-button btn-block"><span class="dot">1</span>Add to
                                        cart </button>
                                </div>
                                <!-- <div class="weight">
                                    <small>20 piece 2.5kg</small>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- bootstrap card end 1-->


          <!-- bootstrap card2 -->
          <div class="wrapper ">
            <div class="container">
                <div class="row g-1">
                    <div class="col-md-3">
                        <div class="card p-3">
                            <div class="text-center">
                                <img src="image/product/s4.png" width="200">
                            </div>
                            <div class="product-details">
                                <span class="font-weight-bold d-block">$ 7.00</span>
                                <span>Red Redish</span>
                                <div class="buttons d-flex flex-row">
                                    <div class="cart"><i class="fa fa-shopping-cart"></i></div> <button
                                        class="btn btn-warning cart-button btn-block"><span class="dot">1</span>Add to
                                        cart </button>
                                </div>
                                <div class="weight">
                                    <small>1 piece 2.5kg</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card p-3">
                            <div class="text-center">
                                <img src="image/product/products4.jpg" width="200">
                            </div>
                            <div class="product-details">
                                <span class="font-weight-bold d-block">$ 7.00</span>
                                <span>Red Redish</span>
                                <div class="buttons d-flex flex-row">
                                    <div class="cart"><i class="fa fa-shopping-cart"></i></div> <button
                                        class="btn btn-warning cart-button btn-block"><span class="dot">1</span>Add to
                                        cart </button>
                                </div>
                                <!-- <div class="weight">
                                    <small>1 piece 2.5kg</small>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card p-3">
                            <div class="text-center">
                                <img src="image/product/s4.png" width="200">
                            </div>
                            <div class="product-details">
                                <span class="font-weight-bold d-block">$ 7.00</span>
                                <span>Red Redish</span>
                                <div class="buttons d-flex flex-row">
                                    <div class="cart"><i class="fa fa-shopping-cart"></i></div> <button
                                        class="btn btn-warning cart-button btn-block"><span class="dot">1</span>Add to
                                        cart </button>
                                </div>
                                <!-- <div class="weight">
                                    <small>1 piece 2.5kg</small>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card p-3">
                            <div class="text-center">
                                <img src="image/product/s3.png" width="200">
                            </div>
                            <div class="product-details">
                                <span class="font-weight-bold d-block">$ 7.00</span>
                                <span>Red Redish</span>
                                <div class="buttons d-flex flex-row">
                                    <div class="cart"><i class="fa fa-shopping-cart"></i></div> <button
                                        class="btn btn-warning cart-button btn-block"><span class="dot">1</span>Add to
                                        cart </button>
                                </div>
                                <!-- <div class="weight">
                                    <small>20 piece 2.5kg</small>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- bootstrap card end 2-->


          <!-- bootstrap card3 -->
          <div class="wrapper">
            <div class="container">
                <div class="row g-1">
                    <div class="col-md-3">
                        <div class="card p-3">
                            <div class="text-center">
                                <img src="image/product/products1.jpg" width="200">
                            </div>
                            <div class="product-details">
                                <span class="font-weight-bold d-block">RS. 7.00</span>
                                <span>Red Redish</span>
                                <div class="buttons d-flex flex-row">
                                    <div class="cart"><i class="fa fa-shopping-cart"></i></div> <button
                                        class="btn btn-warning cart-button btn-block"><span class="dot">1</span>Add to
                                        cart </button>
                                </div>
                                <!-- <div class="weight">
                                    <small>1 piece 2.5kg</small>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card p-3">
                            <div class="text-center">
                                <img src="image/product/products4.jpg" width="200">
                            </div>
                            <div class="product-details">
                                <span class="font-weight-bold d-block">RS. 7.00</span>
                                <span>Red Redish</span>
                                <div class="buttons d-flex flex-row">
                                    <div class="cart"><i class="fa fa-shopping-cart"></i></div> <button
                                        class="btn btn-warning cart-button btn-block"><span class="dot">1</span>Add to
                                        cart </button>
                                </div>
                                <!-- <div class="weight">
                                    <small>1 piece 2.5kg</small>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card p-3">
                            <div class="text-center">
                                <img src="image/product/s3.png" width="200">
                            </div>
                            <div class="product-details">
                                <span class="font-weight-bold d-block">RS. 7.00</span>
                                <span>Red Redish</span>
                                <div class="buttons d-flex flex-row">
                                    <div class="cart"><i class="fa fa-shopping-cart"></i></div> <button
                                        class="btn btn-warning cart-button btn-block"><span class="dot">1</span>Add to
                                        cart </button>
                                </div>
                                <!-- <div class="weight">
                                    <small>1 piece 2.5kg</small>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card p-3">
                            <div class="text-center">
                                <img src="image/product/s3.png" width="200">
                            </div>
                            <div class="product-details">
                                <span class="font-weight-bold d-block">RS. 7.00</span>
                                <span>Red Redish</span>
                                <div class="buttons d-flex flex-row">
                                    <div class="cart"><i class="fa fa-shopping-cart"></i></div> <button
                                        class="btn btn-warning cart-button btn-block"><span class="dot">1</span>Add to
                                        cart </button>
                                </div>
                                <!-- <div class="weight">
                                    <small>20 piece 2.5kg</small>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- bootstrap card end 3-->
        <div class="center-3 mt-3">
            <button class="btn-3">View More</button>

          </div>
    </div>
    <!-- product cards -->

   




    </div>

<?php include('footer.php');?>
</body>

</html>