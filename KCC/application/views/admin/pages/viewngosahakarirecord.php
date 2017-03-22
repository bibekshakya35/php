<div class="container-fluid">
<?php 
mysql_connect("localhost","root","");
mysql_select_db('dwassignment'); 
?>
 
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                          <?php echo $pagetitle;?>
                        </h1>
                         
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                  <div class="container">
    <div class="row">
        <div class="span5">
        <form name="form1" method="post">
            <table class="table table-striped table-condensed">
                  <thead>
                  <tr>
                  
                      <th>Username</th>
                       <th>Full Name</th>
                        <th>Email</th>
                         <th>User Group</th>
                      <th>Date registered</th>
                       <th>Status</th>                                          
                        <th>Action</th>  
                  </tr>
              </thead>   
              <tbody>
              <?php
              $query= "SELECT * FROM userdescription";
  $query_run =mysql_query($query);
  while($data= mysql_fetch_array($query_run)){
    //$full_name= strtolower($data['first_name']).' '.strtolower($data['middle_name']).' '.strtolower($data['last_name']);
    $first_name = $data['first_name'];  
    $middle_name= $data['middle_name'];
        $last_name=$data['last_name'];
        $gender=$data['gender'];
        $email=$data['e_mail'];
        $user_name=$data['username'];
        $userid= $data['id'];  
        $status= $data['status'];            
 ?>
                <tr>
                   
                    <td> <?php echo $user_name ?></td>
                    <td><?php echo $first_name ?></td>
                    <td><?php echo $email ?> </td>
                    <td><?php echo $gender ?></td>
                    <td><?php echo $userid ?></td> 

                    <td> <?php
 switch ($status) {
    case "1":
        echo "<span class='label label-success'>Active</span> ";
        break;
     case "0":
        echo "<span class='label label label-warning'>Inactive</span>";
        break;
    default:
        echo "<span class='label label-success'>Active</span>";
}
?>   
                    </td>  
                       <td>
                   <button class="button" id="edit">  Edit  </button>
                   <button class="button"  id="delete">  Delete  </button>
             </td>    
  <?php     
 }
  ?> 
                </tr>
                   
                                                    
              </tbody>
            </table>
            <span class="pull-right"><b><!-- count data showing --><strong>Total:</strong> 1 - 6 of 6 </b><a href="#" class="nextButton "><i class="fa fa-arrow-circle-right"></i></a></span>
            </form>
            </div>
    </div>
</div>      
                </div>
                <!-- /.row --> 

            </div>
            <!-- /.container-fluid -->