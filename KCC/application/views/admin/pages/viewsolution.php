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
    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#addvariety" data-whatever="@mdo">Add Solutions</button>
          <table class="table">
        <thead>
          <tr class="info">
            <th>S.No.</th>
            <th>Solution,Recommended product</th>
            <th>Problem</th>
            <th>Delete</th>
          </tr>
        </thead>
        <?php 
        $i=1;
        foreach ($solution as $solutions)
         {
          
        ?>
        <tbody>
          <tr>
            <td><?php echo $i ?></td>
            <td><?php echo $solutions->recommended_solution?></td>
            <td><?php echo $solutions->problem_name ?></td>
                <td>
                 <form method="POST" action="<?php echo base_url() . "admin/dashboard/deletesolution/" . $solutions->recommended_id; ?>">
                <input type="submit" class="btn btn-primary btn-xs" value="Delete">
                </form>
                <form method="POST" action="<?php echo base_url() . "admin/dashboard/editsolution/" . $solutions->recommended_id; ?>" >
                <input type="submit" class="btn btn-primary btn-xs" value="Edit">
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
        <h4 class="modal-title" id="exampleModalLabel">Add Solutions</h4>
      </div>
      <div class="modal-body">
      <form method="post" id="addvariety" action="<?php echo base_url(); ?>admin/dashboard/addsolution">
        <label>Problem</label>
        <select name="problem" id="problem" class="form-control">
           <option value="">Please select problem</option>

          <?php foreach($problem as $problems)
           {?>
          <option value="<?php echo $problems->problem_id;?>"><?php echo $problems->problem_name; ?></option>
         <?php 
          }
          ?>
        </select ><br />
        <label>Solutions</label><input class="form-control" type="text" name="solution"><br \>
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

    