<?php
$file = '';
if ($this->plugin) {
    $file = ROOT . DS . 'plugins' . DS . $this->plugin . DS . 'src' . DS . 'Template' . DS . 'Element' . DS . 'aside' . DS . 'user-panel.ctp';
}
if (!file_exists($file)) {
    $file = ROOT . DS . 'src' . DS . 'Template' . DS . 'Element' . DS . 'aside' . DS . 'user-panel.ctp';
}

if (file_exists($file)) {
    ob_start();
    include_once $file;
    echo ob_get_clean();
} else {
    ?>
    <!-- menu profile quick info -->
    <div class="profile">
        <div class="profile_pic">
            <?php echo $this->Html->image('Gentelella./images/img.jpg', ['class' => 'img-circle profile_img']) ?>
        </div>
        <div class="profile_info">
            <span><?= __d('gentelella', 'Welcome') ?>,</span>
            <h2><?php
                  if (!is_null($this->request->session()->read('Auth.User.name'))) {
                                       echo $this->request->session()->read('Auth.User.name');
                    } else if (!is_null($this->request->session()->read('Auth.User.username'))) {
                        echo $this->request->session()->read('Auth.User.username');
                    } else {
                        echo "John Doe";
                    }

                ?></h2>
        </div>
    </div>
    <!-- /menu profile quick info -->
<?php } ?>