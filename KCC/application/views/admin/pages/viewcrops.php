  <div> <!-- Page starts -->
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                          <?php echo $page;?>
                        </h1>
                         
                    </div>
                </div>
                <!-- /.row -->
                     <?php echo $this->session->flashdata('msg');?>

                <div class="row">
                  <div class="container">
    <div class="row">
        <div class="span5">
      <table class="table">
       <?php foreach($crops as $crop)
  { ?>
   <div class="col-md-3 thumb" >
    <div class="thumbnail" >
    <a href="<?php echo base_url() . "home/orderproduct/" . $crop->crop_id; ?>"><img src="<?php echo base_url();?>assets/upload/<?php echo $crop->image ?>" style="height:100px; width:100px;" ></a><br \><br \>
      <div class="caption">
        <h3> <?php echo "Name:".$crop->maincrops;?></h3>
       <h3> <?php echo "Description:".$crop->description; ?></h3>
      </div><form method="POST" action="<?php echo base_url() . "home/orderproduct/" . $crop->crop_id; ?>">
        <p class="imgDescription"><button class="btn btn-danger">Buy Now</button></p></form>
        <form method="POST" action="<?php echo base_url() . "admin/dashboard/deletecrops/" . $crop->crop_id; ?>">
                <input type="submit" class="btn btn-primary btn-xs" value="Delete">
                </form>
                <form method="POST">
               <button type="button"  class="btn btn-primary btn-xs"  name="id" value="<?php echo $crop->crop_id ?>" data-toggle="modal" data-target="#edit"  data-whatever="@mdo">Edit</button>                
              </form>
</div>
</div>
   <?php }?>

<div class="modal fade" id="addcrops" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Add Crops</h4>
      </div>
      <div class="modal-body">
       <form method="post" id="addcrops" action="<?php echo base_url(); ?>admin/dashboard/add_crops" enctype="multipart/form-data">
      <label>Main Crops</label><input class="form-control" type="text" name="mcrop"><br \>
      <!-- <label>Images</label><input type="file" name="userfile" id="image"><br /> -->
      <label>Description file</label><input type="file" name="pdf"  id="pdf"><br />
      <input type="submit" class="btn btn-primary" value="Add">
      </form>
      </div>
    </div>
  </div>
</div>

            <span class="pull-right"><b><!-- count data showing --><strong>Total:</strong> 1 - 6 of 6 </b><a href="#" class="nextButton "><i class="fa fa-arrow-circle-right"></i></a></span>
            </div>
    </div>
</div>      
                </div>
                <!-- /.row -->  
                 </div> <!-- Page end -->

