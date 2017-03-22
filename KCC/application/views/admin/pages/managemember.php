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
        <thead>
          <tr class="info">
            <th>S.No.</th>
            <th>Full Name</th>
            <th>Email</th>
            <th>User name</th>
            <th>Image</th>
            <th>Status</th>
            <th>Action</th>
          </tr>
        </thead>
        <?php 
        $i=1;
        foreach($user as $users)
         {
          
        ?>
        <tbody>
          <tr>
            <td><?php echo $i ?></td>
            <td><?php echo $users->fullname ?></td>
            <td><?php echo $users->email ?></td>
            <td><?php echo $users->username ?></td>
            <td><a href="<?php echo base_url(); ?>assets/upload/<?php echo $users->image ?>" data-lightbox="<?php?>"> <img class="img img-circle" src="<?php echo base_url();?>assets/upload/<?php echo $users->image ?>" style="height:100px; width:100px;" ></a></td>
            <td>
              <?php if($users->status=='1')
              {?>
                <button class="btn btn-success">Active</button>
             <?php }
              else
              { ?>
                <button class="btn btn-danger">Inactive</button>
             <?php }
              ?> 
            </td>
                <td>
                <form method="POST" action="<?php echo base_url() . "admin/user/userprofile/" . $users->user_id; ?>">
                <input type="submit" class="btn btn-primary btn-sm" value="View Profile">
                </form>
                <form method="POST" action="<?php echo base_url() . "admin/user/deleteuser/" . $users->user_id; ?>">
                <input type="submit" value="Delete">
                </form>
              </td>
              </tr>   
        </tbody>
      <?php $i++; } ?>
</table>

<div class="modal fade" id="dfa" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Edit User</h4>
      </div>
      <div class="modal-body">
        <form id="edit_user" method="post" action="<?php echo base_url();?>index.php/admin/user/edit_user">
          <div>
            
          <label>Full Name</label><input class="form-control" type="text" name="name" value="<?php  ?>"><br />
          <label>Email</label><input class="form-control" type="text" name="address"><br />
          <label>Username</label><input class="form-control" type="text" value ="<?php echo $users->fullname ?>" name="address"><br />
          <label>Password</label><input class="form-control" type="text" name="address"><br />
          <label>User Type</label><input class="form-control" type="text" name="address"><br />
          <label>Status</label><input class="form-control" type="text" name="address"><br />
          <label>Image</label><input class="form-control" type="text" name="address"><br />
         </div>
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

    