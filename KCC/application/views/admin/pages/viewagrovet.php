 
 <div class="page">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                          View Agrovet
                        </h1>
                    </div>
                </div>
					<!-- Nav tabs --><div class="card">
					<ul class="   nav nav-tabs" role="tablist" >
						<li role="presentation" class="active"><a href="#eastern" aria-controls="home" role="tab" data-toggle="tab">Eastern Development Region</a></li>
						<li role="presentation"><a href="#central" aria-controls="profile" role="tab" data-toggle="tab"> Central Development Region</a></li>
						<li role="presentation"><a href="#western" aria-controls="messages" role="tab" data-toggle="tab"> Western Development Region</a></li>
						<li role="presentation"><a href="#mid" aria-controls="settings" role="tab" data-toggle="tab"> Mid Western Development Region</a></li>
						<li role="presentation"><a href="#far" aria-controls="settings" role="tab" data-toggle="tab"> Far Western Development Region</a></li>
					</ul>

						<!-- Tab panes -->
						<div class="tab-content">
 <div role="tabpanel" class="tab-pane active" id="eastern">
                                          <div class="row">
        <div class="span5">
          <table id="easttab" class="table table-striped table-bordered" cellspacing="0" width="100%">
                  <thead>
                  <tr>
                      <th>Agrovet Name</th>
                      <th>Owner Name</th>
                      <th>Phone</th>
                      <th>Address</th>
					            <th>District</th>
                      <th>Date registered</th>                                        
                      <th>Action</th>                                        
                  </tr>
              </thead>   
              <tbody>
			  <?php if(sizeof($easts)>0)
			  { 
			  foreach($easts as $east)
			   {?>
                <tr>
                    <td> <?php echo $east->agrovet_name; ?></td>
                    <td> <?php echo $east->agrovet_owner; ?></td>
                    <td> <?php echo $east->phone; ?></td>
                    <td> <?php echo $east->address; ?></td>                    
					         <td> <?php echo $east->district; ?></td>
                    <td> <?php echo $east->created_on; ?></td>  
				<td> <a href="<?php echo base_url() . "admin/agrovet/viewAgrovetProfile/" . $east->agrovet_id; ?>"  class="btn viewButton"> View Profile</a></td>  
                </tr>  
				<?php }
					} else { ?>	
					<tr> 
						<td colspan="7"> No Records Found</td>
					</tr> <?php } ?>
              </tbody>
            </table>
            </div>
    </div>
  </div>
  <!--Tab2 -->
  <div role="tabpanel" class="tab-pane" id="central"><div class="row">
        <div class="span5">
          <table id="centraltab" class="table table-striped table-bordered" cellspacing="0" width="100%">
                  <thead>
                  <tr>
                      <th>Agrovet Name</th>
                      <th>Owner Name</th>
                      <th>Phone</th>
                      <th>Address</th>
					            <th>District</th>
                      <th>Date registered</th>                                        
                      <th>Action</th>                                        
                  </tr>
              </thead>   
              <tbody>
			  <?php if(sizeof($centrals)>0)
			  { 
			  foreach($centrals as $central)
			   {?>
                <tr>
                    <td> <?php echo $central->agrovet_name; ?></td>
                    <td> <?php echo $central->agrovet_owner; ?></td>
                    <td> <?php echo $central->phone; ?></td>
                    <td> <?php echo $central->address; ?></td>
					<td> <?php echo $central->district; ?></td>
                    <td> <?php echo $central->created_on; ?></td>  
					<td> <a href="<?php echo base_url() . "admin/agrovet/viewAgrovetProfile/" . $central->agrovet_id; ?>"  class="btn viewButton"> View Profile</a></td>  

                </tr>  
				<?php }
					} else { ?>	
					<tr> 
						<td colspan="7"> No Records Found</td>
					</tr> <?php } ?>
              </tbody>
            </table>
            </div>
            
<div class="modal small hide fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Delete Confirmation</h3>
    </div>
    <div class="modal-body">
        <p class="error-text">Are you sure you want to delete the user?</p>
    </div>
    <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
        <button class="btn btn-danger" data-dismiss="modal">Delete</button>
    </div>
