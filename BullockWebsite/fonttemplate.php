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
  
  
  <script src="jquery-2.1.4.js"></script>
  <script src="jquery-2.1.4.min.js"></script>
  <script src="jquery-ui.js"></script>
  <script src="jquery-ui.min.js"></script>
  
  <script src="jquery/jquery.js"></script>

<link rel="stylesheet" type="text/css" href="style/stylesheet.css"/>
    </head>
    <body>
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
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3"><?php global $clothbox; echo $clothbox;?></div>
                    <div class="col-md-3"><?php global $footwear; echo $footwear;?></div>
                    <div class="col-md-3" ><?php global $eyewear; echo $eyewear;?></div>
                    <div class="col-md-3" ><?php global $watch; echo $watch;?></div>
                        
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