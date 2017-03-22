hh <div> <!-- Page starts -->
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
            <td><a href="<?php echo base_url(); ?>assets/upload/<?php echo $users->image ?>" data-lightbox="<?php ?>"> <img class="img img-circle" src="<?php echo base_url();?>assets/upload/<?php echo $users->image ?>" style="height:100px; width:100px;" ></a></td>
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
              </tr>   
        </tbody>
      <?php $i++; } ?>
</table>


            <span class="pull-right"><b><!-- count data showing --><strong>Total:</strong> 1 - 6 of 6 </b><a href="#" class="nextButton "><i class="fa fa-arrow-circle-right"></i></a></span>
            </div>
    </div>
</div>      
                </div>
                <!-- /.row -->  
                 </div> <!-- Page end -->

    