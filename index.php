
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
                        <h3><----ORP----></h3>
                        <p>You are 30 seconds away from earning your own money!</p>
                        <a href="alogin.php">
                        <input type="submit" name="" value="Retail Login"/><br/></a>
                    </div>
                    <div class="col-md-9 register-right">
                        <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Register</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading pb-3">Recharge Portal Login</h3>
                                <div class="row register-form">
								    <div class="col-md-2">
                                        
                                    </div>
									
                                    <div class="col-md-8"><div class="form-group">
                                            <input type="email" class="form-control" placeholder="Your Email *" id = "pemail" />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Password *" id = "ppass" />
                                        </div>
										<input type="submit" class="btnRegister" id ="btnlogin"  value="Portal Login"/>
                                    </div>
                                    <div class="col-md-2">
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <h3  class="register-heading">Recharge Portal Registeration</h3>
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="First Name *" id="fname" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Last Name *" id="lname" />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Password *" id="pass" />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control"  placeholder="Confirm Password *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <div class="maxl">
                                                <label class="radio inline"> 
                                                    <input type="radio" name="gender" value="male">
                                                    <span> Male </span> 
                                                </label>
                                                <label class="radio inline"> 
                                                    <input type="radio" name="gender" value="female">
                                                    <span>Female </span> 
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Your Email *" id="email" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" minlength="10" maxlength="10" name="txtEmpPhone" class="form-control" placeholder="Your Phone *" id="phone" />
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control">
                                                <option class="hidden"  selected disabled>Please select your Sequrity Question</option>
                                                <option>What is your Birthdate?</option>
                                                <option>What is Your old Phone Number</option>
                                                <option>What is your Pet Name?</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Enter Your Answer *" id="answer" />
                                        </div>
                                        <input id="btnreg" type="submit" class="btnRegister"  value="Register"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   
    <script>
        $("#btnreg").click(function(e){
            e.preventDefault();
            console.log("save");
            var fname = $("#fname").val();
            var lname = $("#lname").val();
            var pass = $("#pass").val();
            var email = $("#email").val();
            var phone = $("#phone").val();
            var answer = $("#answer").val();
            mydata = {fn : fname, ln : lname, pas : pass, mail : email, phon : phone, anser : answer};
            console.log(mydata);
            $.ajax({
                url: "insert.php",
                method: "POST",
                data: JSON.stringify(mydata),
                success: function(data){
                    console.log(data);
                    alert(data);
                    location.href = 'index.php';

                }
            })
        });

        $("#btnlogin").click(function(e){
            e.preventDefault();
            console.log("save");
            var email = $("#pemail").val();
            var password = $("#ppass").val();
            mydata = {mail : email, pass : password};
            console.log(mydata);
            $.ajax({
                url: "login.php",
                method: "POST",
                data: JSON.stringify(mydata),
                success: function(data){
                    console.log(data);
                    if(data == 1){
                         location.href = 'recharge.php';
                         alert("Welcone to Online Recharge Portal");
                    }
                    else{
                        alert("E-mail or Password are not correct");
                    }
                }
            })
        });
    </script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>