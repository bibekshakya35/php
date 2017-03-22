<html>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 //EN">
    <head>
  
        <title><?php global $title; echo $title;?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- Bootstrap -->
	      <link href="css/bootstrap.css" rel="stylesheet">
      <link href="css/bootstrap.min.css" rel="stylesheet">
	  	  <link href="css/bootstrap-responsive.css" rel="stylesheet"/>
	  <link href="css/bootstrap-responsive.min.css" rel="stylesheet"/>
	<link href="css/font-awesome.css" rel="stylesheet" type="text/css">
         <script src="js/bootstrap.js"></script>
  <script src="js/bootstrap.min.js"></script>
  
        <script src="js/jquery.js" type="text/javascript"></script>
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
         <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  
  
                <script src="js/jquery-1.11.3.min.js"></script>
                <script src="js/jquery-2.1.4.min.js"></script>
                <script src="js/jquery-2.1.4.js"></script>
                <script src="js/jquery-ui.js"></script>   
  
  <script src="jquery/jquery.js"></script>

<link rel="stylesheet" type="text/css" href="style/stylesheet.css"/>    
        <script type="text/javascript">
            function slider(){
               $(".slider #1").show("fade",500);
               $(".slider #1").delay(5500).hide("slide",{direction:"left"},500);
                var sc=$(".slider img").size();
               var count=2;

               setInterval(function (){
                  $(".slider #"+count).show("slide",{direction:"right"},500);
                  $(".slider #"+count).delay(5500).hide("slide",{direction:"left"},500);
                  if(count===sc){
                      count=1;
                  }
                  else{
                      count=count+1;
                  }
               },6500);


           }
           </script>
            </head>
            <body onload="slider()">
                <div id="wrapper">
                    <div id="banner">


                    </div>
                    <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <h1 class="brandNav" style="color: white; font-family: cursive;font-style: oblique;">BULLOCK</h1>
                    </div>
                    <div>
                        <ul class="nav navbar-nav">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="newproduct.php">New</a></li>
                            <li><a href="#">Sale</a></li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Product<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li class="active"><a href="#">Clothing</a></li>
                                    <li><a href="#">Footwear</a></li>
                                    <li><a href="#">Watch</a></li>
                                    <li><a href="#">Eyewear</a></li>
                                </ul>
                            </li>
                                
                    
                            
                        </ul>
                        
                                
                        
                    </div>
                </div>
                
            </nav>
                    <div class="container">
                    <div class="row">
                        <div class="row-fluid"><div class='span6 offset2'>
                                <div class="slider">
                                    <img src="offerimage/recentoffer.JPG" id="1" border="0">
                                    <img src="offerimage/recentpic2.JPG" id="2" border="0">
                                    <img src="offerimage/recentpic.JPG" id="3" border="0">
                                    <img src="offerimage/sa.PNG" id="4" border="0">
                                    <img src="offerimage/Capture.PNG" id="5" border="0">
                                    
                                    
                                </div>
                                
                                </div>


                        <div class="row">
                                <div class="span8 offset5 center"><h1 class="text-capitalize text-primary">RECENT ITEM</h1></div>
                            <div class="col-md-3"><?php global $recentclothbox; echo $recentclothbox;?></div>
                            <div class="col-md-3"><?php global $recentfootwear; echo $recentfootwear;?></div>
                            <div class="col-md-3" ><?php global $recenteyewear; echo $recenteyewear;?></div>
                            <div class="col-md-3" ><?php global $recentwatch; echo $recentwatch;?></div>
                        </div>
                        <div class="row-fluid"><div class='span8 offset2 center'><div class="col-span-12"><?php global $topproduct; echo $topproduct;?></div></div>
                        <div class="row">
                            <div class="span8 offset5 center"><h1 class="text-capitalize text-primary">Top Sale</h1></div>
                            <div class="col-md-3"><?php global $topclothbox; echo $topclothbox;?></div>
                            <div class="col-md-3"><?php global $topfootwear; echo $topfootwear;?></div>
                            <div class="col-md-3" ><?php global $topeyewear; echo $topeyewear;?></div>
                            <div class="col-md-3" ><?php global $topwatch; echo $topwatch;?></div>
                        </div>
                           <div class="row-fluid"><div class='span8 offset2 center'><div class="col-span-12"><?php global $topproduct2; echo $topproduct2;?></div></div>

                    </div>


                </div>



                    <footer>
                    <ul id="navf">
                            <li><a href="">Contact Us</a>

                            <li><a href="">Career</a></li>
                                    <li><a href="#">Facebook</a></li>
                                    <li><a href="#">Twitter</a></li>
                                    <li><a href="#">Instagram</a></li>


                            </li>

                        </ul>


                </footer>
         </div>












            </body>
        </html>