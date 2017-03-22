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
    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#addvariety" data-whatever="@mdo">Add new Variety</button>
           <table class="table">
        <thead>
          <tr class="info">
            <th>S.No.</th>
            <th>Variety Name</th>
            <th>Main Crops</th>
            <th>Action</th>

          </tr>
        </thead>
        <?php 
        $i=1;
        foreach ($variety as $varieties)
         {
          
        ?>
        <tbody>
          <tr>
            <td><?php echo $i ?></td>
            <td><?php echo $varieties->variety_name ?></td>
            <td><?php echo $varieties->maincrops ?></td>
                <td>
                <form method="POST" action="<?php echo base_url() . "admin/dashboard/deletevariety/" . $varieties->variety_id; ?>">
                <input type="submit" class="btn btn-primary btn-xs" value="Delete">
                </form>
                <form method="POST">
                <button type="button"  class="btn btn-primary btn-xs"  name="id" value="<?php echo $varieties->variety_id ?>" data-toggle="modal" data-target="#edit"  data-whatever="@mdo">Edit</button>                
                </form> 
                </td>             
              </tr>   
        </tbody>
      <?php $i++; } ?>

</table>
<div class="modal fade" id="addvariety" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Add Variety</h4>
      </div>
      <div class="modal-body">
      <form method="post" id="addvariety" action="<?php echo base_url(); ?>admin/dashboard/addvariety" enctype="multipart/form-data">
      <label>Main Crops</label>
      <select name="maincrop" id="maincrop" class="form-control">
           <option value="">Please select Main crops</option>

          <?php foreach($crop as $crops)
           {?>
          <option value="<?php echo $crops->crop_id;?>"><?php echo $crops->maincrops; ?></option>
         <?php 
          }
          ?>
        </select ><br />
        <label>Variety Name</label><input class="form-control" type="text" name="variety"><br \>
        <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <input type="submit" class="btn btn-primary" value="Add" name="add" >
      </div>
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

    