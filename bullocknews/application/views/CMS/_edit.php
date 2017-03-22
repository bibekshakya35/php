<body><div class="modal-header">
        <h3><?php echo empty($user->id)?'ADD a new User':"EDIT";?></h3>
    <p>Please log in using your crediantial</p>
    
</div>
<div class="modal-body">
    <?php echo '<pre>'.print_r($this->session->userdata,TRUE)."<pre>";?>;
    <?php echo validation_errors();?>
    <?php echo form_open();?>
    <table class="table">
        <tr>
            <td>Name</td>
            <td><?php echo form_input("name",set_value('name',$user->name));?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><?php echo form_input("email",set_value('email',$user->email));?></td>
        </tr>
         <tr>
             <td>Password</td>
             <td><?php echo form_input("password");?></td>
        </tr>
         <tr>
            <td>Confirm Password</td>
            <td><?php echo form_input("password_confirm");?></td>
        </tr>
         
         <tr>
            <td></td>
            <td><?php echo form_submit("submit",'save','class="btn btn-primary"');?></td>
        </tr>
    </table>
    <?php echo form_close();?>
</div></body></html>