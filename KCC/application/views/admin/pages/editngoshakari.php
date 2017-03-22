<div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                         <i class="fa fa-user"></i> Edit NGO/Sahakari
                        </h1>
                    </div>
                </div>
                <!-- /.row -->
<?php foreach ($nss as $ns) 
  { ?>
  <div class="row">
    <div class="col-sm-4 col-md-offset-4"> 
        <h3>Edit NGO/Sahakari</h3>
        <form class="form-horizontal" id="editngo" method="post" action="<?php echo base_url();?>admin/ngo/editNgo">
            <fieldset>
        <span class="title"> <i class="fa fa-home"></i>NGO/Sahakari Profile</span>
                <!-- Text input-->
                <div class="form-group"> 
                    <div class="col-md-12">
                        <input id="name" name="name" placeholder="NGO/Sahakari Name" class="form-control input-md" value="<?php echo $ns->ngo_sahakari_name;?>" type="text">
                    </div>
                </div>
                <div class="form-group"> 
                    <div class="col-md-12">
                        <input id="email" name="email" placeholder="Email" class="form-control input-md" value="<?php echo $ns->email;?>" type="email">
                    </div>
                </div>
                  <div class="form-group"> 
                    <div class="col-md-12">
                        <input id="phone" name="phone" placeholder="Phone Number" class="form-control input-md" value="<?php echo $ns->phone;?>" type="text">
                    </div>
                </div>
                <input type="hidden" id="date" name="date" value="<?php echo $ns->created_on;?>">
                <div class="form-group"> 
                    <div class="col-md-12">
                        <input id="address" name="address" placeholder="Address" class="form-control input-md" value="<?php echo $ns->address;?>" type="text">
                    </div>
                </div>
                <div class="form-group"> 
                    <div class="col-md-12 " >
                            <select name="status" class="form-control input-md">
                                <?php if($ns->status=='1')
                                { ?>
                                <option value='1'>Active</option>
                                <option value='2'>Inactive</option>
                                <?php }else{?>
                                <option value='2'>Inactive</option>
                                <option value='1'>Active</option>
                               <?php }?>
                            </select>
                    </div>
                </div>
                 <input type="hidden" name="id" id="id" value="<?php echo $ns->ngo_sahakari_id;?>" type="text">
                <div class="form-group"> 
                    <div class="col-md-12">
                        <button id="register" name="register" class="btn adduserbtn pull-right" type="submit">Update </button>
                    </div>
                </div>

            </fieldset>
        </form>

    </div>          
</div>
<?php } ?>             <!-- /.row --> 

            </div>
            <!-- /.container-fluid -->
<script type="text/javascript" src="<?php echo base_url()?>js/jQuery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>js/jquery.validate.min.js"></script>
<script type="text/javascript">
     $("#editngo").validate({
      rules: {
        name: {
            required:true,
            minlength:5,
              },
        email: {
            required: true,
            email:true,
                },
        phone: "required",
        address: "required",

      },
      messages: {
        name: {
            required:"This field is required",
            minlength:"Enter minimum 5 letters",
            name:"Enter enter letters only",
            },
        email: {
            required:"This field is required",
            email:" Please enter valid email."
        },
        phone: "This field is required",
        address: "This field is required",
      }
    });
     $('#name').keypress(function (e) {
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