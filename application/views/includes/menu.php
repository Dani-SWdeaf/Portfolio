<?php
    $session = $this->session->userdata('sw15');
    $menu = array();

    switch($session->role_user)
    {
        case 'Administrator':
            $menu = array(
                array(
                    "menu_icon" => "fa-calendar-alt",
                    "menu_title" => "Departamentos",
                    "menu_url" => "departmentos"
                ),
                array(
                    "menu_icon" => "fa-user",
                    "menu_title" => "T&eacute;cnicos",
                    "menu_url" => "tecnicos"
                ),
                array(
                    "menu_icon" => "fa-calendar-alt",
                    "menu_title" => "Cliente",
                    "menu_url" => "clientes"
                ),
            );
            break;
        
        default:
        //
        break;
    }
?>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="javascript:;" class="brand-link">
            <img src="<?= base_url("resources/dist/img/AdminLTELogo.png"); ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">SW - Portfolio</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="<?= base_url("resources/dist/img/user2-160x160.jpg"); ?>" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block"><?= $session->email_user; ?></a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                    <li class="nav-header">EXAMPLES</li>
                    <?php foreach($menu as $m ) { ?>
                    <li class="nav-item">
                        <a href="<?= $m['menu_url']; ?>" class="nav-link">
                            <i class="nav-icon far <?= $m['menu_icon']; ?>"></i>
                            <p>
                                <?= $m['menu_title']; ?>
                                <span class="badge badge-info right">2</span>
                            </p>
                        </a>
                    </li>
                    <?php } ?>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>