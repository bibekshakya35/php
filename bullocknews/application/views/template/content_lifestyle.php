  <div class="container">
        <div class="horiz-flag1 noise1"><h1>Lifestyle New's</h1></div>
        <div class="row">
            
                <?php
                $i=0;
                 $data="<div class='col-md-6'>"
                         . "<div class='row'>";
                        
                foreach ($getLifestyleNews as $news){
                    $i++; 
                    $data=$data.'<table class="table table-hover">'
                                . '<tr>'
                                        . '<td>'
                                        . '<tr>'
                                        . '<td>'
                                        . '<a href="'.site_url("bullocknews/article/".$news->AID).'"><img src="'.base_url($news->image).'" class="img-respoinsive imgBigpic imgBigpi234'.$i.'">'
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
                            . '$(".imgBigPi12'.$i.'").click(function(){window.location="'.site_url("bullocknews/article/$news->AID").'";});'
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
                        
                foreach ($getSmallLifestyleNews as $news){
                    $i++;  
                    $data=$data.'<table class="table table-hover">'
                                . '<tr>'
                                        . '<td>'
                                        . '<tr>'
                                        . '<td>'
                                        . '<a href="'.site_url("bullocknews/article/".$news->AID).'"><img src="'.base_url($news->image).'" class="img-respoinsive imgBigpic imgBigpi234'.$i.'">'
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
                            . '$(".imgBigPi123'.$i.'").click(function(){window.location="'.site_url("bullocknews/article/$news->AID").'";});'
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
                        
                foreach ($getSmallLifestyleNewsone as $news){
                    $i++;  
                    $data=$data.'<table class="table table-hover">'
                                . '<tr>'
                                        . '<td>'
                                        . '<tr>'
                                        . '<td>'
                                        . '<a href="'.site_url("bullocknews/article/".$news->AID).'"><img src="'.base_url($news->image).'" class="img-respoinsive imgBigpic imgBigpi234'.$i.'">'
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
                            . '$(".imgBigPi1234'.$i.'").click(function(){window.location="'.site_url("bullocknews/article/$news->AID").'";});'
                            . '</script>';
                               ;
                               
                            }
                            $data=$data."</div>";
                            
                            echo $data;
                ?>
            </div>
            
            
        </div>
        </div>
    