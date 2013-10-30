<hr />
<footer id="footer">
    <p class="pull-right">
        <a href="#top"><?php echo __("Back to top") ?></a> <i class="icon-arrow-up icon-white"></i>
    </p>

    Powered by <?php
    echo $this->Html->link(__('Croogo %s', strval(Configure::read('Croogo.version'))), 'http://www.croogo.org', array('target' => '_blank')
    );
    ?>
    <?php echo $this->Html->image('http://assets.croogo.org/powered_by.png'); ?>

    Theme: <?php
    echo $this->Html->link('Amelia Theme for Croogo', 'http://github.com/EmreErdogan/AmeliaCroogoTheme', array('target' => '_blank')
    );
    ?>

</footer>