</div>
    </div>
    </div>
  <!--Tab3-->
  <div role="tabpanel" class="tab-pane" id="western"><div class="row">
        <div class="span5">
        <form name="form1" method="post">
          <table id="westtab" class="table table-striped table-bordered" cellspacing="0" width="100%">
                  <thead>
                  <tr>
                      <th>Agrovet Name</th>
                      <th>Owner Name</th>
                      <th>Phone</th>
                      <th>Address</th>
                      <th>District</th>
                      <th>Date registered</th>                                        
					            <th>Action</th>
                  </tr>
              </thead>   
              <tbody>
			  <?php if(sizeof($wests)>0)
			  { 
			  foreach($wests as $west)
			   {?>
                <tr>
                    <td> <?php echo $west->agrovet_name; ?></td>
                    <td> <?php echo $west->agrovet_owner; ?></td>
                    <td> <?php echo $west->phone; ?></td>
                    <td> <?php echo $west->address; ?></td>
					          <td> <?php echo $west->district; ?></td>
                    <td> <?php echo $west->created_on; ?></td> 
					          <td> <a href="<?php echo base_url() . "admin/agrovet/viewAgrovetProfile/" . $west->agrovet_id; ?>"  class="btn viewButton"> View Profile</a> <a href="#"><i class="fa fa-pencil-square-o blue icon"></i></a><a href="#"><i class="fa icon red fa-trash icon"></i></a></td>  
					
                </tr>  
				<?php }
					} else { ?>	
					<tr> 
						<td colspan="7"> No Records Found</td>
					</tr> <?php } ?>
              </tbody>
            </table>
            </form>
            </div>
    </div> 
    </div>
      <!--Tab4 -->
 <div role="tabpanel" class="tab-pane" id="mid"><div class="row">
        <div class="span5">
          <table id="midwesttab" class="table table-striped table-bordered" cellspacing="0" width="100%">
                  <thead>
                  <tr>
                      <th>Agrovet Name</th>
                      <th>Owner Name</th>
                      <th>Phone</th>
                      <th>Address</th>
                      <th>District</th>
                      <th>Date registered</th>                                        
					            <th>Action</th>
                  </tr>
              </thead>   
              <tbody>
			  <?php if(sizeof($midwests)>0)
			  { 
			  foreach($midwests as $midwest)
			   {?>
                <tr>
                    <td> <?php echo $midwest->agrovet_name; ?></td>
                    <td> <?php echo $midwest->agrovet_owner;?></td>
                    <td> <?php echo $midwest->phone; ?></td>
                    <td> <?php echo $midwest->address; ?></td>
				          	<td> <?php echo $midwest->district; ?></td>
                    <td> <?php echo $midwest->created_on; ?></td>  
					          <td> <a href="<?php echo base_url() . "admin/agrovet/viewAgrovetProfile/" . $midwest->agrovet_id; ?>" class="btn viewButton"> View Profile</a></td>  

                </tr>  
				<?php }
					} else { ?>	
					<tr> 
						<td colspan="7"> No Records Found</td>
					</tr> <?php } ?>
              </tbody>
            </table>
            </div>
                   </div>
</div>
         <!--Tab5 -->                          
  <div role="tabpanel" class="tab-pane" id="far"><div class="row">
        <div class="span5">
          <table id="fartab" class="table table-striped table-bordered" cellspacing="0" width="100%">
                  <thead>
                  <tr>
                      <th>Agrovet Name</th>
                      <th>Owner Name</th>
                      <th>Phone</th>
                      <th>Address</th>
                      <th>District</th>
                      <th>Date registered</th>                                        
					            <th>Action</th>
                  </tr>
              </thead>   
              <tbody>
			  <?php if(sizeof($farwests)>0)
			  { 
			  foreach($farwests as $farwest)
			   {?>
                <tr>
                    <td> <?php echo $farwest->agrovet_name; ?></td>
                    <td> <?php echo $farwest->agrovet_owner; ?></td>
                    <td> <?php echo $farwest->phone; ?></td>
                    <td> <?php echo $farwest->address; ?></td>                    
					          <td> <?php echo $farwest->district; ?></td>
                    <td> <?php echo $farwest->created_on; ?></td>  
					          <td> <a href="<?php echo base_url() . "admin/agrovet/viewAgrovetProfile/" . $farwest->agrovet_id; ?>"  class="btn viewButton"> View Profile</a></td>  
                </tr>  
				<?php }
					} else { ?>	
					<tr> 
						<td colspan="7"> No Records Found</td>
					</tr> <?php } ?>
              </tbody>
            </table>
            </div>
    </div> 
    </div>
    </div>
    </div>
    </div>
<script src="//code.jquery.com/jquery-1.12.0.min.js" type="text/javascript"></script>
<script src="https://cdn.datatables.net/1.10.10/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="https://cdn.datatables.net/1.10.10/js/dataTables.bootstrap.min.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function() {
    $('#easttab').DataTable();
} );
</script>
<script type="text/javascript">
$(document).ready(function() {
    $('#centraltab').DataTable();
} );
</script>
<script type="text/javascript">
$(document).ready(function() {
    $('#westtab').DataTable();
} );
</script>
<script type="text/javascript">
$(document).ready(function() {
    $('#midwesttab').DataTable();
} );
</script>
<script type="text/javascript">
$(document).ready(function() {
    $('#fartab').DataTable();
} );
</script>