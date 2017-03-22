
<html>
<head>

<title><?php global $title; echo $title;?></title>
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



                   <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/style/style.css');?>"/>
    </head>
    
<body>
    
    <div><img src="<?php echo base_url("image/banner.jpg");?>" class="img-responsive banner"/></div>
    <nav class="navbar navbar-inverse">
        <div class="navbar-header">
            <h3 class="brand" >Bullock News</h3>
        </div>
        <div>
            <ul class="nav navbar-nav">
                <li><a href="<?php echo site_url('bullocknews/index');  ?>" class="active">Home</a></li>
                <li><a href="<?php echo site_url('bullocknews/category'); ?>">What's New</a></li>
                <li><a href="#">Opinion</a></li>
                <li><a href="#">Motivation</a></li>
               
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Category<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">National News</a></li>
                        <li><a href="#">InterNational News</a></li>
                        <li><a href="#">Sport News</a></li>
                        <li><a href="#">Business News</a></li>
                        <li><a href="#">Lifestyle News</a></li>
                        <li><a href="#">Entertainment News</a></li>
                        <li><a href="#">Educational News</a></li>
                        <li><a href="#">Health News</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        
    </nav>
    
    <div class="container">
        <div class="horiz-flag1 noise1"><h1 style="text-align: center">Search result</h1></div>
        <div class="row">
        
        <?php
        $result="";
        $i=0;
        foreach ($search as $sear){
            $i++;
            $result= $result."<table class='table table-hover'>"
                    . "<tr>"
                    . "<th><a href='".  site_url("bullocknews/article/$sear->AID")."'><h1>".$sear->heading."</h1></th></a>"
                    . "</tr>"
                    ."<tr class='offset2 span10'><td><img src='".base_url($sear->image)."' class='img-responsive imgData".$i."' style='width:auto;'></td></tr>"
                    . "<tr><td><p>".$sear->shortstory."</p></td></tr>"
                    . "</table>"
                    ."<script>"
                    . "$('.imgData$i').click(function(){"
                    . "window.location='".site_url("bullocknews/article/$sear->AID")."';"
                    . "});"
                    . "</script>";
        }
        echo $result;
        ?>
    </div>
    
    
</div>
</body>
<footer>
    <div class="container-fluid">
        <div class="col-md-4">
            <table class="table table-hover table-condensed">
                <tr>
                    <th>
                        <h1 class="text-primary">Service</h1>
                    </th>
                    
                </tr>
                <tr><td><p class="text-success">Latest News</p></td></tr>
                <tr><td><p class="text-success">Latest Stock Trend</p></td></tr>
                <tr><td><p class="text-success">World Class Entertainment</p></td></tr>
                
            </table>
        </div>
         <div class="col-md-4">
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
         <div class="col-md-4">
             <table class="table table-hover table-condensed">
                <tr>
                    <th>
                        <h1 class="text-primary">Career</h1>
                    </th>
                    
                </tr>
                <tr><td><p class="text-success">Programmer</p></td></tr>
                <tr><td><p class="text-success">Data Engineer</p></td></tr>
                <tr><td><p class="text-success">Analyst</p></td></tr>
                
            </table>
        </div>
    </div>
</footer>
</html>