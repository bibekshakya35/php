         <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                        Agrovet Profile
                        </h1>
                         
                    </div>
                </div>
<?php foreach ($infos as $profile) {?>

 <div class="row">
   <div class="col-sm-10"><h1><?php echo $profile->agrovet_name;?></h1></div>
      <div class="col-sm-2"><a href="/users" class="pull-right"><img title="profile image" class="img-circle img-responsive" src="<?php echo base_url()?>image/agrovets/<?php echo $profile->image;?>"></a></div>
    </div>
    <div class="row">
      <div class="col-sm-3"><!--left col-->
              
          <ul class="list-group">
            <li class="list-group-item blue"><strong>Profile</strong></li>
            <li class="list-group-item text-center blue">Contact Details <br>
             <span class="blue"><i class="fa fa-phone green"></i> <strong> <?php echo $profile->phone;?> </strong></span><br>
       
             
            <li class="list-group-item text-right"><span class="pull-left green"><strong>Name</strong></span> <?php echo $profile->agrovet_name;?></li>
             <li class="list-group-item ">
               <span class="green"> <strong>Address</strong></span><span class="pull-right"><?php echo $profile->address;?></span>
             </li>
            <li class="list-group-item ">
              <!-- Developement -->
            <span class="blue"> <strong> Developement Region: </strong></span><br/> 
            <span class="address"> <strong><?php echo $profile->drname;?> </strong></span><br/> 
             <!-- zone -->
             <span class="blue"> <strong> Zone: </strong></span><br/> 
            <span class="address"> <strong> <?php echo $profile->zname;?> </strong></span><br/> 
            <!-- District -->
             <span class="blue"> <strong> District: </strong></span><br/> 
            <span class="address"> <strong> <?php echo $profile->dname;?></strong></span><br/> 
             <!-- VDC -->
             <span class="blue"> <strong> VDC: </strong></span><br/> 
            <span class="address"> <strong> <?php echo $profile->vname;?> <span class="blue">8</span> </strong></span><br/> 
            </li>
            <li class="list-group-item text-right"><span class="pull-left green"><strong>Owner Name</strong></span><?php echo $profile->agrovet_owner;?></li>
            
          </ul> 
               
          <div class="panel panel-default">
            <div class="panel-heading">Website <i class="fa fa-link fa-1x"></i></div>
            <div class="panel-body"><a href="<?php echo $profile->website;?>"><?php echo $profile->website;?></a></div>
          </div>
         
          <div class="panel panel-default">
            <div class="panel-heading">Social Media</div>
            <div class="panel-body">
              <a href="<?php echo $profile->facebook_link;?>"><i class="fa fa-facebook fa-2x"></i> </a> <a href="<?php echo $profile->twitter_link;?>"><i class="fa fa-twitter fa-2x"></i></a> 
            </div>
          </div>
          
        </div><!--/col-3-->
      <div class="col-sm-9">
          <?php } ?>
          <ul class="nav nav-tabs" id="myTab">
            <li class="active"><a href="#retailer" data-toggle="tab">Retailer</a></li>
            <li><a href="#addnew" data-toggle="tab">Add New</a></li>
              <li><a href="#farmer" data-toggle="tab">Farmer List</a></li>
          </ul>
              
          <div class="tab-content">
            <div class="tab-pane active" id="retailer">
              <div class="table-responsive">
                <table class="table table-hover ">
                  <thead class="green">
                    <tr>
                      <th>SN.</th>
                      <th>Name</th>
                      <th>Owner Name</th>
                      <th>Email </th>
                      <th>Phone Number</th>
                      <th>Address </th>
                      <th>Status </th>
                      <th>Action </th>
                    </tr>
                  </thead>
                  <tbody id="items ">
                  <?php $i=1;
                  foreach ($agross as $agro) { ?>
                    <tr>
                      <td><?php echo $i;?></td>
                      <td><?php echo $agro->agrovet_name;?></td>
                      <td><?php echo $agro->owner_name;?></td>
                      <td><?php echo $agro->email;?></td>
                      <td><?php echo $agro->phone;?></td>
                      <td><?php echo $agro->address;?></td>
                      <td><?php if($agro->status=='1'){?>
                          <input type="button" class="btn btn-success" value="Active"> <?php } else{
                          echo "Inactive";} ?>
                      <td><a href="#">Delete</a></td>
                          </td>
                    </tr> 
                    <?php $i++;}?>
                  </tbody>
                </table>
                <hr>
                <div class="row">
                  <div class="col-md-4 col-md-offset-4 text-center">
                    <ul class="pagination" id="myPager"></ul>
                  </div>
                </div>
              </div><!--/table-resp-->
              
              
             </div><!--/tab-pane-->

             <div class="tab-pane " id="addnew">
           







              <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                         <i class="fa fa-user"></i> Add Retailer Agrovet 
                        </h1>
                        
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                   <div class="col-sm-4 col-md-offset-4"> 
        <form class="form-horizontal" id="addretailer" method="post" action="<?php echo base_url();?>admin/agrovet/addProfileRetailer" enctype="multipart/form-data">
            <fieldset>
