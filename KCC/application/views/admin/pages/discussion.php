<script type="text/javascript" src="<?php echo base_url();?>assets/ckeditor/ckeditor.js"></script>
        <div class="row">
            <div class="col-sm-8 col-lg-8">
                <h1 class="h1 green">
                    Discussion  <small style="color:#358CCE;">Feel Free to Post Your Doubt </small></h1>
            </div>
               <div class="col-sm-4 col-lg-4">
                <h1 class="h1 green">
                    Recent  Posts <small style="color:#358CCE;"></small></h1>
              </div>
        </div>
    
  
    <div class="row">
    <?php echo $this->session->flashdata('discussionsuccess');?>
    <?php echo $this->session->flashdata('discussionfail');?>
        <div class="col-md-8">
            <div class="well well-sm">
                <div class="row">
                <form  name="discussion" method="post" action="<?php echo base_url();?>admin/discussion/postdiscussion">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="title">
                                Post Title</label>
                            <input type="text" class="form-control" name="title" id="title" placeholder="Enter Discussion Title Here" required="required" />
                        </div>
                         <div class="form-group">
                            <label for="date">
                               Date</label>
                            <input type="date" class="form-control" name="date" id="date" placeholder="MM/DD/YYYY" required="required" />
                        </div>
                        <div class="form-group">
                            <label for="date">
                               Content</label>
                               <textarea name="postcontent" id="postcontent" class="ckeditor"></textarea>

                        </div>
                 
                    <div class="col-md-12">
                        <input type="submit" class="btn btn-primary pull-right" value="Post Topic" name="post" id="post">      
                    </div>
                </div>
                </form>
                </div>
            </div>
         </div>



<div class="col-md-4 border-left height-500px">
<?php  foreach ($posts as $post) {  ?>

  <!--topic starts-->
<div class="topic">
  <div class="panel-heading height-75px ">
                    <img class="[ img-circle pull-left ]" src="<?php echo base_url();?>image/users/<?php echo $post->image;?>" alt="<?php echo $post->image;?>" height="45px" width="45px" />
                    <h3 class="name"><?php echo $post->username;?></h3>
                    <h5><span>Shared Publicly</span> - <span><?php echo $post->date;?></span> </h5>
                </div>
                <div class="panel-body">
                    <p> <?php echo $post->content;?>  </p>
                </div>
                 <div class="answer_section">
                   <div class="replies">
                       <h4 class="  green">Replies</h4>
                       <?php
                       $CI=& get_instance();
                       $CI->load->model('kishan');
                       $replies=$CI->kishan->getReplies($post->discussion_id);
                       ?>
                       <?php foreach ($replies as $reply) { ?>
                         <div class="col-md-12 ">
                                <span class"who-replies"><b><?php echo $reply->username;?></b></span>
                                <p><?php echo $reply->answer;?></p>
                        </div>
                        <?php } ?>
                     </div>
                    <div class="comment">
                     <div class="col-md-2">
                       <img class="img-circle" src="<?php echo base_url()?>/image/users/<?php echo $this->session->userdata('image');?>" alt="<?php echo $this->session->userdata('image');?>" height="45px" width="45px" />
                        </div>
                         <div class="col-md-10">
                            <?php echo $this->session->flashdata('commentsuccess');?>
                            <?php echo $this->session->flashdata('commentfail');?>
                         <form name="replies" id="replies" method="post" action="<?php echo base_url().'admin/discussion/postComment/'.$post->discussion_id?>">
                        <textarea rows="2" cols="28" name="comment" id="comment" placeholder="Add your comment Here" required="required"></textarea>
                        </div>
                        <input type="submit" class=" btn btn-success post-comment-btn" value="Post comment">                        <button type="reset" class=" btn btn-default ">Clear</button>
                         </form>
                    </div>
                    <div class="clearfix"></div>
                </div>
  </div>
  <?php
  }?>
  <!--topic Ends-->
  </div>
</div>
