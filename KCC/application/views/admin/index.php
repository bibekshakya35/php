<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Kishan Call Center | Dashboard</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url();?>css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?php echo base_url();?>css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url();?>font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
 
<body>  
<div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
  <img class="img-responsive navbar-brand"src="image/kishanlogo.png"> 
            </div>
<span class="site-head  ">Kishan Call Center</span> 
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
  
 <li class="profile-image"> <img class="media-object img-circle" src="image/profile.jpg" alt=""></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu message-dropdown">
                       
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>Ashish Dahal</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>Ashish Dahal</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>Ashish Dahal</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-footer">
                            <a href="#">Read All New Messages</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret">6</b></a>
                    <ul class="dropdown-menu alert-dropdown">
                       
                        <li>
                            <a href="#">Alert Name <span class="label label-primary"> Signup Notification</span><b class="caret">6</b></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-success"> Agrovet Notification </span><b class="caret">6</b></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-info">NGO/Sahakari Notification</span><b class="caret">6</b></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-default">Update Notification</span><b class="caret ">6</b></a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">View All</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Ashish Dahal <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="?do=User Profile"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                       
                        <li class="divider"></li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul id="side-nav"class="nav navbar-nav side-nav">
                <!-- search form -->
          <li> <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          </li>
          <!-- /.search form -->
                    <li >
                        <a  class=" " href="index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>admin/user/adduser" data-toggle="" data-target=""><i class="fa fa-fw fa-user"></i> USER <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="User" class="">
                            <li class=" ">
                           <a href="?do=Add User"><i class="fa fa-plus-circle"> </i> Add User</a>
                            </li>
                          <li class="  ">
                                <a href="<?php echo base_url();?>admin/user/manageuser"><i class="fa fa-pencil-square-o"></i> Manage User</a>
                            </li>
                             <li class=" ">
                                <a href="<?php echo base_url();?>admin/user/managemember"><i class="fa fa-pencil-square-o"></i> Manage Member</a>
                            </li>
                            
                        </ul>
                    </li>
                    
                    <li>
                        <a href="#" data-toggle=" " data-target=""><i class="fa fa-fw fa-users"></i> Farmer <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="" class="">
                            <li>
                                <a href="?do=Add New Farmer Records"><i class="fa fa-plus-circle"></i> Add Farmer</a>
                            </li>
                            <li>
                                <a href="?do=View Farmer Records"><i class="fa fa-eye"></i>  View Farmer </a>
                            </li>
                           
                            
                        </ul>
                    </li>
                     <li>
                        <a href="#" data-toggle=" " data-target=""> <i class="fa fa-university"></i>  Agrovet <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="Agrovet" class=" ">
                            <li>
                             <a href="?do=Add New Agrovet">  <i class="fa fa-plus-circle"></i>  Add New Agrovet</a>
                            </li>
                            <li>
                               <a href="?do=View Agrovet Record"> <i class="fa fa-eye"></i> View Agrovet Record </a>
                            </li>
                           
                            
                        </ul>
                    </li>
                      <li>
                        <a href="#" data-toggle="" data-target=""> <i class="fa fa-university"></i>   NGO/Sahakari<i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="NGO" class="">
                            <li>
                             <a href="?do=Add NGO Sahakari Record ">  <i class="fa fa-plus-circle"></i>   Add NGO/Sahakari</a>
                            </li>
                            <li>
                               <a href="?do=View NGO Sahakari Record"> <i class="fa fa-eye"></i>View NGO/Sahakari</a>
                            </li>
                           
                            
                        </ul>
                    </li>
                  
                </ul>
 
            </div>
            <!-- /.navbar-collapse -->

        </nav>

        <div id="page-wrapper">
<div class="container-fluid">
            <?php 
 if(isset($page)){
            include("pages/".$page);    
                           }         
else
{
     $pagetitle="Home" ?> <div class="container-fluid ">

                <!-- Page Heading -->
                <div class="row">
              <?php echo $pagetitle; ?>
                </div>
                <!-- /.row -->
<div ><span class="footer pull-left"> Powered By Green Computing Nepal </span>   </div>
            </div> <?php
}


                     ?>

        </div>
        <!-- /#page-wrapper -->

    </div>

    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="<?php echo base_url();?>js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url();?>js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="<?php echo base_url();?>js/plugins/morris/raphael.min.js"></script>
    <script src="<?php echo base_url();?>js/plugins/morris/morris.min.js"></script>
    <script src="<?php echo base_url();?>js/plugins/morris/morris-data.js"></script>

</body>

</html>
