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
             <?php foreach ($farmers as $farmer) {?>
            <div class="panel-heading">
              <h3 class="panel-title"><?php echo $farmer->fname ?></h3>
            </div>
            <div class="panel-body">
              <div class="row">              
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                     
                      <tr>
                        <td>Full Name:</td>
                        <td><?php echo $farmer->age ?></td>
                      </tr>
                      <tr>
                        <td>Phone:</td>
                        <td><?php echo $farmer->phone ?></td>
                      </tr>
                      <tr>
                        <td>Gender</td>
                        <td><?php echo $farmer->gender ?></td>
                      </tr>
                      <tr>
                        <td>Development Region</td>
                        <td><?php echo $farmer->dr_name ?></td>
                      </tr><tr>
                        <td>Zone</td>
                        <td><?php echo $farmer->zone_name ?></td>
                      </tr><tr>
                        <td>District</td>
                        <td><?php echo $farmer->district_name ?></td>
                      </tr><tr>
                        <td>Vdc</td>
                        <td><?php echo $farmer->vdc ?></td>
                      </tr>
                      <tr>
                        <td>Ward No.</td>
                        <td><?php echo $farmer->wardno ?></td>
                      </tr><tr>
                        <td>Tole</td>
                        <td><?php echo $farmer->tole ?></td>
                      </tr><tr>
                        <td>Crop</td>
                        <td><?php echo $farmer->maincrops ?></td>
                      </tr>

            
                           
                      </tr>
                     
                    </tbody>
                  </table>
                  
                  <A href="<?php echo base_url() . "admin/user/edituser/" . $farmer->farmer_id; ?>" class="btn btn-primary">Edit Profile</A>
                  
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