<!DOCTYPE html>
<html>

<head>
  <title>Login Page</title>
  <!--Made with love by Mutiullah Samim -->

  <!--Bootsrap 4 CDN-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <!--Fontawesome CDN-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
    integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

  <!--Custom styles-->
  <link rel="stylesheet" type="text/css" href="css/styles1.css">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

  <!------ Include the above in your HEAD tag ---------->
</head>

<body>
  <div class="container">
    <h1 class="text-center p-2 text-danger">Total Recharge History</h1>
    <div class="row">
      <div class="col-md-1"></div>
      <div class="col-md-10">
        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">Mobile No.</th>
              <th scope="col">Operator</th>
              <th scope="col">State</th>
              <th scope="col">Plan Price</th>
              <th scope="col">Type</th>
            </tr>
          </thead>
          <tbody>
          <?php
											include('dbcon.php');
											$sql = "select * from mobile_recharge";
											$result = $conn->query($sql);
											$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                      while($row1 = $result->fetch_assoc()){
										?>
            <tr>
              <th scope="row"><?php echo $row1['mobile_no']; ?></th>
              <td><?php echo $row1['operator']; ?></td>
              <td><?php echo $row1['state']; ?></td>
              <td><?php echo $row1['plan_rs']; ?></td>
              <td><?php echo $row1['optype']; ?></td>
            </tr>
            <?php } ?>
          </tbody>
        </table>

      </div>
      <div class="col-md-1"></div>
    </div>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
    integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

</body>

</html>