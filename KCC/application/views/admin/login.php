       <html>
<head>
<title>User Login</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/bootstrap.min.css">
</head>
<style type="text/css">
.captchainput{
        width: 355px;
    height: 30px;
    background: navy;
    color: white;
    border: 2px solid white;
    padding: 10px;
}
</style>
<body style="background-color:green;">
    <div class="container" >    
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title">Sign In</div>
                        <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">Forgot password?</a></div>
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
                        <form id="login" name="login"class="form-horizontal" method="POST" action="<?php echo base_url(); ?>admin/login/userlogin" role="form">
                                    
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="username or email">                                        
                            </div>
                                
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input id="login-password" type="password" class="form-control" name="password" placeholder="password">
                                    </div>
                                    

                                
                            <div class="input-group">
                                      <div class="checkbox">
                                        <label>
                                          <input id="login-remember" type="checkbox" name="remember" value="1"> Remember me
                                        </label>
                                      </div>
                                    </div>


                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->

                                    <div class="col-sm-12 controls">
                                      <input class="btn btn-success" type="submit" id="login" value="Login">
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="col-md-12 control">
                                        <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                            Don't have an account! 
                                        <a href="#" onClick="$('#loginbox').hide(); $('#signupbox').show()">
                                            Sign Up Here
                                        </a>
                                        </div>
                                    </div>
                                </div>    
                            </form>     



                        </div>                     
                    </div>  
        </div>
<div id="signupbox" style="display:none; margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title">Sign Up</div>
                            <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="#" onclick="$('#signupbox').hide(); $('#loginbox').show()">Sign In</a></div>
                        </div>  
                        <div class="panel-body" >
                            <?php echo form_open('login'); ?>
                                   <form id="register" class="form-horizontal" method="POST" action="<?php echo base_url(); ?>admin/login" role="form">
                                <div class="formSignIn" >
                                <div id="signupalert" style="display:none" class="alert alert-danger">
                                    <p>Error:</p>
                                    <span></span>
                                </div>
                                    
                                
                                <div class="form-group">
                                    <label for="fullname" class="col-md-3 control-label">Full Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="fullname" placeholder="Full Name">
                                        <br \>
                                    </div>
                                </div> 
                                <div class="form-group">
                                    <label for="email" class="col-md-3 control-label">Email</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="email" placeholder="Email Address">
                                        <br \>
                                    </div>
                                </div>
                                    
                                <div class="form-group">
                                    <label for="lastname" class="col-md-3 control-label">Username</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="username" placeholder="Username">
                                        <br \>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-md-3 control-label">Password</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="password" placeholder="Password">
                                        <br \>
                                    </div>
                                </div>

                                 <div class="form-group">
                                    <label for="images" class="col-md-3 control-label">Images</label>
                                    <div class="col-md-9">
                                        <input class="form-control" type="file" name="userfile" id="image"><br \>
                                    </div>
                                </div>
                                <div class="form-group">
                               <label for="images" class="col-md-3 control-label" >Captcha</label>    
                              <div class="image col-md-9 " style="padding:10px;">
                                        <label for="captcha"><?php echo $captcha['image']; ?></label>
                                        <br>
                                        <input type="text" class="captchainput" name="userCaptcha" placeholder="Enter above text" value="<?php if(!empty($userCaptcha)){ echo $userCaptcha;} ?>" />
                                        <span class="required-server"><?php echo form_error('userCaptcha','<p style="color:#F83A18">','</p>'); ?></span> 
                                    </div>                       
                             </div>
                                  
                                <div class="form-group">
                                    <!-- Button -->                                        
                                    <div class="col-md-offset-3 col-md-9" >
                                        <input type="submit"  value="Register" name="register" class="btn btn-success" />   
                                    </div>
                                </div>
                                
            
                                </form>

                            </div>
                           <?php echo form_close(); ?>
                         </div>
                    </div>

               
               
                
         </div> 
    </div>
      <script type="text/javascript" src="<?php echo base_url();?>js/jquery.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>js/bootstrap.min.js"></script>
</body>
</html>