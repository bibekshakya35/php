<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of 001_create_session
 *
 * @author Bibek Shakya
 */
class Migration_create_session extends CI_Migration{
    public function up(){
        $field=array(
            'session_id VARCHAR(40) DEFAULT \'0\' NOT NULL',
            'ip_address VARCHAR(45) DEFAULT \'0\' NOT NULL',
            'user_agent VARCHAR(120) NOT NULL',
            'last_activity INT(10) unsigned DEFAULT 0 NOT NULL',
            'user_data text NOT NULL'
        );
        $this->dbforge->add_field($fields);
        $this->dbforge->add_key('session_id',TRUE);
        $this->dbforge->create_table('ci_session');
        $this->dbforge->query('ALTER TABLE "ci_session" ADD KEY "last_activity_idx" ("last_activity")');
        
        
    }
    public function down(){
        $this->dbforge->drop_table('ci_session');
    }
    
    //put your code here
}
