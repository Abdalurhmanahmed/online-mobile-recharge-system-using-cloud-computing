<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
    <title>Hello, world!</title>
</head>

<body>
    <div class="container-fluid p-0 m-0  register">
        <div class="row">
            <div class="col-md-3 register-left">
                <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt="" />
                <h3>Welcome</h3>
                <p>You are 30 seconds away from earning your own money!</p>
            </div>
                                <?php
											// include('dbcon.php');
											$mob = $_GET['mob'];
										?>
            <div class="col-md-9 register-right">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <h3 class="register-heading pb-1">Payable Amount Rs. <?php echo $mob; ?></h3>
                        <div class="row register-form">
                            <div class="col-md-2">

                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Name on Card *" value="" required />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Card Number *" value="" required/>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col">
                                            <input type="text" class="form-control" placeholder="Enter CVV *" value="" required/>
                                        </div>
                                        <div class="col">
                                            <input type="text" class="form-control" placeholder="Enter Month *" value="" required />
                                        </div>
                                        <div class="col">
                                            <input type="text" class="form-control" placeholder="Enter Year *" value="" required/>
                                        </div>
                                    </div>  
                                </div>
                                <div class="form-group">
                                    <button type="button" class="btn btn-success form-control">Total Payment Rs. <?php echo $mob; ?> </button>
                                </div>
                            </div>
                            <div class="col-md-2">

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
    <script>
        $('button').click(function(e){
            e.preventDefault();
			var plan = <?php echo $mob; ?>;
			alert("Recharge Rs." + plan +"\n Was Sucessfully Done" ); 
            alert("Are you want to Recharge more");
            location.href = 'recharge.php';
    });
    </script>
</body>

</html>