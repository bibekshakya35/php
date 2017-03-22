<div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                         <i class="fa fa-user"></i> Add Wholesaler Agrovet 
                        </h1>
                        
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">  
                 <form name="retaileragrovet" id="retaileragrovet" method="post" action="<?php echo base_url()?>admin/agrovet/addRetailer">
                       <button class="btn btn-success" name=" " id="delete">  Add Retailer Agrovet  </button>
                  </form>

                   <div class="col-sm-4 col-md-offset-4"> 
<h3>Add New Wholesaler Agrovet</h3>
        <form class="form-horizontal" id="addagrovet" method="post" action="<?php echo base_url();?>admin/agrovet/addNewAgrovet" enctype="multipart/form-data">
            <fieldset>
<span class="title"> <i class="fa fa-university"></i> Wholesaler Agrovet Profile</span>
                <!-- Text input-->
                <div class="form-group"> 
                    <div class="col-md-12">
                        <input id="name" name="name" placeholder="Agrovet Name" class="form-control input-md"  type="text">
                    </div>
                </div>
                <div class="form-group"> 
                    <div class="col-md-12">
                        <input id="owner" name="owner" placeholder="Owner Name" class="form-control input-md"  type="text">
                    </div>
                </div>
                <div class="form-group"> 
                    <div class="col-md-12">
                        <input id="pan" name="pan" placeholder="PAN Number" class="form-control input-md"  type="text">
                    </div>
                </div>
                <div class="form-group"> 
                    <div class="col-md-12">
                        <input id="email" name="email" placeholder="Email" class="form-control input-md"  type="email">
                    </div>
                </div>
                <div class="form-group"> 
                    <div class="col-md-12">
                        <input id="address" name="address" placeholder="Address" class="form-control input-md" type="text">
                    </div>
                </div>
                <div class="form-group"> 
                    <div class="col-md-12">
                        <input id="phone" name="phone" placeholder="Phone Number" class="form-control input-md" type="text">
                    </div>
                </div>
                <div class="form-group"> 
                    <div class="col-md-12 ">
                        Browse <input type="file" name="userfile" class="form-control input-md"/>
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
                <div class="form-group"> 
                    <div class="col-md-12">
                        <select name="region" id="region" class="form-control input-md">
                            <option>Please Select Development Region</option>
                            <?php foreach ($regions as $region) {?>
                            <option value="<?php echo $region->dr_id?>"><?php echo $region->dr_name?></option>
                            <?php }?>
                        <select>
                    </div>
                </div>
                <div class="form-group"> 
                    <div class="col-md-12">
                        <select name="zone" id="zone" class="form-control input-md">
                            
                        <select>
                    </div>
                </div>
                <div class="form-group"> 
                    <div class="col-md-12">
                        <select name="district" id="district" class="form-control input-md">
                            
                        <select>
                    </div>
                </div>
                <div class="form-group"> 
                    <div class="col-md-12">
                        <select name="vdc" id="vdc" class="form-control input-md">
                            
                        <select>
                    </div>
                </div>
                <div class="form-group"> 
                    <div class="col-md-12">
                        <input id="ward" name="ward" placeholder="Ward Number" class="form-control input-md" type="text">
                    </div>
                </div>
                <div class="form-group"> 
                    <div class="col-md-12">
                        <input id="website" name="website" placeholder="WebSite" class="form-control input-md" type="text">
                    </div>
                </div>
                <div class="form-group"> 
                    <div class="col-md-12">
                        <input id="facebook" name="facebook" placeholder="Facebook Link" class="form-control input-md" type="text">
                    </div>
                </div>
                <div class="form-group"> 
                    <div class="col-md-12">
                        <input id="twitter" name="twitter" placeholder="Twitter Link" class="form-control input-md" type="text">
                    </div>
                </div>
                
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
            <!-- /.container-fluid -->
<script type="text/javascript" src="<?php echo base_url()?>js/jQuery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>js/jquery.validate.min.js"></script>
<script type="text/javascript">
     $("#addagrovet").validate({
      rules: {
        name: {
            required:true,
            minlength:5,
              },
       owner: {
            required:true,
            minlength:5,
              },
 
        pan: "required",
        phone: "required",
        address: "required",
        region:"required",
        zone:"required",
        district:"required",
        vdc:"required",
        ward:"required",

      },
      messages: {
        name: {
            required:"This field is required",
            minlength:"Enter minimum 5 letters",
            name:"Enter enter letters only",
            },
        email: {
            required:"This field is required",
            email:" Please enter valid email.",
        },
        pan: "This field is required",
        phone: "This field is required",
        address: "This field is required",
        region: "This field is required",
        zone: "This field is required",
        district: "This field is required",
        vdc: "This field is required",
        ward: "This field is required",
      }
    });
     $('#owner').keypress(function (e) {
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
<script type="text/javascript">
  jQuery(document).ready(function(){
      $("#region").change(function() {
        var drID = {"dr_id" : $('#region').val()};
          $.ajax({
          type: "POST",
          data: drID,
          url: "<?php echo base_url(); ?>admin/ajax/showZoneById",
          dataType: 'json',
        success: function(data){
          $('#zone').html("<option>Please Select Zone</option>  ");
            $.each(data, function(i, data){
                 $('#zone').append("<option value='"+i+"'>"+data+"</option>");
            });
           }
         });
       });
     });
  </script>
  <script type="text/javascript">
  jQuery(document).ready(function(){
      $("#zone").change(function() {
        var zoneID = {"zone_id" : $('#zone').val()};
          $.ajax({
          type: "POST",
          data: zoneID,
          url: "<?php echo base_url(); ?>admin/ajax/showDistrictById",
          dataType: 'json',
        success: function(data){
          $('#district').html("<option>Please Select District</option>  ");
            $.each(data, function(i, data){
                 $('#district').append("<option value='"+i+"'>"+data+"</option>");
            });
           }
         });
       });
     });
  </script>
  <script type="text/javascript">
  jQuery(document).ready(function(){
      $("#district").change(function() {
        var vdcID = {"district_id" : $('#district').val()};
          $.ajax({
          type: "POST",
          data: vdcID,
          url: "<?php echo base_url(); ?>admin/ajax/showVdcById",
          dataType: 'json',
        success: function(data){
          $('#vdc').html("<option>Please Select VDC</option>  ");
            $.each(data, function(i, data){
                 $('#vdc').append("<option value='"+i+"'>"+data+"</option>");
            });
           }
         });
       });
     });
  </script>
