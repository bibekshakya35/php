<div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                         
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-user"></i> <?php echo $page;?>
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">
                            <div class="col-md-5  toppad  pull-right col-md-offset-3 ">
       
   </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
   
   
          <div class="panel panel-info">
             <?php foreach ($user as $users) {?>
            <div class="panel-heading">
              <h3 class="panel-title"><?php echo $users->fullname ?></h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> <img class="img img-circle" src="<?php echo base_url();?>image/users/<?php echo $users->image ?>" style="height:100px; width:100px;" > </div>
              
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                     
                      <tr>
                        <td>Full Name:</td>
                        <td><?php echo $users->fullname ?></td>
                      </tr>
                      <tr>
                        <td>Email:</td>
                        <td><?php echo $users->email ?></td>
                      </tr>
                      <tr>
                        <td>Username</td>
                        <td><?php echo $users->username ?></td>
                      </tr>
                      <tr>
                        <td>Status</td>
                        <td> 
                        <?php if($users->status=='1')
                        {?>
                          Active
                       <?php }
                        else
                        { ?>
                          Inactive
                       <?php }
                        ?> 
                      </td>
                      </tr>
                           
                      </tr>
                     
                    </tbody>
                  </table>
                  
                  <A href="<?php echo base_url() . "admin/user/edituser/" . $users->user_id; ?>" class="btn btn-primary">Edit Profile</A>
                  
                </div>
              </div>
            </div>
            <?php } ?>
          </div>
        </div>
                    </div>
                </div>
                <!-- /.row --> 

            </div>
            <!-- /.container-fluid -->