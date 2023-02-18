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

<div class="container">
<table class="table">

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
      <th scope="row">1</th>
      <td>March 18, 2021</td>
      <td>Completed</td>
      <td>$16,950.00 for 93 items</td>
      <td><button class="btn">View</button></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>March 18, 2021</td>
      <td>Completed</td>
      <td>$16,950.00 for 93 items</td>
      <td><button class="btn">View</button></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>March 18, 2021</td>
      <td>Completed</td>
      <td>$16,950.00 for 93 items</td>
      <td><button class="btn">View</button></td>
    </tr>
  </tbody>
</table>
</div>
   


@include('/partials/footer')


</body>
</html>