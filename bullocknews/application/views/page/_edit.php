<body><div class="modal-header">
        <h3><?php echo empty($pageData->AID)?'ADD a new User':"EDIT";?></h3>
  
    
</div>
<div class="modal-body">
    <?php echo '<pre>'.print_r($this->session->userdata,TRUE)."<pre>";?>;
    <?php echo validation_errors();?>
    <?php echo form_open();?>
    <table class="table">
        <tr>
            <td>Heading</td>
            <td><?php echo form_input("heading",set_value('heading',$pageData->heading),"class='form-control'");?></td>
        </tr>
        <tr>
            <td>Type</td>
            <td><?php echo form_input("type",set_value('type',$pageData->type),"class='form-control'");?></td>
        </tr>
         <tr>
             <td>Keyword</td>
             <td><?php echo form_input("keyword",set_value('keyword',$pageData->keyword),"class='form-control'");?></td>
        </tr>
         <tr>
            <td>Author</td>
            <td><?php echo form_input("author",$pageData->author,"class='form-control'");?></td>
        </tr>
        <tr>
            <td>Short story</td>
            <td><?php echo form_textarea("shortstory",$pageData->shortstory,"class='form-control'");?></td>
        </tr>
         <tr>
            <td>Full Story</td>
            <td><?php echo form_textarea("fullstory",$pageData->fullstory,"class='form-control'");?></td>
        </tr>
        <tr>
            <td>Sub Full Story One</td>
            <td><?php echo form_textarea("subfullstoryone",$pageData->subfullstoryone,"class='form-control'");?></td>
        </tr>
        <tr>
            <td>Sub Full Story Two</td>
            <td><?php echo form_textarea("subfullstorytwo",$pageData->subfullstorytwo,"class='form-control'");?></td>
        </tr>
        <tr>
            <td>Image</td>
            <td><?php echo form_input("image",$pageData->image);?></td>
        </tr>
        <tr>
            <td>SubImage</td>
            <td><?php echo form_input("subimage",$pageData->subimage);?></td>
        </tr>
        <tr>
            <td>Date</td>
            <td><?php echo form_input("date",$pageData->date);?></td>
        </tr>
         <tr>
            <td>Status</td>
            <td><?php echo form_input("status",$pageData->status);?></td>
        </tr>
         <tr>
             
            <td></td>
            <td><?php echo form_submit("submit",'save','class="btn btn-primary"');?></td>
        </tr>
    </table>
    <?php echo form_close();?>
</div></body></html>