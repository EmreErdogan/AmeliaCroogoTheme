<header class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container-fluid">
            <a class="btn btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <?php echo $this->Html->link(Configure::read('Site.title'), '/', array('class' => 'brand')); ?>
            <div class="nav-collapse collapse" style="height: 0px; ">
                <?php
                echo $this->Custom->menu('main', array('dropdown' => true));
                ?>
                <?php if ($this->Session->read('Auth.User.id')): ?>
                    <ul class="nav pull-right">
                        <li>
                            <a href="#">
                                <?php echo sprintf(__("You are logged in as: %s"), $this->Session->read('Auth.User.username')); ?>
                            </a>
                        </li>
                        <li>
                            <?php echo $this->Html->link(__("Log out"), array('plugin' => 'users', 'controller' => 'users', 'action' => 'logout')); ?>
                        </li>
                    </ul>
                <?php endif; ?>
            </div>
        </div>
    </div>
</header>