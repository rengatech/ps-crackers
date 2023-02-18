
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
    <div class="col col-lg-3">
    <ul class="nav-item text-dark">
       <li class="nav-link nav-link-p"><a  class="link-dark text-decoration-none" style=" font-size: 1.2rem;" href="address"><i class="fa-solid fa-house" style="color: #63459B;">	&nbsp; </i>Address</li></a>
       <li class="nav-link nav-link-p "><a  class="link-dark text-decoration-none" style=" font-size: 1.2rem;" href="order"><i class="fa-solid fa-cart-shopping" style="color: #63459B;"> &nbsp;</i>Orders</li></a>
       <li class="nav-link nav-link-p "><a  class="link-dark text-decoration-none" style=" font-size: 1.2rem;" href="account-details"><i class="fa-solid fa-user" style="color: #63459B;"> &nbsp;</i>Account Details</li></a>
       <li class="nav-link nav-link-p "><a  class="link-dark text-decoration-none" style=" font-size: 1.2rem;" href="change-password"><i class="fa-solid fa-gear" style="color: #63459B;"> &nbsp;</i>Change Password</li></a>
       <li class="nav-link nav-link-p "><a  class="link-dark text-decoration-none" style=" font-size: 1.2rem;" href="/"><i class="fa-solid fa-right-from-bracket" style="color: #63459B;"> &nbsp;</i>Logout</li></a>
      </ul>
    </div>
    <div class="col col-lg-8">
    <table class="table">
     <h1>Orders</h1>
     <thead>
        <tr>
          <th scope="col">Orders</th>
          <th scope="col">Date</th>
          <th scope="col">Status</th>
          <th scope="col">Total</th>
          <th scope="col">Actions</th>
         </tr>
     </thead>
     <tbody>
     <tr>
      <th scope="row" class="table-gap">#1111</th>
      <td class="table-gap">March 1, 2023</td>
      <td class="table-gap">Completed</td>
      <td class="table-gap">$00,0.00 for 93 items</td>
      <td class="table-gap"><button class="btn text-white" style="background-color:#63459b">View</button></td>
     </tr>
     <tr>
      <th scope="row" class="table-gap">#2222</th>
      <td class="table-gap">March 1, 2023</td>
      <td class="table-gap">Completed</td>
      <td class="table-gap">$00,0.00 for 93 items</td>
      <td class="table-gap"><button class="btn text-white" style="background-color:#63459b">View</button></td>
     </tr>
     <tr>
      <th scope="row" class="table-gap">#3333</th>
      <td class="table-gap">March 18, 2023</td>
      <td class="table-gap">Completed</td>
      <td class="table-gap">$00,0.00 for 3 items</td>
      <td class="table-gap"><button class="btn text-white" style="background-color:#63459b">View</button></td>
     </tr>
     </tbody>
    </table>
    </div>
  </div>
 
  
  
</div>


   


@include('/partials/footer')


</body>
</html>