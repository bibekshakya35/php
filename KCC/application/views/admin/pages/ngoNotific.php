<!DOCTYPE html>
<html>
<head>
	<title>Ngo/Sahakari Notification</title>
</head>
<body>

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
                    </tr>
                </thead>
               <tbody>
                <?php 
                $i=1;
                foreach ($orgs as $ngo) {
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
              </tr> 

              <?php $i++; }?>                       
            </tbody>
          </table>



          <table id="examples" class="table table-striped table-bordered" cellspacing="0" width="100%">
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
                foreach ($edits as $ngo) {
                ?>
                <tr>
                  <td><?php echo $i; ?></td>
                  <td><?php echo $ngo->ngo_sahakari_name; ?></td>
                  <td><?php echo $ngo->email;?></td>
                  <td><?php echo $ngo->address;?></td>
                  <td><?php echo $ngo->phone;?> </td>
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
                        <form name="editngo" id="editngo" method="post" action="<?php echo base_url()."admin/ngo/editApprove/".$ngo->ngo_sahakari_id?>">
                            <input type="hidden" name="id" id="id" value="<?php $ngo->ngo_sahakari_id?>"  />
                            <input type="submit" name=" edieditt" id="edit" value="Approve"  />
                        </form>
                </td>    
              </tr> 

              <?php $i++; }?>                       
            </tbody>
          </table>
</body>
</html>