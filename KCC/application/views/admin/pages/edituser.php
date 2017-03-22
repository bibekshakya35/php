<div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                         <i class="fa fa-user"></i> <?php echo $page;?>
                        </h1>
                        
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                   <div class="col-sm-4 col-md-offset-4"> 
                     <?php echo $this->session->flashdata('msg');?>

<h3>Edit User Account</h3>
          <?php foreach ($users as $user)
         {  ?>
     <form class="form-horizontal" method="POST" action="<?php echo base_url()?>admin/user/processedituser">
            <fieldset>
            <span class="title"><i class="fa fa-user"></i> Profile</span>
                <!-- Text input-->
                
                    <div class="form-group"> 
                    <div class="col-md-12">
                    <label>User Type</label>
                    <select name="usergroup" id="usergroup" class="form-control">
                               <option value="<?php echo $user->user_group?>"><?php echo $user->user_group?></option>
                              <option value="1">Admin</option>
                              <option value="0">Member</option>
                    </select >
                     </div>
                </div>
                <div class="form-group"> 
                    <div class="col-md-12">
                    <label>FullName</label>
                        <input id="fullname" name="fullname"  value="<?php echo $user->fullname ?>" class="form-control input-md"  type="text">
                    </div>
                </div>
                <div class="form-group"> 
                    <div class="col-md-12">
                    <label>Email</label>
                        <input id="email" name="email" value="<?php echo $user->email ?>"  class="form-control input-md"  type="email">
                    </div>
                </div>
          
                <span class="title">Login Info <i class="fa fa-info-circle"></i></span>
               <div class="form-group"> 
                    <div class="col-md-12">
                    <label>Username</label>
                        <input id="username" name="username" value="<?php echo $user->username ?>"  class="form-control input-md" type="text">
                    </div>
                </div>

                <div class="form-group"> 
                    <div class="col-md-12">
                    <label>Status</label>
                    <select name="status" id="status" class="form-control">
                               <option value="<?php echo $user->status?>"><?php echo $user->status?></option>
                              <option value="1">Active</option>
                              <option value="0">Inactive</option>
                    </select >
                    </div>
                </div>

                <div class="form-group"> 
                    <div class="col-md-12">
                       <input type="hidden" value="<?php echo $user->user_id; ?>" name="id" id="id">
                       <button type="submit" name="edit" id="edit" class="btn btn-primary">Update Profile</button>  
                    </div>
                </div>


            </fieldset>
        </form>
<?php
}
?>
    </div>          
                </div>
                <!-- /.row --> 

            </div>
            <!-- /.container-fluid -->