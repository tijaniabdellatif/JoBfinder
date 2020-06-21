<!DOCTYPE html>
<html>

<head>
    <?php echo $this->Html->charset(); ?>
    <title>
        Mon Emploi  Bienvenue 
    </title>
    <?php
    echo $this->Html->meta('icon');

    echo $this->Html->css('kickstart');
    echo $this->Html->css('style');
    echo $this->Html->script('jquery');
    echo $this->Html->script('kickstart');

    echo $this->fetch('meta');
    echo $this->fetch('css');
    echo $this->fetch('script');
    ?>
</head>

<body>
    <div id="container" class="grid">
        <header>
            <div class="col_6 column">
                <h1><a href="<?php echo $this->webroot; ?>"><strong>Mon </strong> Emploi</a></h1>
            </div>
            <div class="col_6 column right">
                <form id="add_job_link" action="<?php $this->webroot; ?>jobs/add">
                    <button class="large red"><i class="icon-plus"></i> Ajoutez un Emploi</button>
                </form>
            </div>
        </header>

        <div class="col_12 column">
            <!-- Menu Horizontal -->
            <ul class="menu">
                <li <?php echo ($this->here == '/cake/' || $this->here == '/cake/jobs') ? 'class="current"' : '' ?>><a href="<?php echo $this->webroot; ?>"><i class="icon-home"></i> Acceuil</a></li>
                <li <?php echo ($this->here == '/cake/jobs/browse') ? 'class="current"' : '' ?>><a href="<?php echo $this->webroot; ?>jobs/browse"><i class="icon-desktop"></i> Trouver un Emploi</a></li>
                <li <?php echo ($this->here == '/cake/users/register') ? 'class="current"' : '' ?>><a href="<?php echo $this->webroot; ?>users/register"><i class="icon-user"></i> Register</a></li>
                <li <?php echo ($this->here == '/cake/users/login') ? 'class="current"' : '' ?>><a href="<?php echo $this->webroot; ?>users/login"><i class="icon-key"></i> Login</a></li>
            </ul>
        </div>
    
        <div class="col_12 column">
            <?php  echo $this->Session->flash(); //messages like sucess?>
           <?php echo $this->fetch('content'); //content in views index.ctp?>
        </div>

        <div class="clearfix"></div>
        <footer>
            <p>Copyright 2020, Mon Emploi, All Rights Reserved</p>
        </footer>
    </div> <!-- End Grid -->
</body>

</html>