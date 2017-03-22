<div> <!-- Page starts -->
<!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"> Farmer Results </h1>
        </div>
    </div>
<!-- /.row -->
    <div class="row">
        <div class="container">
            <div class="row">


                        <div class="span5">
           <table class="table">
        <thead>
          <tr class="info">
            <th>S.No.</th>
            <th>Farmer Name</th>
            <th>Phone</th>
            <th>District</th> 
            <th>Crop</th>
            <th>Problem</th>
            <th>Product In Use</th>
             <th>Action</th>
          </tr>
        </thead>
        <?php 
        $i=1;
        foreach($searchresults as $farmer)
         {
          
        ?>
        <tbody>
          <tr>
            <td><?php echo $i ?></td>
            <td><?php echo $farmer->fname ?></td>
            <td><?php echo $farmer->phone ?></td>
            <td><?php echo $farmer->district?></td>
            <td><?php echo $farmer->crop ?></td>
            <td><?php echo $farmer->problem_name ?></td>
            <td><?php echo $farmer->productinuse ?></td>
            <td>
                <form method="POST" action="<?php echo base_url() . "admin/farmer/farmerprofile/" . $farmer->farmer_id; ?>">
                <input type="submit" class="btn btn-primary btn-sm" value="View Profile">
                </form>
                <form method="POST" action="<?php echo base_url() . "admin/farmer/deletefarmer/" . $farmer->farmer_id; ?>">
                <input type="submit" value="Delete">
                </form> </td>
              </tr>   
        </tbody>
      <?php $i++; } ?>
</table>
            <span class="pull-right"><b><!-- count data showing --><strong>Total:</strong> 1 - 6 of 6 </b><a href="#" class="nextButton "><i class="fa fa-arrow-circle-right"></i></a></span>
            </div>

            </div>
        </div>      
    </div>
<!-- /.row -->  
</div> <!-- Page end -->

