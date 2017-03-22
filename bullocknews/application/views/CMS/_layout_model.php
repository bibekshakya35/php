<body>

<nav class="navbar navbar-static-top navbar-inverse">
        <div class="navbar-header">
            
            <h4 class="brand" style="margin:0.7em;" >Bullock News</h4>
        </div>
        <div>
            <ul class="nav navbar-nav">
                <li><a href="<?php echo site_url("bullocknews/cms");?>" class="active">CMS User Listing</a></li>
                
               
                <li><a href="<?php echo site_url('pagecontroller/index'); ?>">page</a></li>
               
               
            </ul>
        </div>
        
    </nav>
    <div class="container">
        <div class="row">
        <div class="col-md-9">
          <section>
    <h2>User</h2>
    <?php echo anchor("bullocknews/edit","<i class='glyphicon glyphicon-plus text-primary'></i>  Add a user");?>
    <table class="table table-striped"> 
        <thead><tr>
                <th>Email</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr></thead>
        <tbody>
            <?php if(count($userData)): foreach ($userData as $user):?>
            
            <tr>
                <td><?php echo anchor("bullocknews/edit/".$user->id,$user->email,"class='text-primary'");?></td>
                <td><?php echo btn_edit("bullocknews/edit/".$user->id);?></td>
                <td><?php echo btn_delete("bullocknews/delete/".$user->id);?></td>
        
            </tr>
            <?php endforeach;?>
            <?php else:?>
            <tr>
                <td colspan="3">We could Not Found Any</td>
            </tr>
            <?php endif;?>
        </tbody></table>
    </section>
        </div>
        <div class="col-lg-3">
            <section>
                <a href="#" style="color: blue;font-size: 20px;padding: 20px;"><i class="glyphicon glyphicon-user">  junuagrawal@gmail.com</i></a>
                <br>
                <a href="<?php echo site_url("bullocknews/logout");?>" style="color: blue;font-size: 20px;padding: 20px;"><i class="glyphicon glyphicon-log-out">   Logout</i></a>
            </section>
        </div>
        </div>
    </div>

    
    
</body>