<span class="title"> <i class="fa fa-university"></i>Retailer Agrovet Profile</span>
                <!-- Text input-->
                <div class="form-group"> 
                    <div class="col-md-12">
                        <input id="name" name="name" placeholder="Retailer Agrovet Name" class="form-control input-md"  >
                    </div>
                </div>
        <div class="form-group"> 
                    <div class="col-md-12">
                        <input id="owner_name" name="owner_name" placeholder="Retailer Owner Name" class="form-control input-md"  >
                    </div>
                </div>
                <div class="form-group"> 
                    <div class="col-md-12">
                        <input id="email" name="email" placeholder="Email" class="form-control input-md"  type="email">
                    </div>
                </div>
                <div class="form-group"> 
                    <div class="col-md-12">
                        <input id="address" name="address" placeholder="Address" class="form-control input-md" >
                    </div>
                </div>
                <div class="form-group"> 
                    <div class="col-md-12">
                        <input id="phone" name="phone" placeholder="Phone Number" class="form-control input-md" >
                    </div>
                </div>
                
                <div class="form-group"> 
                    <div class="col-md-12">
                        <select name="status" class="form-control input-md">
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        <select>
                    </div>
                </div>
                 <?php foreach ($infos as $info) { ?>
               <input type="hidden" id="id" name="id" value="<?php  echo $info->agrovet_id;?>">
               <?php } ?>

                <div class="form-group"> 
                    <div class="col-md-12">
                        <button id="register" name="register" class="btn adduserbtn pull-right" type="submit">Add Agrovet</button>
                    </div>
                </div>

            </fieldset>
        </form>

    </div>          
                </div>
                <!-- /.row --> 

            </div>




             
              
             </div><!--/tab-pane-->  
                <div class="tab-pane" id="farmer">
              <div class="table-responsive">
                <table class="table table-hover ">
                  <thead class="green">
                    <tr>
                      <th>SN.</th>
                      <th>Farmer Name</th>
                      <th>Phone Number</th>
                      <th>District</th>
                      <th>Address </th>
                      <th>Current Investment </th>
                      <th>Main Crops </th>
                      <th>Problems </th>
                      <th>Action </th>
                    </tr>
                  </thead>
                  <tbody id="items ">
                  <?php 
                  $i=1;
                  foreach ($farms as $farm) { ?>
                   
                    <tr>
                      <td><?php echo $i;?></td>
                      <td><?php echo $farm->farmer_name?></td>
                      <td><?php echo $farm->phone?></td>
                      <td><?php echo $farm->district_name?></td>
                      <td><?php echo $farm->address_tole?></td>
                      <td><?php echo $farm->current_investment?></td>
                      <td><?php echo $farm->main_crops?></td>
                      <td><?php echo $farm->problem?></td>
                      <td>View Profile</td>
                    </tr> 
                    <?php $i++;}?>
                  </tbody>
                </table>
                <hr>
                <div class="row">
                  <div class="col-md-4 col-md-offset-4 text-center">
                    <ul class="pagination" id="myPager"></ul>
                  </div>
                </div>
              </div><!--/table-resp-->
              
              
             </div><!--/tab-pane-->
          </div><!--/tab-content-->

 </div>
 </div>
<script src="<?php echo base_url()?>js/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript" href="<?php echo base_url();?>js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>js/jquery.validate.min.js"></script>
<script type="text/javascript">
     $("#addretailer").validate({
      rules: {
        owner_name: 
              {
            required:true,
            minlength:5,
              },
        email: "required",
        name: "required",
        phone: "required",
        address: "required",
      },
      messages: {
        owner_name: {
            required:"This field is required",
            minlength:"Enter minimum 5 letters",
            name:"Enter enter letters only",
            },
        email: "This field is required",
        name: "This field is required",
        phone: "This field is required",
        address: "This field is required",
      }
    });
     $('#owner_name').keypress(function (e) {
        var regex = new RegExp("^[a-zA-Z]+$");
        var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
        if (regex.test(str)) {
            return true;
        }
        else
        {
        e.preventDefault();
        alert('Please Enter Alphabates Only');
        return false;
        }
    });

     </script>