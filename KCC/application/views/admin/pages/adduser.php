<div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                         <i class="fa fa-user"></i> Add User
                        </h1>
                        
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                   <div class="col-sm-4 col-md-offset-4"> 
                     <?php echo $this->session->flashdata('msg');?>

<h3>Create New User Account</h3>
        <form class="form-horizontal" method="post" action="<?php echo base_url();?>admin/user/register_user" enctype="multipart/form-data">
            <fieldset>
<span class="title"><i class="fa fa-user"></i> Profile</span>
                <!-- Text input-->

                <div class="form-group"> 
                    <div class="col-md-12">
                    <select name="usergroup" id="usergroup" class="form-control">
                               <option value="">Please choose user type</option>
                              <option value="1">Admin</option>
                              <option value="0">Member</option>
                    </select >
                     </div>
                </div>
                <div class="form-group"> 
                    <div class="col-md-12">
                        <input id="fullname" name="fullname" placeholder="Full Name" class="form-control input-md" required="" type="text">
                    </div>
                </div>
                <div class="form-group"> 
                    <div class="col-md-12">
                        <input id="email" name="email" placeholder="email" class="form-control input-md" required="required" type="email">
                    </div>
                </div>
                 <div class="form-group"> 
                    <div class="col-md-12">
                        <input class="form-control" type="file" name="userfile" id="image">
                     </div>
                </div>
                <span class="title">Login Info <i class="fa fa-info-circle"></i></span>
               <div class="form-group"> 
                    <div class="col-md-12">
                        <input id="username" name="username" placeholder="Username" class="form-control input-md" required="required" type="text">
                    </div>
                </div>
                
                <div class="form-group"> 
                    <div class="col-md-12">
                        <input id="password" name="password" placeholder="password" class="form-control input-md"  type="password">
                    </div>
                </div>
                <div class="form-group"> 
                    <div class="col-md-12">
                        <button id="register" name="register" class="btn adduserbtn pull-right" type="submit">Add User</button>
                    </div>
                </div>

            </fieldset>
        </form>

    </div>          
                </div>
                <!-- /.row --> 

            </div>
            <!-- /.container-fluid -->