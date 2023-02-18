
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PS CRACKERS</title>
    <link rel="icon" type="image/x-icon" href="image/logo/favicon-1.png">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/add-cart.css">
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css"> 

    <!-- bootstrap shopping cards css end-->
    <!-- <link rel="icon" type="png" href="image/logo/favicon-2.png"> -->
</head>
@include('/partials/navbar')

<div class="container mt-5" style=" min-height:350px;">
  <div class="row">
    <div class="col col-lg-4">
    <ul class="nav-item text-dark">
       <li class="nav-link nav-link-p"><a  class="link-dark text-decoration-none" style=" font-size: 1.2rem;" href="address"><i class="fa-solid fa-house" style="color: #63459B;">	&nbsp; </i>Address</li></a>
       <li class="nav-link nav-link-p "><a  class="link-dark text-decoration-none" style=" font-size: 1.2rem;" href="order"><i class="fa-solid fa-cart-shopping" style="color: #63459B;"> &nbsp;</i>Orders</li></a>
       <li class="nav-link nav-link-p "><a  class="link-dark text-decoration-none" style=" font-size: 1.2rem;" href="account-details"><i class="fa-solid fa-user" style="color: #63459B;"> &nbsp;</i>Account Details</li></a>
       <li class="nav-link nav-link-p "><a  class="link-dark text-decoration-none" style=" font-size: 1.2rem;" href="change-password"><i class="fa-solid fa-gear" style="color: #63459B;"> &nbsp;</i>Change Password</li></a>
       <li class="nav-link nav-link-p "><a  class="link-dark text-decoration-none" style=" font-size: 1.2rem;" href="/"><i class="fa-solid fa-right-from-bracket" style="color: #63459B;"> &nbsp;</i>Logout</li></a>
      </ul>
    </div>
    <div class="col-lg-6">
      <h4 class="mb-3">Address</h4>
      <form class="row g-3">
        <div class="col-md-6 ">
          <label for="firstName">First name</label>
          <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
          <div class="invalid-feedback">
            Valid first name is required.
          </div>
        </div>
        <div class="col-md-6 ">
          <label for="lastName">Last name</label>
          <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
          <div class="invalid-feedback">
            Valid last name is required.
          </div>
        </div>
        <div class="col-12">
          <label for="inputAddress" class="form-label">Address</label>
          <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
        </div>
        <div class="col-12">
          <label for="inputAddress2" class="form-label">Address 2</label>
          <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
        </div>
        <div class="col-md-6">
          <label for="inputCity" class="form-label">City</label>
          <input type="text" class="form-control" id="inputCity">
        </div>
        <div class="col-md-4">
          <label for="inputState" class="form-label">State</label>
          <select id="inputState" class="form-select">
            <option selected>Choose...</option>
            <option>Tamilnadu</option>
          </select>
        </div>
        <div class="col-md-2">
          <label for="inputZip" class="form-label">Zip</label>
          <input type="text" class="form-control" id="inputZip">
        </div>
        <div class="col-12">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
              Shipping address is the same as my billing address
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
              Save this information for next time
            </label>
          </div>
        </div>
        <div class="col-12">
          <button type="submit" class="btn" style="background-color:#63459B; color:#fff">Add to address</button>
        </div>
      </form>
   </div>
   
  </div>   
</div>


   


@include('/partials/footer')


</body>
</html>