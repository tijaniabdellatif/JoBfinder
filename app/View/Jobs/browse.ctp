 <?php echo $this->element('search'); ?>

 <div id="category_block">

     <ul>

         <?php foreach ($categories as $category) : ?>

             <li><?php echo $this->Html->link($category['Category']['name'], array('action' => 'browse', $category['Category']['id'])); ?></li>

         <?php endforeach; ?>

     </ul>
 </div>
 <div class="clearfix"></div>
 <br>

 <h3></h3>
 <?php if ($jobs) : ?>
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

                     <br /> <br /><?php echo $this->Text->truncate($job['Job']['description'], 250, array('ellipsis' => '...', 'exact' => false)); ?>
                     <!--HTML helper for readmore-->
                     <?php echo $this->Html->link('Voir plus', array('controller' => 'jobs', 'action' => 'view', $job['Job']['id'])) ?>
                 </div>
             </li>

         <?php endforeach; ?>
     </ul>

 <?php else : ?>

     <br /> <br /> <br />
     Aucun Emploi pour l'instant : <a href="<?php echo $this->webroot; ?>"> Retour Home</a></li>


 <?php endif; ?>