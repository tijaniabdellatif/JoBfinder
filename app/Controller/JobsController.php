<?php

/**
 *  we must be specefic in our naming in the controllers and views
 * naming the JobsController
 * 
 */

class JobsController extends AppController{

public $name = 'Jobs';

/**
 *  function for the url to go to index
 * 
 */

 public function index(){

    //set query Options
    $options = array(
       'order' => array('Job.created' => 'asc')
    );
   
    /* jobs will be a database Query */
  $jobs = $this->Job->find('all',$options);

    $this->set('jobs', $jobs);

    //categories

      $options = array(

         'order' => array('Category.name' => 'asc')
      );

      $categories = $this->Job->Category->find('all', $options);

      $this->set('categories', $categories);
 }


 /**
  * browse method
  */

  public function browse($category = null){

      //init conditions array
      $conditions = array();
      
   //check if the button submit is checked
   if($this->request->is('post')){

           //die("is post");

           if(!empty($this->request->data('keywords'))) //$_POST[]
           {


           }
     }


 $options = array(

      'order' => array('Category.name' => 'asc')
 );

      $categories = $this->Job->Category->find('all', $options);

   
      //check if the url take a categroy
      if($category != null){
         //match categories

         $conditions[] = array(
            
            'Job.category_id LIKE' => "%" . $category . "%"

         );
         
      }

      $options = array(
        
         'order' => array('Job.created' => 'desc'),
         'conditions' => $conditions,
         'limit' => 8

      );

      /* jobs will be a database Query */
      $jobs = $this->Job->find('all', $options);

      $this->set('jobs', $jobs);

      $this->set('categories', $categories);

  }

}