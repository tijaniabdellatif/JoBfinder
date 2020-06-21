 <?php echo $this->element('search'); ?>

 <br />


 <h3>Les derniers emplois</h3>
 <ul id="listings">
     <?php foreach ($jobs as $job) : ?>
         <li>
             <div class="type">
                 <span style="background : <?php echo $job['Type']['color']; ?>"><?php echo $job['Type']['name'] ?></span>
             </div>
             <div class="description">
                 <h5><strong><?php echo $job['Job']['title'] ?> (<?php echo $job['Job']['city']  ?>, <?php echo $job['Job']['state']  ?>)</h5></strong>
                 <span id="list_date">

                     <!--Time helper-->
                     <?php echo $this->Time->format('F j H:i e A', $job['Job']['created']); ?>

                 </span>

                 <?php echo $this->Text->truncate($job['Job']['description'], 250, array('ellipsis' => '...', 'exact' => false)); ?>
                 <!--HTML helper for readmore-->
                 <?php echo $this->Html->link('Voir plus', array('controller' => 'jobs', 'action' => 'view', $job['Job']['id'])) ?>
             </div>
         </li>

     <?php endforeach; ?>
 </ul>