<section>
    <h2>User</h2>
    <?php echo anchor("bullocknews/edit","<i class='icon-plus'></i>Add a user");?>
    <table class="table table-striped"> 
        <thead><tr>
                <th>Email</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr></thead>
        <tbody>
            <?php if(count($users)): foreach ($users as $user):?>
            <?php endforeach;?>
            <tr>
                <td><?php echo anchor("bullocknews/edit/".$user->id,$user->email);?></td>
                <td><?php echo btn_edit("bullocknews/edit/".$user->id);?></td>
                <td><?php echo btn_delete("bullocknews/delete/".$user->id);?></td>
            </tr>
            <?php else:?>
            <tr>
                <td colspan="3">We could Not Found Any</td>
            </tr>
            <?php endif;?>
        </tbody></table>
    </section>