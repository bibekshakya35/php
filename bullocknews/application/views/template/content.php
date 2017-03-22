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
                <li><a href="<?php echo site_url('bullocknews/motivation'); ?>">Motivation</a></li>
               
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Category<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">National</a></li>
                        <li><a href="#">InterNational</a></li>
                        <li><a href="#">Sport</a></li>
                        <li><a href="#">Business</a></li>
                        <li><a href="#">Lifestyle</a></li>
                        <li><a href="#">Entertainment</a></li>
                        <li><a href="#">Educational</a></li>
                        <li><a href="#">Health</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="navbar-left"  style="color: white;padding: 2px 0px 0px 10px;">
            <h3><a href="<?php echo site_url("bullocknews/login");?>" style="color: white">Login</a>
            </h3>        </div>
        
    </nav>
    
     <div class="container">
        
              <?php echo form_open(base_url("bullocknews/search"));?>
            <div style="float: right">
                
                <?php
                $value = array(
                  'name'=>'searchdata',
                   'class'=>'col-xs-6',
                    'style'=>'margin: 2px 20px 0 20px ; height:30px;'
                    
                );
                echo form_input($value);?> 
           
            <button type="submit" class="btn btn-default btn-primary">Search</button>
            </div>
             <?php echo form_close();?>
        
       
    </div>
    
    
    <div class="container">
        
        <div class="horiz-flag1 noise1" style="margin: 0 40px 20px 40px;"><h1>HEADLINE</h1></div>
        
        <div class="row">
           
           
            <div class="col-md-6">
                <div class="row">
                    <div class="box2" style="width: auto"><?php
                    foreach ($row as $img){
                     echo '<h1>'.$img->heading.'</h1>'
                             . ''
                             . '<img src="'.base_url($img->image).'" class="img-responsive forShortStoryimg" >'
                             . '<div class="forShortStory"><p >'.$img->shortstory.'</p></div>';  
                    
                            
                        }
                    
                    ?></div>
                    <script>
                        
                        $(".forShortStoryimg").each(function(){
                            $(".forShortStoryimg").click(function(){
                            window.location="<?php echo base_url("bullocknews/article/".$img->AID);?>";
                        });
                            $(".forShortStoryimg").on({
                            mouseover:function(){
                                $(".forShortStory").css({
                                     display:"inline-block",
                                     width:600,
                                     height:500
                                }
                                   
                                    
                            );
                            },
                            mouseout:function(){
                                $(".forShortStory").css({
                                    display:"none"
                                    
                                });
                            }
                        }); 
                        });
                        
                    </script>
                </div>
                
           
            <div class="row">
                        
                    <?php
                    $i=0;
                        foreach ($fourImageData as $imgData){
                            $i++;
                            echo '<div class="col-xs-3 box2" style="width:125px;" >';
                           echo '<img src="'.base_url($imgData->image).'" class="img-responsive smallimgpic'.$i.'" style="width:120px;height=120px;" >'
                                                 . '<div class="smallimgpicdata'.$i.'" style="display:none; width:140px; padding-top:15;
                                     margin-top:15;"><p class="p1"><br><br>'.$imgData->shortstory.'</p></div>';  
                    
                                                 echo '</div>'
                           . ''
                     . '<script>
                        $(".smallimgpic'.$i.'").click(function(){
                            window.location="'.  site_url("bullocknews/article/$imgData->AID").'";
                        });
                        $(".smallimgpic'.$i.'").each(function(){
                           
                            $(".smallimgpic'.$i.'").on({
                            mouseover:function(){
                                $(".smallimgpicdata'.$i.'").css({
                                     display:"inline-block",
                                     width:200,
                                     height:200,
                                     
                                }
                                   
                                    
                            );
                            },
                            mouseout:function(){
                                $(".smallimgpicdata'.$i.'").css({
                                    display:"none"
                                    
                                });
                            }
                        }); 
                         
                        });
                        
                    </script>';
                                        }
                    ?>
                
                
                
            </div>
        </div>
           
                 
            
            
                <?php
                                    foreach ($fourImageData as $img){
                                        
                                        echo '<div class="col-md-6 wrap"><span class="horiz-flag noise "><a href="'.site_url("bullocknews/article/".$img->AID).'"><h1>'.$img->heading.'</h1></a></span>'
                                                . '<br>'
                                                . '<br><br>'
                                                . '<div style="margin-top:40px"><p class="p1">'.$img->shortstory.'</p></div> </div>';
                                    }
                ?>
           
            
        
    </div>
            
    </div>
    <div class="container">
        <div class="horiz-flag1 noise1"><h1>Latest New's</h1></div>
        <div class="row" style="margin: 0 60px 0 60px; ">
            <?php
                $i=0;
                            foreach ($getLatestNews as $latestNews){
                                $i++;
                                echo '<div class="col-md-3 box3">'
                                . '<a href="'.site_url("bullocknews/article/".$latestNews->AID).'"><h2>'.$latestNews->heading.'</h2></a>'
                                        . '<a href="'.site_url("bullocknews/article/".$latestNews->AID).'"><img src="'.base_url($latestNews->image).'" class="img-responsive recentImg"/></a>'
                                        . '<p class="p1">'.$latestNews->shortstory.'</p>'
                                        
                                . '<br></div>'
                                        . '<script>'
                                        . '$(".recentImg").click(function(){'
                                        . 'window.location="'.  site_url("bullocknews/article/$latestNews->AID").'";'
                                        . '});'
                                        . '</script>';
                            }
            ?>
            
        </div>
        
    </div>
    <div class="container">
        <div class="horiz-flag1 noise1"><h1>National New's</h1></div>
        <div class="row">
            
                <?php
                $i=0;
                 $data="<div class='col-md-6 auto'>"
                         . "<div class='row'>";
                        
                foreach ($getNationalNews as $news){
                    $i++; 
                    $data=$data.'<table class="table table-hover">'
                                . '<tr>'
                                        . '<td>'
                                        . '<tr>'
                                        . '<td>'
                                        . '<a href="'.site_url("bullocknews/article/".$news->AID).'"><img src="'.base_url($news->image).'" class="img-respoinsive imgBigpic imgBigPi'.$i.'"></a>'
                                        
                                        . '</td>'
                                        . '<td>'
                                        .'<p class="p1">'.$news->shortstory.'</p>'
                                        . '</td>'
                                        . '</tr>'
                                        . '</td>'
                                      
                                        
                                 . '</tr>'
                                . '</table>'
                            . '<script>'
                            . '$(".imgBigPi'.$i.'").click(function(){window.location="'.site_url("bullocknews/article/$news->AID").'";});'
                            . '</script>';
                               
                            }
                            $data=$data."</div></div>";
                            
                            echo $data;
                ?>
            <div class="col-md-3 auto">
                 <?php
                 $data=""
                         . "<div class='row' ";
                        
                foreach ($getSmallNationalNews as $news){
                                $data=$data.'<table class="table table-hover">'
                                . '<tr>'
                                        . '<td>'
                                        . '<tr>'
                                        . '<td>'
                                        . '<a href="'.site_url("bullocknews/article/".$news->AID).'"><img src="'.base_url($news->image).'" class="img-respoinsive imgsmallPic"></a>'
                                        
                                        . '</td>'
                                        . '<td>'
                                        .'<p class="p1">'.$news->shortstory.'</p>'
                                        . '</td>'
                                        . '</tr>'
                                        . '</td>'
                                        
                                        
                                 . '</tr>'
                                . '</table>'
                                        ;
                               
                            }
                            $data=$data."</div>";
                            
                            echo $data;
                ?>
            </div>
            <div class="col-md-3 auto">
                 <?php
                 $i=0;
                 $data=""
                         . "<div class='row'>";
                        
                foreach ($getSmallNationalNewsone as $news){
                    $i++;
                                $data=$data.'<table class="table table-hover">'
                                . '<tr>'
                                        . '<td>'
                                        . '<tr>'
                                        . '<td>'
                                        . '<a href="'.site_url("bullocknews/article/".$news->AID).'"><img src="'.base_url($news->image).'" class="img-respoinsive imgsmallPic imgsmallPi'.$i.'"></a>'
                                        
                                        . '</td>'
                                        . '<td>'
                                        .'<p class="p1">'.$news->shortstory.'</p>'
                                        . '</td>'
                                        . '</tr>'
                                        . '</td>'
                                      
                                        
                                 . '</tr>'
                                . '</table>'
                                      ;
                               
                            }
                            $data=$data."</div>";
                            
                            echo $data;
                ?>
            </div>
            
            
        </div>
        </div>
     <div class="container">
        <div class="horiz-flag1 noise1"><h1>International New's</h1></div>
        <div class="row">
            
                <?php
                $i=0;
                 $data="<div class='col-md-6'>"
                         . "<div class='row'>";
                        
                foreach ($getInternationalNews as $news){
                    $i++;
                                $data=$data.'<table class="table table-hover">'
                                . '<tr>'
                                        . '<td>'
                                        . '<tr>'
                                        . '<td>'
                                        . '<a href="'.site_url("bullocknews/article/".$news->AID).'"><img src="'.base_url($news->image).'" class="img-respoinsive imgBigpic imgBigPi'.$i.'"></a>'
                                        
                                        . '</td>'
                                        . '<td>'
                                        .'<p class="p1">'.$news->shortstory.'</p>'
                                        . '</td>'
                                        . '</tr>'
                                        . '</td>'
                                      
                                        
                                 . '</tr>'
                                . '</table>'
                                        . '<script>'
                            . '$(".imgBigPi'.$i.'").click(function(){window.location="'.site_url("bullocknews/article/$news->AID").'";});'
                            . '</script>';
                                     
                               
                               
                            }
                            $data=$data."</div></div>"
                                    ;
                            
                            echo $data;
                ?>
            <div class="col-md-3">
                 <?php
                 $i=0;
                 $data=""
                         . "<div class='row'>";
                        
                foreach ($getSmallInternationalNews as $news){
                    $i++;
                    $data=$data.'<table class="table table-hover">'
     
                                        . '<tr>'
                                        . '<td>'
                                        . '<tr>'
                                        . '<td>'
                                        . '<a href="'.site_url("bullocknews/article/".$news->AID).'"><img src="'.base_url($news->image).'" class="img-respoinsive imgsmallPic imgsmallPi'.$i.'"></a>'
                                        
                                        . '</td>'
                                        . '<td>'
                                        .'<p class="p1">'.$news->shortstory.'</p>'
                                        . '</td>'
                                        . '</tr>'
                                        . '</td>'
                                      
                                        
                                 . '</tr>'
                                . '</table>';
                               
                            
                               
                            }
                            $data=$data."</div>";
                            
                            echo $data;
                ?>
            </div>
            <div class="col-md-3">
                 <?php
                 $i=0;
                 $data=""
                         . "<div class='row'>";
                        
                foreach ($getSmallInternationalNewsone as $news){
                   $i++;
                    $data=$data.'<table class="table table-hover">'
                                . '<tr>'
                                        . '<td>'
                                        . '<tr>'
                                        . '<td>'
                                        . '<a href="'.site_url("bullocknews/article/".$news->AID).'"><img src="'.base_url($news->image).'" class="img-respoinsive imgsmallPic imgsmallPi'.$i.'">'
                                        .'</a>'
                                        . '</td>'
                                        . '<td>'
                                        .'<p class="p1">'.$news->shortstory.'</p>'
                                        . '</td>'
                                        . '</tr>'
                                        . '</td>'
                                      
                                        
                                 . '</tr>'
                                . '</table>'
                                       ;
                               
                            }
                            $data=$data."</div>";
                            
                            echo $data;
                ?>
            </div>
            
            
        </div>
        </div>
    
    
    <div class="container">
        <div class="horiz-flag1 noise1"><h1>Business New's</h1></div>
        <div class="row">
            
                <?php
                $i=0;
                 $data="<div class='col-md-6'>"
                         . "<div class='row'>";
                        
                foreach ($getBusinessNews as $news){
                        $i++;
                        $data=$data.'<table class="table table-hover">'
                                . '<tr>'
                                        . '<td>'
                                        . '<tr>'
                                        . '<td>'
                                        . '<a href="'.site_url("bullocknews/article/".$news->AID).'"><img src="'.base_url($news->image).'" class="img-respoinsive imgBigpic imgBigpi1231'.$i.'">'
                                        .'</a>'
                                        . '</td>'
                                        . '<td>'
                                        .'<p class="p1">'.$news->shortstory.'</p>'
                                        . '</td>'
                                        . '</tr>'
                                        . '</td>'
                                      
                                        
                                 . '</tr>'
                                . '</table>'
                                     . '<script>'
                            . '$(".imgBigpi1231'.$i.'").click(function(){window.location="'.site_url("bullocknews/article/$news->AID").'";});'
                            . '</script>';
                        
                               
                            }
                            $data=$data."</div></div>";
                            
                            echo $data;
                ?>
            <div class="col-md-3">
                 <?php
                 $i=0;
                 $data=""
                         . "<div class='row'>";
                        
                foreach ($getSmallBusinessNews as $news){
                    $i++;
                    $data=$data.'<table class="table table-hover">'
                                . '<tr>'
                                        . '<td>'
                                        . '<tr>'
                                        . '<td>'
                                        . '<a href="'.site_url("bullocknews/article/".$news->AID).'"><img src="'.base_url($news->image).'" class="img-respoinsive imgsmallPic imgsmallPi1231'.$i.'">'
                                        .'</a>'
                                        . '</td>'
                                        . '<td>'
                                        .'<p class="p1">'.$news->shortstory.'</p>'
                                        . '</td>'
                                        . '</tr>'
                                        . '</td>'
                                      
                                        
                                 . '</tr>'
                                . '</table>'
                                 . '<script>'
                            . '$(".imgsmallPi1231'.$i.'").click(function(){window.location="'.site_url("bullocknews/article/$news->AID").'";});'
                            . '</script>';
                        
                               
                            }
                            $data=$data."</div>";
                            
                            echo $data;
                ?>
            </div>
            <div class="col-md-3">
                 <?php
                 $i=0;
                 $data=""
                         . "<div class='row'>";
                        
                foreach ($getSmallBusinessNewsone as $news){
                    $i++;
                                $data=$data.'<table class="table table-hover">'
                                . '<tr>'
                                        . '<td>'
                                        . '<tr>'
                                        . '<td>'
                                        . '<a href="'.site_url("bullocknews/article/".$news->AID).'"><img src="'.base_url($news->image).'" class="img-respoinsive imgsmallPic imgsmallPi234'.$i.'">'
                                        .'</a>'
                                        . '</td>'
                                        . '<td>'
                                        .'<p class="p1">'.$news->shortstory.'</p>'
                                        . '</td>'
                                        . '</tr>'
                                        . '</td>'
                                      
                                        
                                 . '</tr>'
                                . '</table>'
                                      .'<script>'
                            . '$(".imgsmallPi234'.$i.'").click(function(){window.location="'.site_url("bullocknews/article/$news->AID").'";});'
                            . '</script>';
                        
                               
                            }
                            $data=$data."</div>";
                            
                            echo $data;
                ?>
            </div>
            
            
        </div>
        </div>
    
    
    
</body>
