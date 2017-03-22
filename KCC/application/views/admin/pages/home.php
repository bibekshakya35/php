<script type="text/javascript" src="<?php echo base_url()?>js/jquery.js"></script> 
<script type="text/javascript">
    
    $(function(){
$('a[title]').tooltip();
});

</script>
 <div class="page"> <!-- Page starts -->
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                          <?php echo $page;?>
                        </h1>
                         
                    </div>
                </div>
                <!-- first time profile  -->
<section >
       
          
                <div class="board">
                    <!-- <h2>Welcome to Kishan Call Center!<sup>™</sup></h2>-->
                    <div class="board-inner">
                    <ul class="nav nav-tabs" id="myTab">
                    <div class="liner"></div>
                     <li class="active">
                     <a href="#home" data-toggle="tab" title="welcome">
                      <span class="round-tabs one">
                              <i class="glyphicon glyphicon-home"></i>
                      </span> 
                  </a></li>

                  <li><a href="#profile" data-toggle="tab" title="profile">
                     <span class="round-tabs two">
                         <i class="glyphicon glyphicon-user"></i>
                     </span> 
           </a>
                 </li>
                  

                     <li><a href="#settings" data-toggle="tab" title="Discussion">
                         <span class="round-tabs four">
                              <i class="glyphicon glyphicon-comment"></i>
                         </span> 
                     </a></li>

                     </ul></div>

                     <div class="tab-content">
                      <div class="tab-pane fade in active" id="home">

                          <h3 class="head text-center">Welcome to Kishan Call Center<sup>™</sup> <span style="color:#f48260;">♥</span></h3>
                          <p class="narrow text-center">
                             A Kisan Call Center consists of a complex of telecommunication infrastructure,
computer support and human resources organized to manage effectively <br> and
efficiently the queries raised by farmers instantly in the local language.
Mainly, Subject Matter Specialists using telephone and computer,<br> interact
with farmers to understand the problem and answer the queries at a Call
Centre.<br> Kisan Call Center benefit the service at 9 a.m. to 5 p.m. during 6 days in a
week except Saturday.
                          </p>
                          
                          <p class="text-center">
                    <a href="" class="btn btn-success btn-outline-rounded "> Know More About Kishan Call Center <span style="margin-left:10px;" class="glyphicon glyphicon-send"></span></a>
                </p>
                      </div>
                      <div class="tab-pane fade" id="profile">
                          <h3 class="head text-center">Edit a Profile</h3>
                          <p class="narrow text-center">
                            This system allows User to edit their personal imformation.
                          </p>
                          
                          <p class="text-center">
                    <a href="" class="btn btn-success btn-outline-rounded "> Check your profile <span style="margin-left:10px;" class="glyphicon glyphicon-send"></span></a>
                </p>
                          
                      </div>
                    
                      <div class="tab-pane fade" id="settings">
                          <h3 class="head text-center">Start Your Discussion</h3>
                          <p class="narrow text-center">
                          Dear all, we have created this separate forum to talk about the latest Topic .  <br>
                          So, we would request our members to post and discussion  <br> any topics related to Kishan Call Center.
                          </p>
                          
                          <p class="text-center">
                    <a href="<?php echo base_url();?>admin/discussion" class="btn btn-success btn-outline-rounded "> Create Your Discussion <span style="margin-left:10px;" class="glyphicon glyphicon-send"></span></a>
                </p>
                      </div>
                     
<div class="clearfix"></div>
</div>
 
 
</div>
</section>
                   
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3 icon-crop">
                                        <img style="width:60px;" src="<?php echo base_url();?>image/crop.png">
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"> नयाँ बाली</div>
                                        <div> थप्न यहाँ क्लिक गर्नुहोस् </div>
                                    </div>
                                </div>
                            </div>
                            <a href="<?php echo base_url();?>admin/dashboard/viewcrops">
                                <div class="panel-footer">
                                    <span class="pull-left">Click Here</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <img style="width:60px;" src="<?php echo base_url();?>image/crops.png">
                                    </div>
                                    <div class="col-xs-9 text-right">
                                         <div class="huge2">  परीकार </div>
                                           <div> नयाँ बाली  का परीकार थप्न यहाँ क्लिक गर्नुहोस्</div>
                                    </div>
                                </div>
                            </div>
                            <a href="<?php echo base_url();?>admin/dashboard/viewvariety">
                                <div class="panel-footer">
                                    <span class="pull-left">Click Here</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                     <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3 icon-crop">
                                        <img style="width:60px;" src="<?php echo base_url();?>image/rog.png">
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge2">रोग</div>
                                        <div>बाली मा लाग्ने रोगहरु थप्न यहाँ क्लिक गर्नुहोस्</div>
                                    </div>
                                </div>
                            </div>
                            <a href="<?php echo base_url();?>admin/dashboard/viewproblem">
                                <div class="panel-footer">
                                    <span class="pull-left">Click Here</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                      <div class="col-xs-3 icon-crop">
                                        <img style="width:60px;" src="<?php echo base_url();?>image/pump.png">
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge2">समाधान </div>
                                        <div>रोग को समाधान थप्न यहाँ क्लिक गर्नुहोस् </div>
                                    </div>
                                </div>
                            </div>
                            <a href="<?php echo base_url();?>admin/dashboard/viewsolutiodn">
                                <div class="panel-footer">
                                    <span class="pull-left">Click Here</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                     
                </div>
                <!-- /.row -->
                </div>