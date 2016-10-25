<?php
$file = '';
if($this->plugin){
    $file = ROOT . DS . 'plugins'.DS.$this->plugin.DS. 'src' . DS . 'Template' . DS . 'Element' . DS . 'aside' . DS . 'sidebar-menu.ctp';
}
if(!file_exists($file)){
    $file = ROOT . DS . 'src' . DS . 'Template' . DS . 'Element' . DS . 'aside' . DS . 'sidebar-menu.ctp';
}

if (file_exists($file)) {
    ob_start();
    include_once $file;
    echo ob_get_clean();
} else {
?>
    <!-- sidebar menu -->
    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
        <div class="menu_section">
            <h3>General</h3>
            <ul class="nav side-menu">
                <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="/pages/index">Dashboard</a></li>
                        <li><a href="/pages/index2">Dashboard2</a></li>
                        <li><a href="/pages/index3">Dashboard3</a></li>
                    </ul>
                </li>
                <li><a><i class="fa fa-edit"></i> Forms <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="/pages/form">General Form</a></li>
                        <li><a href="/pages/form_advanced">Advanced Components</a></li>
                        <li><a href="/pages/form_validation">Form Validation</a></li>
                        <li><a href="/pages/form_wizards">Form Wizard</a></li>
                        <li><a href="/pages/form_upload">Form Upload</a></li>
                        <li><a href="/pages/form_buttons">Form Buttons</a></li>
                    </ul>
                </li>
                <li><a><i class="fa fa-desktop"></i> UI Elements <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="/pages/general_elements">General Elements</a></li>
                        <li><a href="/pages/media_gallery">Media Gallery</a></li>
                        <li><a href="/pages/typography">Typography</a></li>
                        <li><a href="/pages/icons">Icons</a></li>
                        <li><a href="/pages/glyphicons">Glyphicons</a></li>
                        <li><a href="/pages/widgets">Widgets</a></li>
                        <li><a href="/pages/invoice">Invoice</a></li>
                        <li><a href="/pages/inbox">Inbox</a></li>
                        <li><a href="/pages/calendar">Calendar</a></li>
                    </ul>
                </li>
                <li><a><i class="fa fa-table"></i> Tables <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="/pages/tables">Tables</a></li>
                        <li><a href="/pages/tables_dynamic">Table Dynamic</a></li>
                    </ul>
                </li>
                <li><a><i class="fa fa-bar-chart-o"></i> Data Presentation <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="/pages/chartjs">Chart JS</a></li>
                        <li><a href="/pages/chartjs2">Chart JS2</a></li>
                        <li><a href="/pages/morisjs">Moris JS</a></li>
                        <li><a href="/pages/echarts">ECharts</a></li>
                        <li><a href="/pages/other_charts">Other Charts</a></li>
                    </ul>
                </li>
                <li><a><i class="fa fa-clone"></i>Layouts <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="/pages/fixed_sidebar">Fixed Sidebar</a></li>
                        <li><a href="/pages/fixed_footer">Fixed Footer</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="menu_section">
            <h3>Live On</h3>
            <ul class="nav side-menu">
                <li><a><i class="fa fa-bug"></i> Additional Pages <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="/pages/e_commerce">E-commerce</a></li>
                        <li><a href="/pages/projects">Projects</a></li>
                        <li><a href="/pages/project_detail">Project Detail</a></li>
                        <li><a href="/pages/contacts">Contacts</a></li>
                        <li><a href="/pages/profile">Profile</a></li>
                    </ul>
                </li>
                <li><a><i class="fa fa-windows"></i> Extras <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="/pages/page_403">403 Error</a></li>
                        <li><a href="/pages/page_404">404 Error</a></li>
                        <li><a href="/pages/page_500">500 Error</a></li>
                        <li><a href="/pages/plain_page">Plain Page</a></li>
                        <li><a href="/pages/login">Login Page</a></li>
                        <li><a href="/pages/pricing_tables">Pricing Tables</a></li>
                    </ul>
                </li>
                <li><a><i class="fa fa-sitemap"></i> Multilevel Menu <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="/pages/#level1_1">Level One</a>
                        <li><a>Level One<span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                                <li class="sub_menu"><a href="/pages/level2">Level Two</a>
                                </li>
                                <li><a href="/pages/#level2_1">Level Two</a>
                                </li>
                                <li><a href="/pages/#level2_2">Level Two</a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="/pages/#level1_2">Level One</a>
                        </li>
                    </ul>
                </li>
                <li><a href="/pages/javascript:void(0)"><i class="fa fa-laptop"></i> Landing Page <span class="label label-success pull-right">Coming Soon</span></a></li>
            </ul>
        </div>

    </div>
    <!-- /sidebar menu -->
<?php } ?>
