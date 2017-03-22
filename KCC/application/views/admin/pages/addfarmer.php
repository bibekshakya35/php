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

       <h3>Add Farmer</h3>
      <form method="post" action="<?php echo base_url(); ?>admin/farmer/insert_farmer">
      <label>Farmer name:</label><input class="form-control" type="text" name="fname"><br />
      <label>Age:</label><input class="form-control" type="text" name="age"><br />
      <label>Phone Number</label><input class="form-control" type="text" name="phone"><br \>
      <label>Gender</label>
      <select class="form-control" name="gender">
      <option>select your gender</option>
      <option value="m" name="gender">Male</option>
      <option value="f" name="gender">Female</option>
      </select><br \>
      <label>Developement Region</label>
       <select name="region" id="region" class="form-control">
                 <option value="">Please select Develioment region</option>

                <?php foreach($region as $regions)
                 {?>
                <option value="<?php echo $regions->dr_id;?>"><?php echo $regions->dr_name; ?></option>
               <?php 
                }
                ?>
              </select ><br />
      <label>Zone</label>
      <select name="zone" id="zone" class="zone form-control">
      </select><br />
      <label>District</label>
      <select name="district" id="district" class="district form-control">
      </select><br />
      <label>Municipality/VDC</label><input class="form-control" type="text" name="vdc"><br />
      <label>Ward No.</label><input class="form-control" type="text" name="ward"><br />
      <label>Tole</label><input class="form-control" type="text" name="tole"><br />
      <label>Crops</label>
      <select name="crop" id="crop" class="form-control">
                 <option value="">Please search crops</option>

                <?php foreach($crop as $crops)
                 {?>
                <option value="<?php echo $crops->crop_id;?>"><?php echo $crops->maincrops; ?></option>
               <?php 
                }
                ?>
      </select ><br />
      <label>Variety</label>
      <select name="variety" id="variety" class="variety form-control"></select><br />
      <label>Problem</label>
      <select name="problem" id="problem" class="problem form-control"></select><br />
      <label>Recommended Product</label>
      <select name="solution" id="solution" class="solution form-control"></select><br />
      <label>Product IN Use</label><input class="form-control" type="text" name="productinuse"><br />
      <input type="submit" class="btn btn-primary" value="Add">
      </form>

    </div>          
                </div>
                <!-- /.row --> 

            </div>
     <script src="<?php echo base_url();?>js/jquery.js"></script>
           <!-- /.container-fluid -->
<script type="text/javascript">
      jQuery(document).ready(function(){
      $("#region").change(function() {
        var subID = {"dr_id" : $('#region').val()};

          $.ajax({
          type: "POST",
          data: subID,
          url: "<?php echo base_url(); ?>admin/jquery/getregionFilter",
          dataType: 'json',
        success: function(data){
          $('#zone').html("<option>Please Select</option>");
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
        var subID = {"zone_id" : $('#zone').val()};

          $.ajax({
          type: "POST",
          data: subID,
          url: "<?php echo base_url(); ?>admin/jquery/getdistrictFilter",
          dataType: 'json',
        success: function(data){
          $('#district').html("<option>Please Select</option>");
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
      $("#crop").change(function() {
        var subID = {"crop_id" : $('#crop').val()};

          $.ajax({
          type: "POST",
          data: subID,
          url: "<?php echo base_url(); ?>admin/jquery/getvarietyFilter",
          dataType: 'json',
        success: function(data){
          $('#variety').html("<option>Please Select</option>");
            $.each(data, function(i, data){
                 $('#variety').append("<option value='"+i+"'>"+data+"</option>");
            });
           }
         });
       });
     });
</script>



<script type="text/javascript">
      jQuery(document).ready(function(){
      $("#crop").change(function() {
        var subID = {"crop_id" : $('#crop').val()};

          $.ajax({
          type: "POST",
          data: subID,
          url: "<?php echo base_url(); ?>admin/jquery/getproblemFilter",
          dataType: 'json',
        success: function(data){
          $('#problem').html("<option>Please Select</option>");
            $.each(data, function(i, data){
                 $('#problem').append("<option value='"+i+"'>"+data+"</option>");
            });
           }
         });
       });
     });
</script>

<script type="text/javascript">
      jQuery(document).ready(function(){
      $("#crop").change(function() {
        var subID = {"crop_id" : $('#crop').val()};

          $.ajax({
          type: "POST",
          data: subID,
          url: "<?php echo base_url(); ?>admin/jquery/getpdfFilter",
          dataType: 'json',
        success: function(data){
          debugger;
          $('#result').html("Please Select");
            $.each(data, function(i, data){
                 $('#result').append(src="<?php echo base_url();?>assets/upload/pdf/"+data);
                 <embed width="600" height="450" src="<?php echo base_url();?>/sp.pdf" type="application/pdf"></embed>

            });
           }
         });
       });
     });
</script>


<script type="text/javascript">
      jQuery(document).ready(function(){
      $("#problem").change(function() {
        var subID = {"problem_id" : $('#problem').val()};

          $.ajax({
          type: "POST",
          data: subID,
          url: "<?php echo base_url(); ?>admin/jquery/getsolutionFilter",
          dataType: 'json',
        success: function(data){
          $('#solution').html("<option>Please Select</option>");
            $.each(data, function(i, data){
                 $('#solution').append("<option value='"+i+"'>"+data+"</option>");
            });
           }
         });
       });
     });
</script>