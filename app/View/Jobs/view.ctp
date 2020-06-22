<h3><?php echo $job['Job']['title'];  ?></h3>
<ul>
    <li><strong>Location:</strong> <?php echo $job['Job']['city'];  ?>, <?php echo $job['Job']['state'];  ?></li>
    <li><strong>Type:</strong> <?php echo $job['Type']['name'];  ?></li>
    <li><strong>Description:</strong>
        <?php echo $job['Job']['description'];  ?>
    </li>
    <li><strong>Contact Email:</strong> <a href="<?php echo $job['Job']['contact_email'];  ?>" target="_top">employer@somecompany.com</a></li>
</ul>
<p><a href="<?php $this->webroot; ?>/cake/browse">Offres d'emploi</a></p>