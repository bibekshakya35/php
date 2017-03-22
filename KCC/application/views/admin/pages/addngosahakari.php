<div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                         <i class="fa fa-user"></i> Add NGO/Sahakri
                        </h1>
                        
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                   <div class="col-sm-4 col-md-offset-4"> 
<h3>Add New NGO/Sahakri</h3>
        <form class="form-horizontal" id="addngo" method="post" action="<?php echo base_url();?>admin/ngo/addNewNgo">
            <fieldset>
<span class="title"> <i class="fa fa-home"></i>Add New NGO/Sahakari</span>
                <!-- Text input-->
                <div class="form-group"> 
                    <div class="col-md-12">
                        <input id="name" name="name" placeholder="NGO/Sahakari Name" class="form-control input-md" type="text">
                    </div>
                </div>
                <div class="form-group"> 
                    <div class="col-md-12">
                        <input id="email" name="email" placeholder="Email" class="form-control input-md"  type="email">
                    </div>
                </div>
                  <div class="form-group"> 
                    <div class="col-md-12">
                        <input id="phone" name="phone" placeholder="Phone Number" class="form-control input-md"  type="text">
                    </div>
                </div>
                <div class="form-group"> 
                    <div class="col-md-12">
                        <input id="address" name="address" placeholder="Address" class="form-control input-md"  type="text">
                    </div>
                </div>
                <div class="form-group"> 
                    <div class="col-md-12 " >
                            <select name="status" class="form-control input-md">
                                <option value='1'>Active</option>
                                <option value='0'>Inactive</option>
                            </select>
                    </div>
                </div>
                 
                <div class="form-group"> 
                    <div class="col-md-12">
                        <button id="register" name="register" class="btn adduserbtn pull-right" type="submit">Add NGO</button>
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
     $("#addngo").validate({
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