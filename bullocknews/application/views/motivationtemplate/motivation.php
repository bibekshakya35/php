<!DOCTYPE HTML>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>Motivation</title>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
              <!-- Bootstrap -->
              <link href="<?php echo base_url("asset/css/bootstrap.css"); ?>" rel="stylesheet">
              <link href="<?php echo base_url("asset/css/bootstrap.min.css");?>" rel="stylesheet">
                          <link href="<?php echo base_url("asset/css/bootstrap-responsive.css");?>" rel="stylesheet"/>
                  <link href="<?php echo base_url("asset/css/bootstrap-responsive.min.css");?>" rel="stylesheet"/>
                <link href="<?php echo base_url("asset/css/font-awesome.css");?>" rel="stylesheet" type="text/css">
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
            <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
             <script src="<?php echo base_url("asset/js/bootstrap.js");?>"></script>
            <script src="<?php echo base_url("asset/js/bootstrap.min.js");?>"></script>

                
         <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

         
 <script src="<?php echo base_url("asset/js/jquery.js")?>" type="text/javascript"></script>
  
  <script src="<?php echo base_url("asset/js/jquery-2.1.4.js");?>"></script>
  <script src="<?php echo base_url("asset/js/jquery-2.1.4.min.js");?>"></script>
  <script src="<?php echo base_url("asset/js/jquery-ui.js");?>"></script>

        <link rel="stylesheet" href="<?php echo base_url("asset/css/stylesheetForMotivation.css");?>" type="text/css">
</head>
<body>
	<div id="header">
		<div class="clearfix">
			<div class="logo">
                            <h1 class="text-primary" style="margin: 20px; padding: 10px;">Bullock News</h1>
			</div>
			<ul class="navigation">
				<li>
					<a href="<?php echo site_url("bullocknews/index");?>">Home</a>
				</li>
				<li>
					<a href="<?php echo site_url("bullocknews/category");?>">Whats new</a>
				</li>
				<li class="active">
					<a href="#">Motivation</a>
				</li>
				
			</ul>
		</div>
	</div>
	<div id="contents">
		<div id="adbox">
			<div class="clearfix">
				<?php
                                    foreach ($motivation as $data){
                                        echo '<img src="'.base_url($data->image).'" alt="Img" height="382" width="594">
				<div class="detail">
					<h1>'.$data->motivation.'</h1>
					
				</div>';
                                    }
                                
                                ?>
			</div>
		</div>
		<div class="highlight">
			<div class="clearfix">
                            <div class="row" style="padding:20px;">
					<?php
                                                                        echo '<h1 style="text-align:center">'.$data->speaker.'</h1>
                                                                            
					<p>
						&ldquo;'.$data->information.'&rdquo;
					</p>
                                        <br>
                                        ';
                                                                        
                                                                        
					
                                        ?>
			</div>
		</div>
		<div class="featured">
                    <h2 style="text-align: center">Motivation is Like Bathing which need once a day</h2>
			<ul class="clearfix">
				
                                    <?php
                                                                            foreach ($article as $data){
                                                                            echo '<li style="margin-left:60px;"><div class="frame1" >
						<div class="box">
							<img src="'.base_url($data->image).'" alt="Img" height="130" width="197">
						</div>
					</div>
					<p>
						<b>'.$data->speaker.'</b>'.$data->information.'
					</p>
					<a href="'.  site_url("bullocknews/articlemotivation/$data->WID").'" class="more">Read More</a>				</li>
';
                                                                            }
                                    ?>
				
			</ul>
		</div>
	</div>
	<div id="footer">
		<div class="clearfix">
			<div class="section">
				<h4>Latest Qoute</h4>
				<p>
					&ldquo;Life is 10% what happens to you and 90% how you react to it.&ldquo; Charles R. Swindoll
                                        <br>
				</p>
			</div>
			<div class="section contact">
				<table class="table table-hover table-condensed">
                 <tr>
                     <th colspan="4">
                         <h1 class="text-primary">Contact us</h1>
                     </th>
                 </tr>
                 <tr>
                     <td>
                         <img src="<?php echo base_url("image/facebook-icon.png");?>" class="img-responsive" style="width: 30px;height: 30px; border-radius: 50%;"/>
                         
                     </td>
                      <td>
                          <img src="<?php echo base_url("image/Instagram-icon.png");?>" style="width: 30px;height: 30px; border-radius: 50%;"/>
                         
                     </td>
                      <td>
                          <img src="<?php echo base_url("image/google-plus-icon.png");?>" style="width: 30px;height: 30px; border-radius: 50%;"/>
                         
                     </td>
                      <td>
                          <img src="<?php echo base_url("image/social-twitter-box-blue-icon.png");?>" style="width: 30px;height: 30px; border-radius: 50%;"/>
                         
                     </td>
                 </tr>
                 
             </table>
		</div>
		<div id="footnote">
			<div class="clearfix">
				<div class="connect">
                                    <br><br><br><br>	
				<p>
					© Copyright Bullock Enterprises. All Rights Reserved.
				</p>
			</div>
		</div>
	</div>
</body>
</html>