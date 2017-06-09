<?php
$file = '';
if($this->plugin){
    $file = ROOT . DS . 'plugins'.DS.$this->plugin.DS.'src' . DS . 'Template' . DS . 'Element' . DS . 'footer.ctp';
}
if(!file_exists($file)){
    $file = ROOT . DS . 'src' . DS . 'Template' . DS . 'Element' . DS . 'footer.ctp';
}

if (file_exists($file)) {
    ob_start();
    include_once $file;
    echo ob_get_clean();
} else {
?>
    <!-- footer content -->
    <footer>
        <div class="pull-right">
            &copy; <?= date('Y')?> <?php echo isset($theme['title']) ? $theme['title'] : 'Gentelella'; ?> - <?= __d('gentelella','Powered By BackstageEL')?> <a href="https://hostmoz.net">Hostmoz</a>
        </div>
        <div class="clearfix"></div>
    </footer>
    <!-- /footer content -->
<?php } ?>
