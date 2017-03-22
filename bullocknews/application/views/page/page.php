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
                    <h1>Article Management</h1>
                    <br>
                    <br>
                    <div>
                        <?php echo anchor("pagecontroller/edit","<i class='glyphicon glyphicon-arrow-up text-danger lead'><i>  Add A new Article");?>
                    </div>
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>AID</th>
                                <th>HEADING</th>
                                <th>SHORT STORY</th>
                                <th>EDIT</th>
                                <th>DELETE</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(count($pageData)): foreach ($pageData as $page):?>
                            <tr>
                                <td><?php echo anchor("pagecontroller/edit/".$page->AID,$page->AID,"class='text-success'");?></td>
                                <td><?php echo anchor("pagecontroller/edit/".$page->AID,$page->heading,"class='text-success'");?></td>
                                <td><?php echo anchor("pagecontroller/edit/".$page->AID,$page->shortstory,"class='text-success'");?></td>
                                <td><?php echo btn_edit("pagecontroller/edit/".$page->AID);?></td>
                                <td><?php echo btn_delete("pagecontroller/delete/".$page->AID);?></td>
                            </tr>
                            <?php endforeach;?>
                            <?php else:?>
                            <tr>
                                <td colspan="5">We could Find Any Article</td>
                            </tr>
                            <?php endif;?>
                        </tbody>
                        
                    </table>
                </section>
                
            </div>
            <div class="col-lg-3">
            <section>
                <a href="#" style="color: blue;font-size: 20px;padding: 20px;"><i class="glyphicon glyphicon-user">  junuagrawal@gmail.com</i></a>
                <br>
                <a href="<?php echo site_url("bullocknews/cms");?>" style="color: blue;font-size: 20px;padding: 20px;"><i class="glyphicon glyphicon-arrow-left"></i>Back</a>
            </section>
        </div>
        </div>
    </div>
</body>