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
    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#addvariety" data-whatever="@mdo">Add Problems</button>
          <table class="table">
        <thead>
          <tr class="info">
            <th>S.No.</th>
            <th>Problems</th>
            <th>Main Crop</th>
            <th>Delete</th>
          </tr>
        </thead>
        <?php 
        $i=1;
        foreach ($problem as $problems)
         {
          
        ?>
        <tbody>
          <tr>
            <td><?php echo $i ?></td>
            <td><?php echo $problems->problem_name ?></td>
            <td><?php echo $problems->maincrops ?></td>
                <td>
                <form method="POST" action="<?php echo base_url() . "admin/dashboard/deleteproblem/" . $problems->problem_id; ?>">
                <input type="submit" class="btn btn-primary btn-xs" value="Delete">
                </form>
                <form method="POST" action="<?php echo base_url() . "admin/dashboard/editproblem/" . $problems->problem_id; ?>" >
                <button type="button"  class="btn btn-primary btn-xs"  name="edit" value="<?php echo $problems->problem_id ?>" data-toggle="modal" data-target="#edit"  data-whatever="@mdo">Edit</button>                
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
        <h4 class="modal-title" id="exampleModalLabel">Add Problems</h4>
      </div>
      <div class="modal-body">
     <form method="post" id="addvariety" action="<?php echo base_url(); ?>admin/dashboard/addproblem">
      <label>Main Crops</label>
      <select name="maincrop" id="maincrop" class="form-control" enctype="multipart/form-data">
                 <option value="">Please select Main crops</option>

                <?php foreach($crop as $crops)
                 {?>
                <option value="<?php echo $crops->crop_id;?>"><?php echo $crops->maincrops; ?></option>
               <?php 
                }
                ?>
              </select ><br />
      <label>Problem Name</label><input class="form-control" type="text" name="problem_name"><br \> 
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

    