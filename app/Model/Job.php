<?php 

class Job extends AppModel{
   
    public $name = 'Job';

    /**
     * 
     *  association  in Jobs
     */
     public $belongsTo = array('Type','Category');

}



