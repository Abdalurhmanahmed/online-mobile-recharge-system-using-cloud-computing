<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link href="css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>ORP ---> Plan</title>
	<style>
	  .register-heading{
	   margin-bottom:0px;
	   padding-bottom:8px;
	}
	</style>
  </head>
  <body>
      <div class="container-fluid p-0 m-0  register">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                        <h3>Welcome</h3>
                        <p>You are 30 seconds away from earning your own money!</p>
                    </div>
                    <div class="col-md-9 register-right">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="row">
                                    <div class="col-md-12">
										<div class="row pl-5 ml-2 pt-1" style="border-bottom:3px solid gray;">
											<div class="col-md-3">
												<h6 class="register-heading text-center">Truly Unlimited</h6>
											</div>
											<div class="col-md-3">
												<h6 class="register-heading text-center ">Smart Recharge</h6>
											</div>
											<div class="col-md-3">
												<h6 class="register-heading text-center">Data Recharge</h6>
											</div>
											<div class="col-md-3">
												<h6 class="register-heading text-center">Talktime Balance</h6>
											</div>
										</div>
										<?php
											include('dbcon.php');
											$mob = $_GET['mob'];
											$sql = "select operator from mobile_recharge where mobile_no = '$mob'";
											$result = $conn->query($sql);
											$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
											$op = $row['operator'];
											$sql1 = "select * from plan where otype = '$op'";
											$result1 = $conn->query($sql1);
										?>
									<div class="row">
										<div class="col-md-12">
										        <?php
													while($row1 = $result1->fetch_assoc()){
												?>
											<div class="row pl-5 pt-1 bp-1">
												<div class="col-md-12">
													<h6 class="register-heading text-left mt-0">Truly Unlimited</h6>
												</div>
												<div class="col-md-3">
													<h6 class="register-heading text-left p-0 m-0"><i class="fa fa-rupee"></i><?php echo $row1['plan_rs']; ?></h6>
													<pre class="p-0 m-0" style="font-size:12px;"><?php echo $row1['call_type']; ?></pre>
											    </div>
												<div class="col-md-3">
													<h6 class="register-heading text-center p-0 m-0"><?php echo $row1['data']; ?></h6>
													<pre class="p-0 m-0 text-center" style="font-size:12px;">/days</pre>
											    </div>
												<div class="col-md-3">
													<h6 class="register-heading text-center p-0 m-0"><?php echo $row1['days']; ?> Days</h6>
													<pre class="p-0 m-0 text-center" style="font-size:12px;">Validity</pre>
											    </div>
												<div class="col-md-3 text-center">
													<button type="button" value="<?php echo $row1['plan_rs']; ?>" id="ht" class="btn btn-primary"><i class="fa fa-rupee"></i> <?php echo $row1['plan_rs']; ?></button>
											    </div>
												<div class="col-md-12 pt-2 pb-2">
													<pre class="p-0 m-0" style="font-size:12px;">Additional Benefit(s)</pre>
											    </div>
												<div class="col-md-4 d-flex flex-row">
													<img src="img/h.png" style="" width="20px" height="20px" alt="Responsive image"><pre class="p-0 m-0 pl-1 pt-1 align-items-center" style="font-size:10px;">Disney+ Hotstar Mobile</pre>
											    </div>
												<div class="col-md-4 d-flex flex-row">
													<img src="img/a.png" style="" width="20px" height="20px" alt="Responsive image"><pre class="p-0 m-0 pl-1 pt-1 align-items-center" style="font-size:10px;">Disney+ Hotstar Mobile</pre>
											    </div>
												<div class="col-md-4 text-center ">
													<pre class="p-0 m-0 pl-5 pt-1 text-center  text-danger" style="font-size:12px; font-weight:bold;">+5 More</pre>
											    </div>
											</div>
											
										</div>
								   </div>	
								   <?php } ?>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>

            </div>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script>
	$('button').click(function(e){
            e.preventDefault();
            var plan_rs = $(this).val();
			var mob = <?php echo $mob; ?>;
            // alert("hjjkjkjk");
			alert(plan_rs  +"\n" +mob);
            mydata = {mobile : mob , plan : plan_rs};
            $.ajax({
                url: "upplan.php",
                method: "POST",
                data: JSON.stringify(mydata),
                contentType: "application/json; charset=utf-8",
                success: function(data){
                    console.log(data);
					if(data == 1){
						location.href = 'pay.php?mob='+plan_rs;
                    }
                    else{
                        alert("Internal Server Error");
                    }
                }
            })
    });
	</script>
  </body>
</html>