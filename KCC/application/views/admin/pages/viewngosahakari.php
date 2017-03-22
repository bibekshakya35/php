
<!-- <link href="<?php echo base_url();?>css/datatable.min.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url();?>css/datatable.bootstrap.min.css" rel="stylesheet" type="text/css"> -->
<div class="container-fluid">
<!-- Page Heading -->
  <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">View NGO/Sahakri</h1>
      </div>
  </div>
<!-- /.row -->

  <div class="row">
    <div class="container">
      <div class="row">
        <?php echo $this->session->flashdata('useredit');?>
        <?php echo $this->session->flashdata('usereditfail');?>
        <div class="span5">
          <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
              <thead>
                    <tr>
                        <th>ID</th>
                        <th>Ngo/Sahakari Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Created On</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
               <tbody>
                <?php 
                $i=1;
                foreach ($ngos as $ngo) {
                ?>
                <tr>
                  <td><?php echo $i; ?></td>
                  <td><?php echo $ngo->ngo_sahakari_name; ?></td>
                  <td><?php echo $ngo->email;?></td>
                  <td><?php echo $ngo->phone;?> </td>
                  <td><?php echo $ngo->address;?></td>
                  <td><?php echo $ngo->created_on;?></td> 
                  <td><?php switch ($ngo->status) {
                        case "1":
                        echo "<span class='label label-success'>Active</span> ";
                        break;
                        case "2":
                        echo "<span class='label label label-warning'>Inactive</span>";
                        break;
                        default:
                        echo "<span class='label label-success'>Active</span>";
                        } ?>   
                </td>  
                <td>
                        <form name="editngo" id="editngo" method="post" action="<?php echo base_url()."admin/ngo/edit/".$ngo->ngo_sahakari_id?>">
                            <input type="hidden" name="id" id="id" value="<?php $ngo->ngo_sahakari_id?>"  />
                            <input type="submit" name=" edieditt" id="edit" value="Edit"  />
                        </form>
                        <form name="deletengo" id="deletengo" method="post" action="<?php echo base_url()."admin/ngo/deleteNgo/".$ngo->ngo_sahakari_id?>">
                           <button class="button" name=" " id="delete">  Delete  </button>
                        </form>
                </td>    
              </tr> 

              <?php $i++; }?>                       
            </tbody>
          </table>
        </div>
      </div>
    </div>      
  </div>
<!-- /.row --> 
</div>
  <!-- /.container-fluid -->
<script src="//code.jquery.com/jquery-1.12.0.min.js" type="text/javascript"></script>
<script src="https://cdn.datatables.net/1.10.10/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="https://cdn.datatables.net/1.10.10/js/dataTables.bootstrap.min.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
