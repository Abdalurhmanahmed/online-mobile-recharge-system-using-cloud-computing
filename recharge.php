<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link href="css/style.css" rel="stylesheet">
    <title>Hello, world!</title>
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
                                <h3 class="register-heading pb-3">Online Recharge Portal</h3>
                                <div class="row register-form">
								    <div class="col-md-2">
                                        
                                    </div>
                                    <div class="col-md-8">
										<div class="form-group">
                                            <input type="text" class="form-control" placeholder="Enter Mobile Number *" id = "mobile" />
                                        </div>
                                        <div class="form-group">
                                            <select id="otype" class="form-control">
                                                <option class="hidden"  selected disabled>Please select Operator</option>
                                                <option>Airtel</option>
                                                <option>Jio India</option>
                                                <option>Vodaphone</option>
                                                <option>BSNL INDIA</option>
                                            </select>
                                        </div>
										<div class="form-group">
                                            <select id="state" class="form-control">
                                                <option class="hidden"  selected disabled>Please select State</option>
                                                <option>Uttar Pradesh</option>
                                                <option>Delhi NCR</option>
                                                <option>Mumbai</option>
                                                <option>Madhya Pradesh</option>
                                                <option>Bihar</option>
                                                <option>Aasham</option>
                                                <option>South India</option>
                                                <option>Bengal</option>
                                            </select>
                                        </div>
										<div class="form-group">
                                            <div class="maxl">
                                                <label class="radio inline"> 
                                                    <input type="radio" name="OPtype" value="Pre-Paid" checked>
                                                    <span> Pre-Paid </span> 
                                                </label>
                                                <label class="radio inline"> 
                                                    <input type="radio" name="OPtype" value="Post-Paid">
                                                    <span> Post-Paid </span> 
                                                </label>
                                            </div>
                                        </div>
										<input type="submit" id = "select_plan" class="btnRegister"  value="Select Plan"/>
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
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script>
	$("#select_plan").click(function(e){
            e.preventDefault();
            var operator = $().children("option:selected").val();
            console.log("save");
            var mobile = $("#mobile").val();
            var operator = $('#otype').children("option:selected").val();
            var state = $('#state').children("option:selected").val();
            var OPtype = $("input[name='OPtype']:checked").val();
            // alert(mobile + operator + state + OPtype);
            mydata = {mob : mobile, op : operator, state : state, OPtype : OPtype};
            $.ajax({
                url: "showplan.php",
                method: "POST",
                data: JSON.stringify(mydata),
                contentType: "application/json; charset=utf-8",
                success: function(data){
                    console.log(data);
                    alert(data);
                    location.href = 'plan.php?mob='+mobile;
                }
            })
    });
            
	</script>
  </body>
</html>