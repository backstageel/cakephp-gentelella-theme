<?php
$file = '';
if($this->plugin){
    $file = ROOT . DS . 'plugins'.DS.$this->plugin.DS.'src' . DS . 'Template' . DS . 'Element' . DS . 'aside-main-sidebar.ctp';
}
if(!file_exists($file)){
    $file = ROOT . DS . 'src' . DS . 'Template' . DS . 'Element' . DS . 'aside-main-sidebar.ctp';
}

if (file_exists($file)) {
    ob_start();
    include_once $file;
    echo ob_get_clean();
} else {
?>
    <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
                <a href="<?= $this->Url->build('/')?>" class="site_title"><i class="fa fa-paw"></i> <span><?php echo isset($theme['title']) ? $theme['title'] : 'Gentelella'; ?></span></a>
            </div>

            <div class="clearfix"></div>



            <!-- Sidebar user panel -->
            <?php echo $this->element('aside/user-panel'); ?>

            <br />
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <?php echo $this->element('aside/sidebar-menu'); ?>



            <!-- sidebar menu: : style can be found in sidebar.less -->
            <?php echo $this->element('aside/footer-buttons'); ?>
        </div>
    </div>
<?php } ?>
