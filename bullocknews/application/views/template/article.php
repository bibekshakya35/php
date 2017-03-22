
    <body>
           <div><img src="<?php echo base_url("image/banner.jpg");?>" class="img-responsive banner"/></div>
    <nav class="navbar navbar-inverse">
        <div class="navbar-header">
            <h3 class="brand" >Bullock News</h3>
        </div>
        <div>
            <ul class="nav navbar-nav">
                <li><a href="#" class="active">Home</a></li>
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
        <div class="navbar-right">
            <a href="<?php echo site_url("bullocknews/login");?>">Login</a>
        </div>
        
    </nav>
            <div class="holder">
                <div class="bullet"></div>
                <div class="line_one"></div>
                <div class="line_two"></div>
                <div class="pholder_one"></div>
            </div>

            <div class="wrap1">
                <?php
                foreach ($articledata as $article){
                        echo '<h1 style="text-align:center"">'.$article->heading.'</h1>   
                   <img src="'.base_url($article->image).'">
                       <div class="wrap1"><p class="text-primary lead">'.$article->shortstory.'</p></div>
                    <p class="text-danger lead p1" style="padding:20px;">
                     '.$article->fullstory.'
                   </p> 
                   <br />';
                    }

                    ?>


            </div>
    </body>